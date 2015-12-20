<?php
/*
 Main Purolator Tracking Class
woocommerce_purowebservice_tracking.php

Copyright (c) 2014 Jamez Picard, TrueMedia

*/
class woocommerce_purowebservice_tracking
{

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return woocommerce_purowebservice_tracking
	 */
	function __construct() {
		$this->init();
	}

	/**
	 * init function.
	 *
	 * @access public
	 * @return void
	 */
	function init() {
		$default_options = (object) array('enabled'=>'no', 'title'=>'Purolator', 'api_user'=>'', 'api_key'=>'','account'=>'','contractid'=>'','source_postalcode'=>'','mode'=>'live', 'display_errors'=>false, 'delivery'=>'', 'margin'=>'', 'packageweight'=>floatval('0.02'), 'boxes_enable'=> false, 'flatrate_enable'=> false, 'shipping_tracking'=> true, 'email_tracking'=> true, 'log_enable'=>false,'flatrate_limits'=>false,'flatrate_maxlength'=>'','flatrate_maxwidth'=>'','flatrate_maxheight'=>'', 'tracking_icons'=> true);
		$this->options		= get_option('woocommerce_purowebservice', $default_options);
		$this->options		= (object) array_merge((array) $default_options, (array) $this->options); // ensure all keys exist, as defined in default_options.
		$this->enabled		= $this->options->shipping_tracking && ( !empty($this->options->api_user) && !empty($this->options->api_key) );

		if ($this->enabled) {
			// Actions
			add_action( 'add_meta_boxes', array(&$this, 'add_tracking_details_box') );
			add_action('wp_ajax_purowebservice_update_order_tracking', array(&$this, 'update_order_tracking'));
			add_action('woocommerce_order_details_after_order_table',  array(&$this, 'add_tracking_details_customer') );
			add_action('woocommerce_email_after_order_table',  array(&$this, 'add_tracking_details_customer') );
		}

	}

	// Customer My Order page displays tracking information.
	public function add_tracking_details_customer($order) {
		$post_id = $order->id;
		//if ($order->status!='pending'){
		// Lookup Shipping method used. If Purolator, then look for postmeta with a Tracking Number.
		$trackingPin = get_post_meta( $post_id, '_purowebservice_tracking', true);
		$trackingData = array();
			
		if (!empty($trackingPin) && is_array($trackingPin)){
				
			foreach($trackingPin as $pin){
				// Does cached lookup
				$trackingData[] = $this->lookup_tracking($post_id, $pin);
			}
				
			echo '<header><h2>'.__( 'Order Shipping Tracking', 'woocommerce-purolator-webservice' ).'</h2></header>';
			echo $this->display_tracking($trackingData, $post_id, false, false); // does not display admin btns.
				
		}
		//}
	}

	/* Adds a box to the main column on the Post and Page edit screens */
	public function add_tracking_details_box() {
		add_meta_box( 'purowebservice_tracking', __( 'Order Shipping Tracking', 'woocommerce-purolator-webservice' ),  array(&$this,'display_tracking_view'), 'shop_order', 'normal', 'default' );
	}

	public function display_tracking_view(){
		global $post_id;
		?>
		<div id="purowebservice_tracking_result">
		<?php 
		// Lookup Shipping method used. If Purolator, then look for postmeta with a Tracking Number.
		$trackingPin = get_post_meta( $post_id, '_purowebservice_tracking', true);
		
		$trackingData = array();
		
		if (!empty($trackingPin) && is_array($trackingPin)){
			
			foreach($trackingPin as $pin){
				// Does cached lookup 
				$trackingData[] = $this->lookup_tracking($post_id, $pin);
			}
	
			echo $this->display_tracking($trackingData, $post_id, false, true);
			
		}
		?>
		</div>
		<ul>
		<li><img src="<?php echo plugins_url( 'img/purolator.png' , dirname(__FILE__) ); ?>" style="vertical-align:middle" /> <input type="text" class="input-text" size="22" name="purowebservice_trackingid" id="purowebservice_trackingid" placeholder="" value="" /> 
		<a href="<?php echo wp_nonce_url( admin_url( 'admin-ajax.php?action=purowebservice_update_order_tracking&order_id=' . $post_id ), 'purowebservice_update_order_tracking' ); ?>&trackingno=" class="button tips purowebservice-tracking" target="_blank" title="<?php _e( 'Add Tracking Pin', 'woocommerce-purolator-webservice' ); ?>" data-tip="<?php _e( 'Add Tracking Pin', 'woocommerce-purolator-webservice' ); ?>">
		<?php _e( 'Add Tracking Pin', 'woocommerce-purolator-webservice' ); ?> 
		</a> <img src="<?php admin_url(); ?>/wp-admin/images/wpspin_light.gif" alt="" class="purowebservice_ajaxsave" style="display: none;" /></li>
		</ul>
		
		<?php wp_nonce_field( plugin_basename( __FILE__ ), 'purowebservice_tracking_noncename' ); ?>
		<script type="text/javascript">
					jQuery(document).ready(function($) {
						$('.purowebservice-tracking').on('click', function(event) {
							
							var url = $(this).attr('href') + $('input#purowebservice_trackingid').val();
							// ajax request.
							$('img.purowebservice_ajaxsave').show();
							$.get(url,function(data){
								if (data!='Duplicate Pin.') {
									if (data.indexOf('<table')==0){
										$('#purowebservice_tracking_result').html(data);
									} else {
										$('#purowebservice_tracking_result table').append(data);
									}
								}
								$('img.purowebservice_ajaxsave').hide();
							});

							return false;
						});
						$('#purowebservice_tracking_result').on('click','.purowebservice_refresh',function() {
							var url = $(this).attr('href');
							var pin = $(this).data('pin');
							$('img.purowebservice_ajaxsave').show();
							$.get(url,function(data){
								$('#purowebservice_tracking_result').find('.purowebservice_track_'+pin).replaceWith(data);
								$('img.purowebservice_ajaxsave').hide();
							});
							return false;
						});
						$('#purowebservice_tracking_result').on('click','.purowebservice_remove',function() {
							var url = $(this).attr('href');
							var pin = $(this).data('pin');
							$('img.purowebservice_ajaxsave').show();
							$.get(url,function(data){
								$('#purowebservice_tracking_result').find('.purowebservice_track_'+pin).remove();
								$('img.purowebservice_ajaxsave').hide();
							});
							return false;
						});
					});
		</script>
		<?php 
		
	}
	
	/* Does Lookup & Displays Tracking information */
	public function display_tracking($trackingData, $post_id, $only_rows=false, $display_buttons=false){
		
		// Locale for Link to CP.
		// $locale = 'en' : 'fr';
		if (defined('ICL_LANGUAGE_CODE')){
			$locale = (ICL_LANGUAGE_CODE=='fr') ? 'fr':'en'; // 'en' is default
		} else if (WPLANG == 'fr_FR'){
			$locale = 'fr';
		} else {
			$locale = 'en';
		}
		
		// Display Tracking info:
		$html = '';
		if (count($trackingData) > 0){
			
			$html.= $only_rows ? '' : '<table class="widefat fixed"><tr>'.($display_buttons ? '<th></th>' : '').'<th>'. __( 'Tracking Number', 'woocommerce-purolator-webservice' ).'</th><th>'. __( 'Event', 'woocommerce-purolator-webservice' ).'</th><th>'. __( 'Shipping Service', 'woocommerce-purolator-webservice' ).'</th><th>'. __( 'Shipped', 'woocommerce-purolator-webservice' ).'</th><th>'. __( 'Delivery', 'woocommerce-purolator-webservice' ).'</th><th>'. __( 'Reference', 'woocommerce-purolator-webservice' ).'</th></tr>';
			foreach ($trackingData as $trackingRow) {
				if (count($trackingRow) > 0){
					
					foreach($trackingRow as $track){
						$html.='<tr class="purowebservice_track_'.esc_attr($track['pin']).'">';
						if ($display_buttons) {
							$html.='<td><a href="'.wp_nonce_url( admin_url( 'admin-ajax.php?action=purowebservice_update_order_tracking&refresh_row=1&order_id=' . $post_id.'&trackingno='.esc_attr($track['pin']) ), 'purowebservice_update_order_tracking' ).'" class="button purowebservice_refresh" data-pin="'.esc_attr($track['pin']).'">'.__('Update','woocommerce-purolator-webservice').'</a> ';
							$html.='<a href="'.wp_nonce_url( admin_url( 'admin-ajax.php?action=purowebservice_update_order_tracking&remove_tracking=1&order_id=' . $post_id.'&trackingno='.esc_attr($track['pin']) ), 'purowebservice_update_order_tracking' ).'" class="button purowebservice_remove" data-pin="'.esc_attr($track['pin']).'">'.__('Remove','woocommerce-purolator-webservice').'</a></td>';
						}
						$html.='<td class="shipping-trackingno"><a href="https://www.purolator.com/'.($locale=='fr' ? 'fr' : 'purolator').'/ship-track/tracking-details.page?pin='.esc_attr($track['pin']) .'" target="_blank">';
						if ($this->options->tracking_icons) { $html.= '<img src="'.plugins_url( 'img/shipped.png' , dirname(__FILE__) ).'" width="16" height="16" border="0" style="vertical-align:middle" alt="Tracking" /> '; }
						$html.= esc_html($track['pin']) . '</a></td>';
						if (!empty($track['event-description']) && !empty($track['event-date-time'])){
							$html.='<td class="shipping-eventinfo">' . esc_html($track['event-description']) . ' '  . esc_html($this->format_location($track['event-location'])) . '<br />' . esc_html($track['event-date-time']). '</td>';
							$html.='<td class="shipping-servicename">';
							if ($this->options->tracking_icons) { $html.= '<img src="'.plugins_url( 'img/ship_purolator.png' , dirname(__FILE__) ).'"  style="vertical-align:middle" /> ';} else { $html.= __('Purolator','woocommerce-purolator-webservice').' '; }
							$html.= esc_html($track['service-name']).'</td>';
							$html.='<td class="shipping-date">Shipped on <strong>'.esc_html($track['mailed-on-date']) . '</strong><br />'.esc_html($track['origin-postal-id']).' to '.esc_html($track['destination-postal-id']).'</td>';
							if ($track['actual-delivery-date']) { 
								$html.= '<td class="shipping-delivered">' . __('Delivered','woocommerce-purolator-webservice').': <strong>' . esc_html($track['actual-delivery-date']) . '</strong></td>';
							} else if ($track['expected-delivery-date']) {
								$html.= '<td class="shipping-expected">' . __('Expected Delivery','woocommerce-purolator-webservice').': ' . esc_html($track['expected-delivery-date']) . '</td>';
							} else {
								$html.='<td></td>';
							}
							$html.='<td class="shipping-refno">'.esc_html($track['customer-ref-1']) . '</td>';
						} else {
							$html.='<td colspan="5" class="shipping-info">'. __( 'No Tracking Data Found', 'woocommerce-purolator-webservice' ).'.</td></tr>';
						}
						$html.='</tr>';
					}
				}
			}
			$html .= $only_rows ? '' : '</table>';
			
		} 
		// Return display Html
		return $html;
	}
	
	public function lookup_tracking($post_id, $trackingPin, $refresh=false){
		global $woocommerce;
		if (!empty($trackingPin)) {
			// Get post meta (cached) data
			$trackingData = get_post_meta( $post_id,'purowebservice_tracking_'.$post_id.'_'.$trackingPin, true);
			
			// If data is older than 4 hrs but less than 1 week, auto-update.
			if (!empty($trackingData) && is_array($trackingData) && isset($trackingData[0]['update-date-time'])){
				$update = intval($trackingData[0]['update-date-time']);
				if ($update > 0){
					$diff = time() - $update;
					if ($diff > 14400 && $diff < 604800){ // More then 4 hrs but less than 7 days in seconds
						$refresh = true;
					}
				}
			}
			
			// Run Live Lookup
			if (empty($trackingData) || $refresh){
	
				// Live Lookup at Purolator.
				$trackingData = array();
				
				// Get shipping postal code from order.
				$order = new WC_Order($post_id);
				$postal_code = $order->shipping_postcode;
				$dest_prov = $order->shipping_state;
								
				// Options Data
				$username = $this->options->api_user;
				$password = $this->options->api_key;
				
				// SOAP URL
				$service_url = ($this->options->mode=='live') ? 'https://webservices.purolator.com/PWS/V1/Tracking/TrackingService.asmx' : 'https://devwebservices.purolator.com/PWS/V1/Tracking/TrackingService.asmx'; 
				
				// Service Language: (English or Francais) sent as Accept-language header with a value of 'fr-CA' or 'en-CA'
				// If using WPML:
				if (defined('ICL_LANGUAGE_CODE')){
					$service_language = (ICL_LANGUAGE_CODE=='fr') ? 'fr':'en'; // 'en-CA' is default
				} else if (WPLANG == 'fr_FR'){
					$service_language = 'fr';
				} else {
					$service_language = 'en';
				}

				// Create XML Request
				$xmlRequest =  new SimpleXMLElement(<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<soap-env:Envelope xmlns:soap-env="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://purolator.com/pws/datatypes/v1"><soap-env:Header><ns1:RequestContext><ns1:Version>1.1</ns1:Version><ns1:Language>en</ns1:Language><ns1:GroupID></ns1:GroupID><ns1:RequestReference></ns1:RequestReference></ns1:RequestContext></soap-env:Header>
<soap-env:Body><ns1:TrackPackagesByPinRequest><ns1:PINs><ns1:PIN><ns1:Value></ns1:Value></ns1:PIN></ns1:PINs></ns1:TrackPackagesByPinRequest></soap-env:Body></soap-env:Envelope>
XML
				);
				
				$xmlNameSpaces = $xmlRequest->getNamespaces(true);
				$soapHeader = $xmlRequest->children($xmlNameSpaces['soap-env'])->Header->children($xmlNameSpaces['ns1'])->RequestContext->children();
				$soapBody = $xmlRequest->children($xmlNameSpaces['soap-env'])->Body->children($xmlNameSpaces['ns1'])->TrackPackagesByPinRequest->children();
				
				// Soap Request Values
				$soapHeader->Language = $service_language;
				$soapBody->PINs->PIN->Value = $trackingPin;
				
				$xmlRequestString = $xmlRequest->asXML();
				
				// display errors
				$display_errors = ($this->options->display_errors ? true : false);

				try {

					$curl = curl_init($service_url); // Create REST Request
					curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
					curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
					curl_setopt($curl, CURLOPT_CAINFO, WC_PUROWEBSERVICE_PLUGIN_PATH . '/cert/cacert.pem'); // Signer Certificate in PEM format
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
					curl_setopt($curl, CURLOPT_USERPWD, $username . ':' . $password);
					curl_setopt($curl, CURLOPT_POST, true);
					curl_setopt($curl, CURLOPT_POSTFIELDS, $xmlRequestString);
					$curl_headers = array(
								"Content-type: text/xml;charset=\"utf-8\"",
								"Accept: text/xml",
								"Cache-Control: no-cache",
								"Pragma: no-cache",
								"SOAPAction: http://purolator.com/pws/service/v1/TrackPackagesByPin",
								"Content-length: ".strlen($xmlRequestString),
								"Accept-language: $service_language"
						); //SOAPAction: your op URL
						curl_setopt($curl, CURLOPT_HTTPHEADER, $curl_headers);
					$curl_response = curl_exec($curl); // Execute SOAP Request
					if(curl_errno($curl) && $display_errors){
						echo 'Curl error: ' . curl_error($curl) . "\n";
					}
					
					if ($display_errors){
						echo 'HTTP Response Status: ' . curl_getinfo($curl,CURLINFO_HTTP_CODE) . "\n";
					}
					
					curl_close($curl);
					
					// Using SimpleXML to parse xml response
					libxml_use_internal_errors(true);
					$xml = simplexml_load_string( '<root>' . preg_replace('(<(\/?)s:Body>|<(\/?)s:Header>|<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/">|<\/s:Envelope>)','', $curl_response) . '</root>');
					if (!$xml && $display_errors) {
						echo 'Failed loading XML' . "\n";
						echo $curl_response . "\n";
						foreach(libxml_get_errors() as $error) {
							echo "\t" . $error->message;
						}
					} else if ($xml) {
						
						$error = isset($xml->{'s:Fault'}) ? $xml->{'s:Fault'} : null;
						if (!$error) {
							$trackingSummary = $xml->TrackPackagesByPinResponse->TrackingInformationList->TrackingInformation;
							if ($trackingSummary && $trackingSummary->Scans) {
								
								$row['pin'] = $trackingPin;
								
								$trackingDataRaw = array();
								
								$first_scan_date = new DateTime("tomorrow");
								$last_scan_date = new DateTime("2000-01-01");
								$scan_date = null;

								$trackingScans = $trackingSummary->Scans->children();
								// Returns scans from tracking.  We need to save the most recent one.								
								foreach ( $trackingScans as $pinSummary ) {
									$row['pin'] = (string)$pinSummary->PIN->Value;
									$row['event-description'] =  (string)$pinSummary->Description;
									// Scan date
									$scan_date = DateTime::createFromFormat('Y-m-d H:i:s',(string) $pinSummary->ScanDate . ' ' . $this->format_puro_time($pinSummary->ScanTime));
									$row['event-date-time'] = $scan_date->format('Y-m-d H:i:s');
									
									if ( $scan_date <  $first_scan_date ){ // current is earlier
										$first_scan_date = $scan_date;
									}
									if ( $scan_date > $last_scan_date ){ // current is later
										$last_scan_date = $scan_date;
									}
									
									$row['mailed-on-date'] =  '';
									$row['origin-postal-id'] =  '';
									$row['destination-postal-id'] =  strlen($postal_code) > 3 ? substr($postal_code,0,3) : $postal_code;
									$row['destination-province'] = $dest_prov;
									$row['service-name'] =  '';
									$row['expected-delivery-date'] =  '';
									$row['actual-delivery-date'] = '';
									
									$row['attempted-date'] = '';
									$row['customer-ref-1'] =  '';
									$row['event-type'] =  (string)$pinSummary->ScanType;
									$row['event-location'] =  (string)$pinSummary->Depot->Name;
									$row['update-date-time'] = time();
									
									// Save to Raw tracking data array.
									if (!array_key_exists($scan_date->format('Y-m-d H:i:s'),$trackingDataRaw)){
										$trackingDataRaw[$scan_date->format('Y-m-d H:i:s')] = $row;
									}
									
								} // end foreach
								$last_scan_index = $last_scan_date->format('Y-m-d H:i:s');
								$first_scan_index = $first_scan_date->format('Y-m-d H:i:s');
								
								// Assign tracking data that was parsed to TrackingData array.
								if (!empty($trackingDataRaw) && isset($trackingDataRaw[$last_scan_index])){
								
									// Use latest scan and first scan information. (sometimes they're the same)
									$row = $trackingDataRaw[$last_scan_index];
									
									if (stristr($row['event-description'],'delivered')){
										$row['actual-delivery-date'] = $row['event-date-time'];
									}
									
									if (isset($trackingDataRaw[$first_scan_index])){
										// match $trackingDataRaw[$first_scan_date]['event-description']  // created with reference : 1070976
										preg_match('/reference : (?P<ref>\d+)/', $trackingDataRaw[$first_scan_index]['event-description'], $matches);
										if (count($matches) > 0 && isset($matches['ref'])){
											$row['customer-ref-1'] =  $matches['ref'];
										}
										$row['mailed-on-date'] = $trackingDataRaw[$first_scan_index]['event-date-time'];
									}
									// Save to Tracking Data.
									$trackingData[] = $row;
								}
								
							}
							if ($xml->TrackPackagesByPinResponse->ResponseInformation->Errors && count($xml->TrackPackagesByPinResponse->ResponseInformation->Errors->children()) > 0) {
								$apierror = '';
								$messages = $xml->TrackPackagesByPinResponse->ResponseInformation->Errors->children();
								foreach ( $messages as $message ) {
									$apierror .= 'Error Code: ' . $message->Code . "\n";
									$apierror .= 'Error Msg: ' . $message->Description . "\n\n";
								}
								$message .= $apierror;
								if ($display_errors) { echo $message; }
							}
						} else {
							$apierror = '';
							$errors = $xml->children();
							foreach ( $errors as $error ) {
								$apierror .= 'Error Code: ' . $error->faultcode . "\n";
								$apierror .= 'Error Msg: ' . $error->faultstring . "\n\n";
							}
							$message .= $apierror;
							if ($display_errors) { echo $message; }
						}
						
					} else {
						// No tracking available for that pin.
					}
				} catch (Exception $ex) {
						// cURL request went wrong.
						if ($display_errors){
							echo 'Error: ' . $ex; 
						}
				}
				
				if (empty($trackingData)){
					// No tracking was available. just save pin so that this can be displayed to user/and/or able to be removed.
					$row['pin'] = $trackingPin;
					$trackingData[] = $row;
				}
			
				// Save data post meta
				update_post_meta($post_id, 'purowebservice_tracking_'.$post_id.'_'.$trackingPin, $trackingData );
			}
			
			return $trackingData;
			
		}
		
		return array();
	}
	
	
	/**
	 * Load and generate the template output with ajax
	 */
	public function update_order_tracking() {
		// Let the backend only access the page
		if( !is_admin() ) {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
			
		// Check the user privileges
		if( !current_user_can( 'manage_woocommerce_orders' ) && !current_user_can( 'edit_shop_orders' ) ) {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
			
		// Check the action
		if( empty( $_GET['action'] ) || !check_admin_referer( $_GET['action'] ) ) {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
			
		// Check if all parameters are set
		if( empty( $_GET['trackingno'] ) || empty( $_GET['order_id'] ) ) {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		
		// Nonce.
		if ( ! isset( $_GET['_wpnonce'] ) || ! wp_verify_nonce( $_GET['_wpnonce'], 'purowebservice_update_order_tracking' ) )
			return;
			
		// Get tracking no, post_id
		$trackingnumber = sanitize_text_field( $_GET['trackingno'] );
		$post_id = intval( $_GET['order_id'] );
		
		// Remove spaces and dashes from tracking number
		$trackingnumber = preg_replace('/[\r\n\t \-]+/', '', $trackingnumber);
		
		// Current tracking pins:
		$trackingPins = get_post_meta($post_id, '_purowebservice_tracking', true);
		
		// Do action: Refresh
		if( !empty( $_GET['refresh_row'] ) && !empty($trackingPins) ) {
			$t = $this->lookup_tracking($post_id, $trackingnumber, true); // force refresh.
			echo $this->display_tracking(array($t),$post_id, true, true);
			exit;
		}
		
		// Do action: Remove
		if( !empty( $_GET['remove_tracking'] ) && !empty($trackingPins) ) {
			$updatedPins = array_diff($trackingPins, array($trackingnumber));			

			// Remove data (if any)
			delete_post_meta($post_id, 'purowebservice_tracking_'.$post_id.'_'.$trackingnumber );
			// Remove Pin
			if (!empty($updatedPins)){
				update_post_meta($post_id, '_purowebservice_tracking' , $updatedPins );
			} else {
				delete_post_meta($post_id, '_purowebservice_tracking' );
			}
			echo 'Removed.';
			exit;
		}
		
		// Do action: Add
		if (empty($trackingPins) || !in_array($trackingnumber, $trackingPins)){ // ensures pin isn't added twice.
		
			$addmode = empty($trackingPins);			

			if (!is_array($trackingPins))
				$trackingPins = array();
			
			$trackingPins[] = $trackingnumber;
			
			// Save Tracking Pins.
			if ($addmode){
				add_post_meta($post_id, '_purowebservice_tracking' , $trackingPins, true);
			} else {
				update_post_meta($post_id, '_purowebservice_tracking' , $trackingPins );
			}
			
			// Lookup & display tracking
			$t = $this->lookup_tracking($post_id, $trackingnumber);
			echo $this->display_tracking(array($t),$post_id, (count($trackingPins)!=1), true);
			
			exit;
		}
		
		echo 'Duplicate Pin.';
		
		exit;
	}
	
	public function format_puro_time($puroTime)
	{
		// 001300 to xx:xx:xx GMT
		if (strlen($puroTime) == 6)
		{
			$puroTime = substr($puroTime,0,2) . ':' . substr($puroTime,2,2) . ':' . substr($puroTime,3,2);
		}
		return $puroTime;
	}
	
	public function format_location($location){
		// Format location to be title case but last 2 digits is Province.
		if (strlen($location) > 0){
			$prov = substr($location,-2,2);
			$location = ucwords(strtolower(substr($location,0,-2))) . $prov;
		}
		return $location;
	}
	

	// This function runs on a regular basis to update recent orders that have tracking attached.
	// It will send an email if configured.
	public function scheduled_update_tracked_orders() {

		global $woocommerce;
		$orders = '';
		$order_email_queue = array();
		add_filter('posts_where', array( &$this,  'tracked_orders_where_dates') );
		$orders = get_posts( array(
				'numberposts' => 50,
				'offset' => 0,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'post_type' => 'shop_order',
				'meta_key' => '_purowebservice_tracking',
				'tax_query' => array(
	                array(
	                    'taxonomy' => 'shop_order_status',
	                    'field' => 'slug',
	                    'terms' => array('pending','processing','completed')
	                )
	            )
		) );
		remove_filter('posts_where', array( &$this,  'tracked_orders_where_dates'));
		
		if (!empty($orders)) {

		    foreach( $orders as $order ) {  setup_postdata($order);
				// Check for tracking numbers.
				$trackingPins = get_post_meta($order->ID, '_purowebservice_tracking', true);
				// Check for last update.
				$trackingUpdates = array();
				
				if (!empty($trackingPins) && is_array($trackingPins)){
						
					foreach($trackingPins as $pin){
						
						$trackingData = get_post_meta( $order->ID,'purowebservice_tracking_'.$order->ID.'_'.$pin, true);
						
						// If data is older than 1 day but less than 30 days, do update.
						if (!empty($trackingData) && is_array($trackingData) && isset($trackingData[0]['update-date-time'])){
							$update = intval($trackingData[0]['update-date-time']);
							if ($update > 0){
								$diff = time() - $update;
								if ($diff > 86400 && $diff < 86400 * 30 ){ // More then 1 day but less than 30 days in seconds
									
									// DO TRACKING UPDATE.
									// Update Tracking
									$trackingUpdated = $this->lookup_tracking($order->ID, $pin, true);
									// Compare to current data
									if (!empty($trackingUpdated) && is_array($trackingUpdated) && isset($trackingUpdated[0]['update-date-time'])){
													
										// Compare 'mailed-on-date', if it is now a value, then an email notification should go out.
										if ((empty($trackingData[0]['mailed-on-date']) && !empty($trackingUpdated[0]['mailed-on-date'])) 
											|| (isset($trackingData[0]['mailed-on-date']) && !empty($trackingUpdated[0]['mailed-on-date']) && $trackingUpdated[0]['mailed-on-date'] != $trackingData[0]['mailed-on-date'])) {
											// Send out email notification for this order.
											if (!in_array($order->ID,$order_email_queue)) { $order_email_queue[] = 	$order->ID; }

										}
										
										// Compare 'actual-delivery-date', if it is now a value (and was not before), then an email notification should go out.
										elseif ((empty($trackingData[0]['actual-delivery-date']) && !empty($trackingUpdated[0]['actual-delivery-date']))
												|| (isset($trackingData[0]['actual-delivery-date']) && !empty($trackingUpdated[0]['actual-delivery-date']) && $trackingUpdated[0]['actual-delivery-date'] != $trackingData[0]['actual-delivery-date'])) {
											// Send out email notification for this order.
											if (!in_array($order->ID,$order_email_queue)) { $order_email_queue[] = 	$order->ID; }
										
										}

									}

								} // end if within specified update time.
							}
						}
						
					}
					
				}
						
			} // endforeach
			
			// Loop through $order_email_queue and send out notification emails.  Will be 'resending' invoice email.
			$invoice = null;
			$mailer = $woocommerce->mailer();
			$mails = $mailer->get_emails();
			if ( ! empty( $mails ) ) {
				foreach ( $mails as $mail ) {
					if ( $mail->id == 'customer_invoice' ) {
						$invoice = $mail;
					}
				}
			} 
			
			if ($invoice) {
			
				foreach($order_email_queue as $order_id_email) {
					try {
						$invoice->trigger( $order_id_email );
					}
					 catch (Exception $ex){
						// email unable to send.
					}
					
				}
			}

		}

	}
	
	// Only update tracking on order updated in the last 30 days.
	public function tracked_orders_where_dates( $where ){
		global $wpdb;
	
		$where .= $wpdb->prepare(" AND post_date >= '%s' ", date("Y-m-d",time() - 30 * 24 * 60 * 60));
	
		return $where;
	}
	
}