<?php
/*
 Main Purolator Webserivce Class
 woocommerce_purowebservice.php

Copyright (c) 2014 Jamez Picard

*/
class woocommerce_purowebservice extends WC_Shipping_Method
{

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return woocommerce_purowebservice
	 */
	function __construct() {
		$this->id 			= 'woocommerce_purowebservice';
		$this->method_title 	= __('Purolator', 'woocommerce-purolator-webservice');
		$this->init();
	}

	/**
	 * init function.
	 *
	 * @access public
	 * @return void
	 */
	function init() {
		$default_options = (object) array('enabled'=>'no', 'title'=>'Purolator', 'api_user'=>'', 'api_key'=>'','account'=>'','contractid'=>'','source_postalcode'=>'','mode'=>'live', 'display_errors'=>false, 'delivery'=>'', 'packagetype'=>'', 'margin'=>'', 'packageweight'=>floatval('0.02'), 'boxes_enable'=> false, 'flatrate_enable'=> false, 'shipping_tracking'=> true, 'email_tracking'=> true, 'log_enable'=>false,'flatrate_limits'=>false,'flatrate_maxlength'=>'','flatrate_maxwidth'=>'','flatrate_maxheight'=>'', 'tracking_icons'=> true);
		$this->options		  = get_option('woocommerce_purowebservice', $default_options);
		$this->options		  =	(object) array_merge((array) $default_options, (array) $this->options); // ensure all keys exist, as defined in default_options.
		$this->enabled		  = $this->options->enabled;
		$this->title 		  = $this->options->title;
		$this->type			  = 'order';
		$this->boxes		  = get_option('woocommerce_purowebservice_boxes');
		$this->services		  = get_option('woocommerce_purowebservice_services', array());
		$this->flatrates	  = get_option('woocommerce_purowebservice_flatrates', array());
		$this->log 			  = (object) array('cart'=>array(),'params'=>array(),'request'=>array('http'=>'','service'=>''),'rates'=>array());

		// Defined Services
		$this->init_available_services();

		// Actions
		add_action('woocommerce_update_options_shipping_' . $this->id, array(&$this, 'process_admin_options'));
	}


		
		
	/*
	 * Defined Services
	*/
	function init_available_services() {
		$this->available_services = array(
				'PurolatorGround'=>__('Purolator Ground', 'woocommerce-purolator-webservice'),
				'PurolatorGround9AM'=>__('Purolator Ground 9AM', 'woocommerce-purolator-webservice'),
				'PurolatorGround10:30AM'=>__('Purolator Ground 10:30AM', 'woocommerce-purolator-webservice'),
				'PurolatorGroundEvening'=>__('Purolator Ground Evening', 'woocommerce-purolator-webservice'),
				/*'PurolatorGroundDistribution'=>__('Purolator Ground Distribution', 'woocommerce-purolator-webservice'),*/
				'PurolatorExpress'=>__('Purolator Express', 'woocommerce-purolator-webservice'),
				'PurolatorExpress9AM'=>__('Purolator Express 9AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpress10:30AM'=>__('Purolator Express 10:30AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressEvening'=>__('Purolator Express Evening', 'woocommerce-purolator-webservice'),
				'PurolatorExpressEnvelope9AM'=>__('Purolator Express Envelope 9AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressEnvelope10:30AM'=>__('Purolator Envelope 10:30AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressEnvelope'=>__('Purolator Express Envelope', 'woocommerce-purolator-webservice'),
				'PurolatorExpressEnvelopeEvening'=>__('Purolator Envelope Evening', 'woocommerce-purolator-webservice'),
				'PurolatorExpressPack'=>__('Purolator Express Pack', 'woocommerce-purolator-webservice'),
				'PurolatorExpressPack9AM'=>__('Purolator Express Pack 9AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressPack10:30AM'=>__('Purolator Express Pack 10:30AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressPackEvening'=>__('Purolator Express Pack Evening', 'woocommerce-purolator-webservice'),
				'PurolatorExpressBox9AM'=>__('Purolator Express Box 9AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressBox10:30AM'=>__('Purolator Express Box 10:30AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressBox'=>__('Purolator Express Box', 'woocommerce-purolator-webservice'),
				'PurolatorExpressBoxEvening'=>__('Purolator Express Box Evening', 'woocommerce-purolator-webservice'),
				
				'PurolatorGroundU.S.'=>__('Purolator Ground U.S.', 'woocommerce-purolator-webservice'),
				'PurolatorExpressU.S.'=>__('Purolator Express U.S.', 'woocommerce-purolator-webservice'),
				'PurolatorExpressU.S.9AM'=>__('Purolator Express U.S. 9AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressU.S.10:30AM'=>__('Purolator Express U.S. 10:30AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressU.S.12:00'=>__('Purolator Express U.S. 12:00PM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressEnvelopeU.S.'=>__('Purolator Express Envelope U.S.', 'woocommerce-purolator-webservice'),
				'PurolatorExpressU.S.Envelope9AM'=>__('Purolator Express U.S. Envelope 9AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressU.S.Envelope10:30AM'=>__('Purolator U.S. Envelope 10:30AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressU.S.Envelope12:00'=>__('Purolator U.S. Envelope 12:00PM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressPackU.S.'=>__('Purolator Express Pack U.S.', 'woocommerce-purolator-webservice'),
				'PurolatorExpressU.S.Pack9AM'=>__('Purolator Express U.S. Pack 9AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressU.S.Pack10:30AM'=>__('Purolator Express U.S. Pack 10:30AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressU.S.Pack12:00'=>__('Purolator Express U.S. Pack12:00PM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressBoxU.S.'=>__('Purolator Express Box U.S.', 'woocommerce-purolator-webservice'),
				'PurolatorExpressU.S.Box9AM'=>__('Purolator Express U.S. Box 9AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressU.S.Box10:30AM'=>__('Purolator Express U.S. Box 10:30AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressU.S.Box12:00'=>__('Purolator Express U.S. Box 12:00PM', 'woocommerce-purolator-webservice'),
				
				'PurolatorExpressInternational'=>__('Purolator Express International', 'woocommerce-purolator-webservice'),
				'PurolatorExpressInternational9AM'=>__('Purolator Express International 9AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressInternational10:30AM'=>__('Purolator Express International 10:30AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressInternational12:00'=>__('Purolator Express International 12:00PM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressEnvelopeInternational'=>__('Purolator Express Envelope International', 'woocommerce-purolator-webservice'),
				'PurolatorExpressInternationalEnvelope9AM'=>__('Purolator Express International Envelope 9AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressInternationalEnvelope10:30AM'=>__('Purolator Express International Envelope 10:30AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressInternationalEnvelope12:00'=>__('Purolator Express International Envelope 12:00PM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressPackInternational'=>__('Purolator Express Pack International', 'woocommerce-purolator-webservice'),
				'PurolatorExpressInternationalPack9AM'=>__('Purolator Express International Pack 9AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressInternationalPack10:30AM'=>__('Purolator Express International Pack 10:30AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressInternationalPack12:00'=>__('Purolator Express International Pack 12:00PM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressBoxInternational'=>__('Purolator Express Box International', 'woocommerce-purolator-webservice'),
				'PurolatorExpressInternationalBox9AM'=>__('Purolator Express International Box 9AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressInternationalBox10:30AM'=>__('Purolator Express International Box 10:30AM', 'woocommerce-purolator-webservice'),
				'PurolatorExpressInternationalBox12:00'=>__('Purolator Express International Box 12:00PM', 'woocommerce-purolator-webservice'),
		);
	}
	
	/**
	 * Provides translated Service Name
	 * @param string $serviceId
	 * @return string
	 */
	function get_service_name($serviceId){
		if (isset($this->available_services[$serviceId])){
			return $this->available_services[$serviceId];
		}
		return $serviceId;
	}

	// Helps group services.
	function get_destination_from_service($service_code){
		if (!empty($service_code)) {
			if (stristr($service_code,'U.S.') !== false) {
				return __('USA', 'woocommerce-purolator-webservice');
			} else if (stristr($service_code,'International') !== false){
				return __('International', 'woocommerce-purolator-webservice');
			} else {
				return __('Canada', 'woocommerce-purolator-webservice');
			}
		}
		return '';
	}
	
	// Helps group services.
	function get_css_class_package_type($service_code){
		if (!empty($service_code) && stristr($service_code,'Express') !== false) {
			if (stristr($service_code,'Envelope') !== false) {
				return 'purowebservice-package purowebservice-envelope';
			} else if (stristr($service_code,'Pack') !== false){
				return 'purowebservice-package purowebservice-pack';
			} else if (stristr($service_code,'Box') !== false){
				return 'purowebservice-package purowebservice-box';
			}
		}
		return '';
	}
	
	
	/*
	 * Main Purolator Lookup Rates function
	*/
	function calculate_shipping( $package = array() ) {
			
		global $woocommerce;
		//$_tax = &new woocommerce_tax();

		// Need to calculate total package weight.

		// Get total volumetric weight.
		$total_quantity = 0;
		$total_weight = 0;
		$max = array('length'=>0, 'width'=>0, 'height'=>0);
		$dimension_unit = get_option( 'woocommerce_dimension_unit' );
		$weight_unit = get_option( 'woocommerce_weight_unit' );
		$length = $width = $height = 0;
		$cubic = 0;

		foreach ( $package['contents'] as $item_id => $values ) {
			if ( $values['quantity'] > 0 && $values['data']->needs_shipping() && $values['data']->has_weight() ) {
				$total_quantity += $values['quantity'];
				$total_weight +=  $this->convertWeight($values['data']->get_weight(), $weight_unit) * $values['quantity'];
				$length = $width = $height = 0;
				if ( $values['data']->has_dimensions() ) {
					$dimensions = explode(' x ',str_replace($dimension_unit,'',$values['data']->get_dimensions()));
					if (count($dimensions) >= 3) {
						// Get cubic size.
						$length = $this->convertSize($dimensions[0], $dimension_unit);
						$width = $this->convertSize( $dimensions[1], $dimension_unit);
						$height = $this->convertSize( $dimensions[2], $dimension_unit);
					}
						
					// Max dimensions
					if ($length > $max['length']) {  $max['length'] = $length; }
					if ($width > $max['width']) {  $max['width'] = $width; }
					if ($height > $max['height']) {  $max['height'] = $height; }
						
					// Cubic size
					$cubic +=  $length * $width * $height * $values['quantity'];
						
				}

				// Cart Logging
				if ($this->options->log_enable){
					$this->log->cart[] = array('id'=>$values['data']->id, 'item'=>$values['data']->get_title(),'quantity'=>$values['quantity'], 'weight'=>$this->convertWeight($values['data']->get_weight(), $weight_unit) * $values['quantity'],
							'length'=>$length, 'width'=>$width, 'height'=>$height, 'cubic'=>($length * $width * $height * $values['quantity']));
				}
			}
		}

		// Find which box the items will fit in (by cubic + packaging factor).
		$box_fits = null; // fit.

		if ($this->options->boxes_enable && is_array($this->boxes)){
			foreach ($this->boxes as $box){
				$box_cubed = $box['cubed'];
				if ($cubic < $box_cubed){
					// It Fits!
					if (empty($box_fits)) {
						$box_fits = $box;
						// Use if smaller than previously iterated box that fits.
					} elseif (is_array($box_fits) && $box_cubed < $box_fits['cubed']) {
						$box_fits = $box;
					}
				}
			}
		}
		if (empty($box_fits)) { // If box was not found or boxes are not enabled
			// Cube Root volume instead of Boxes. (item is assumed already packaged to ship)
			$dimension = (float)pow($cubic, 1.0/3.0);
			// use max dimensions to ensure an item like 1x1x20 is estimated with enough length.
			$box_fits = array('cubed'=>$cubic, 'length'=>($dimension < $max['length'] ? $max['length'] : $dimension), 'width'=>($dimension < $max['width'] ? $max['width'] : $dimension), 'height'=>($dimension < $max['height'] ? $max['height'] : $dimension));
		}
			
		// Envelope weight with bill/notes/advertising inserts: ex. 20g
		$total_weight += (!empty($this->options->packageweight) ? floatval($this->options->packageweight) : 0);


		// Destination information (Need this to calculate rate)
		$country = $package['destination']['country']; // 2 char country code
		$state = $package['destination']['state']; // 2 char prov/state code
		$postal = $package['destination']['postcode']; // postalcode/zip code as entered by user.

		// Get a rate to ship the package.
		if ($country != '' && is_array($box_fits)) {

			$volumetric_weight = $box_fits['cubed'] > 0 ? $box_fits['cubed'] / 6000 : 0; //Purolator: (L cm x W cm x H cm)/6000
			$total_weight = ($total_weight > 0) ? $total_weight : 0;
			// Use the largest value of total weight or volumetric/dimensional weight
			$shipping_weight = ($total_weight > $volumetric_weight) ? $total_weight : $volumetric_weight;
				
			$shipping_weight = round($shipping_weight,2); // 2 decimal places.
			$length = $box_fits['length'];
			$width = $box_fits['width'];
			$height = $box_fits['height'];
				
			// Debug
			if ($this->options->log_enable){
				$this->log->params = array('country'=>$country, 'state'=>$state, 'postal'=>$postal, 'shipping_weight'=>$shipping_weight, 'length'=>$length, 'width'=>$width, 'height'=>$height);
			}

			$rates = $this->get_rates($country, $state, $postal, $shipping_weight, $length, $width, $height);
			foreach($rates as $rate){
				if (!empty($this->options->margin) && $this->options->margin != 0) {
					$rate->price = $rate->price * (1 + $this->options->margin/100); //Add margin
				}
				$rateitem = array(
						'id' 		=> $rate->service_code,
						'label' 	=> $rate->service . ((!empty($this->options->delivery) && $rate->expected_delivery != '') ? ' ('.__('Delivered by', 'woocommerce-purolator-webservice') . ' ' . $rate->expected_delivery . ')' : ''),
						'cost' 		=> $rate->price
				);
				// Register the rate
				$this->add_rate( $rateitem );
					
			}

			// Flat Rate Limits.
			if ($this->options->flatrate_limits=='1' && !empty($this->options->flatrate_maxlength) && !empty($this->options->flatrate_maxwidth) && !empty($this->options->flatrate_maxheight)) {
				// Check to see if within flatrates limits.
				$flatrate_cubic =  $this->options->flatrate_maxlength * $this->options->flatrate_maxwidth * $this->options->flatrate_maxheight;
				if ($flatrate_cubic > 0) {
					if ($max['length'] <= $this->options->flatrate_maxlength && $max['width'] <= $this->options->flatrate_maxwidth && $max['height'] <= $this->options->flatrate_maxheight
					&& $cubic <= $flatrate_cubic) {
						// valid, within limit.
					} else {
						// over limit. Disable flatrates rates from being applied.
						$this->options->flatrate_enable = 0;
					}
				}
			}
				
			if ($this->options->flatrate_enable=='1'){
				/*
				 Purolator Letter-post / Flat Rates
				*/
				$id=0;
				foreach($this->flatrates as $flatrates) {
					if ($shipping_weight > $flatrates['weight_from'] && $shipping_weight < $flatrates['weight_to']
					&& ($country == $flatrates['country'] || ($flatrates['country']=='INT' && $country!='CA' && $country !='US'))
					&& ($flatrates['max_qty'] == 0 || $total_quantity <=  $flatrates['max_qty'])){
						$id++;
						$rateitem = array(
								'id' 		=> 'Flat Rate' . $id,
								'label' 	=> $flatrates['label'],
								'cost' 		=> $flatrates['cost']
						);
						$this->add_rate( $rateitem );
					}
				}

			}
				
			// Sort rates (by lowest cost)
			if(!empty($this->rates)){
				usort($this->rates, array($this, 'sort_rates'));
			}
				
		}
		// Logging
		if ( $this->options->log_enable ){
			$this->log->rates = $this->rates;
			$this->log->datestamp = current_time('timestamp');
			// Save to transient for 20 minutes.
			set_transient( 'purowebservice_log', $this->log, 20 * MINUTE_IN_SECONDS );
		}

	}
		
	// Sort Rates function
		
	function sort_rates($a, $b){
		if ($a->cost == $b->cost) {
			return 0;
		}
		return ($a->cost < $b->cost) ? -1 : 1;
	}

	// Purolator API rates lookup function
	function get_rates($dest_country, $dest_state, $dest_postal_code, $weight_kg, $length, $width, $height) {

		$rates = array();

		$username = $this->options->api_user;
		$password = $this->options->api_key;

		// REST URL
		$service_url = ($this->options->mode=='live') ? 'https://webservices.purolator.com/PWS/V1/Estimating/EstimatingService.asmx' : 'https://devwebservices.purolator.com/PWS/V1/Estimating/EstimatingService.asmx'; // dev. 

		// display errors 
		$display_errors = ($this->options->display_errors ? true : false);

		// Has Services flag (Services are enabled)
		$has_services = (count($this->services)>0);

		$xmlRequest =  new SimpleXMLElement(<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<soap-env:Envelope xmlns:soap-env="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:ns1="http://purolator.com/pws/datatypes/v1">
<soap-env:Header><ns1:RequestContext><ns1:Version>1.3</ns1:Version><ns1:Language>en</ns1:Language><ns1:GroupID></ns1:GroupID><ns1:RequestReference></ns1:RequestReference></ns1:RequestContext></soap-env:Header>
<soap-env:Body><ns1:GetQuickEstimateRequest><ns1:BillingAccountNumber></ns1:BillingAccountNumber><ns1:SenderPostalCode></ns1:SenderPostalCode>
	<ns1:ReceiverAddress><ns1:City></ns1:City><ns1:Province></ns1:Province><ns1:Country></ns1:Country><ns1:PostalCode></ns1:PostalCode></ns1:ReceiverAddress>
	<ns1:PackageType>CustomerPackaging</ns1:PackageType>
	<ns1:TotalWeight><ns1:Value>0</ns1:Value><ns1:WeightUnit>kg</ns1:WeightUnit></ns1:TotalWeight>
</ns1:GetQuickEstimateRequest></soap-env:Body></soap-env:Envelope>
XML
		);

		$xmlNameSpaces = $xmlRequest->getNamespaces(true);
		$xmlReqHeader = $xmlRequest->children($xmlNameSpaces['soap-env'])->Header->children($xmlNameSpaces['ns1'])->RequestContext->children();
		$xmlReqBody = $xmlRequest->children($xmlNameSpaces['soap-env'])->Body->children($xmlNameSpaces['ns1'])->GetQuickEstimateRequest->children();
		
		// Create GetRates request xml
		
		// Customer Number
		$xmlReqBody->BillingAccountNumber = $this->options->account;
		
		// SenderPostalCode
		$xmlReqBody->SenderPostalCode = $this->options->source_postalcode;
		
		// Destination Address
		$postalCode = str_replace(' ','',strtoupper($dest_postal_code)); //N0N0N0 (no spaces, uppercase)
		
		$xmlReqBody->ReceiverAddress->PostalCode = $postalCode; 

		$xmlReqBody->ReceiverAddress->Country = $dest_country;
		$xmlReqBody->ReceiverAddress->Province = $dest_state;

		// Package Options:
		$package_options = array('CustomerPackaging','ExpressEnvelope','ExpressPack','ExpressBox');
		if (in_array($this->options->packagetype, $package_options)) {
			$xmlReqBody->PackageType = $this->options->packagetype;
		} else {
			$xmlReqBody->PackageType = "CustomerPackaging";
		}
		
		// Total Weight
		// Send weight in lbs to be more accurate, since Value field is an integer.
		$weight_lb = $weight_kg * 2.20462;
		$xmlReqBody->TotalWeight->Value = $weight_lb < 1 ? 1 : round( $weight_lb, 0 ); // 0 decimal places : integer
		$xmlReqBody->TotalWeight->WeightUnit = "lb";

		// Service Language: (English or French) 
		// If using WPML:
		if (defined('ICL_LANGUAGE_CODE')){
			$service_language = (ICL_LANGUAGE_CODE=='fr') ? 'fr':'en'; // 'en' is default
		} else if (WPLANG == 'fr_FR'){
			$service_language = 'fr';
		} else {
			$service_language = 'en';
		}
		
		$xmlReqHeader->Language = $service_language;
		 
		$is_international = ($dest_country != 'CA');
		 
		if ($has_services && ( !empty($username) && !empty($password) ) && !empty($postalCode) && !empty($this->options->source_postalcode) ){ // Postal code cannot be empty
			try {
				$xmlRequestString = $xmlRequest->asXML();
				$curl = curl_init($service_url); // Create REST Request
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
				curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
				curl_setopt($curl, CURLOPT_CAINFO, WC_PUROWEBSERVICE_PLUGIN_PATH . '/cert/cacert.pem'); // Signer Certificate in PEM format
				curl_setopt($curl, CURLOPT_POST, true);
				curl_setopt($curl, CURLOPT_POSTFIELDS, $xmlRequestString);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
				curl_setopt($curl, CURLOPT_USERPWD, $username . ':' . $password);
				$curl_headers = array(
						"Content-type: text/xml;charset=\"utf-8\"",
						"Accept: text/xml",
						"Cache-Control: no-cache",
						"Pragma: no-cache",
						"SOAPAction: http://purolator.com/pws/service/v1/GetQuickEstimate",
						"Content-length: ".strlen($xmlRequestString),
						"Accept-language: $service_language"
				); //SOAPAction: your op URL
				curl_setopt($curl, CURLOPT_HTTPHEADER, $curl_headers);
				$curl_response = curl_exec($curl); // Execute SOAP Request
				if(curl_errno($curl) && $display_errors){
					echo 'Curl error: ' . curl_error($curl) . "\n";
				}
				if ($display_errors || $this->options->log_enable) {
					$this->log->request['http'] = 'HTTP Response Status: ' . curl_getinfo($curl,CURLINFO_HTTP_CODE) . "\n";
					if ($display_errors){ echo $this->log->request['http']; }
				}
				curl_close($curl);

				// Using SimpleXML to parse xml response
				libxml_use_internal_errors(true);
				$xml = simplexml_load_string( '<root>' . preg_replace('(<(\/?)s:Body>|<(\/?)s:Header>|<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/">|<\/s:Envelope>)','', preg_replace('/<\?xml.*\?>/','',$curl_response)) . '</root>');
				if (!$xml && ($display_errors || $this->options->log_enable)) {
					$errmsg = 'Failed loading XML' . "\n";
					$errmsg .= $curl_response . "\n";
					foreach(libxml_get_errors() as $error) {
						$errmsg.= "\t" . $error->message;
					}
					$this->log->request['errmsg'] = $errmsg;
					if ($display_errors) { echo $errmsg; }
				} else {
					
					$error = isset($xml->{'s:Fault'}) ? $xml->{'s:Fault'} : null;
					if (!$error ) {
						
						if ($xml->GetQuickEstimateResponse && $xml->GetQuickEstimateResponse->ShipmentEstimates){
							$priceQuotes = $xml->GetQuickEstimateResponse->ShipmentEstimates->children();
							if (count($priceQuotes) > 0) {
									foreach ( $priceQuotes as $priceQuote ) {
										// If Enabled Service (from Services array)
										$serviceID = trim((string)$priceQuote->ServiceID);
										if (in_array(trim($serviceID), $this->services)) { 
											$rate = new stdClass();
											$rate->service = $this->get_service_name($serviceID);
											$rate->service_code = $serviceID;
											$rate->price = round(floatval((string)$priceQuote->TotalPrice),2);
											$rate->next_day = ((int)$priceQuote->EstimatedTransitDays < 2);
											$rate->expected_delivery = (string) $priceQuote->ExpectedDeliveryDate;
											// Add rate
											$rates[$serviceID] = $rate;
			
											if ($display_errors || $this->options->log_enable) {
												$this->log->request['service'] .= "\nService: " . $this->get_service_name($serviceID) . " | ";
												$this->log->request['service'] .= 'Price: ' . (string)$priceQuote->TotalPrice . " | ";
												$this->log->request['service'] .= 'Est Transit Days: ' . $priceQuote->EstimatedTransitDays . " | ";
												$this->log->request['service'] .= 'Expected Delivery: ' . $priceQuote->ExpectedDeliveryDate . "\n";
											}
										}
									}
									if ($display_errors && isset($this->log->request['service'])){ echo str_replace("\n","<br />",$this->log->request['service']); }
								
							}
						}
						if ($xml->GetQuickEstimateResponse && $xml->GetQuickEstimateResponse->ResponseInformation->Errors) {
							$messages = $xml->GetQuickEstimateResponse->ResponseInformation->Errors->children();
							if (count($messages) > 0 && ($display_errors || $this->options->log_enable)) {
								$apierror = '';
								foreach ( $messages as $message ) {
									$apierror .= 'Error Code: ' . $message->Code . "\n";
									$apierror .= 'Error Msg: ' . $message->Description . "\n\n";
								}
								$this->log->request['apierror'] = $apierror;
								if ($display_errors){ echo $apierror; }
							}
						} else if (!isset($xml->GetQuickEstimateResponse) && $this->options->log_enable) {
							$this->log->request['apierror'] = 'Failed loading Rates. Response:' . "\n";
							$this->log->request['apierror'] .= htmlentities($xml->asXML());
						}
					} else {
						$apierror = '';
						$errors = $xml->children();
						foreach ( $errors as $error ) {
							$apierror .= 'Error Code: ' . $error->faultcode . "\n";
							$apierror .= 'Error Msg: ' . $error->faultstring . "\n\n";
						}
						$this->log->request['apierror'] = $apierror;
						if ($display_errors){ echo $apierror; }
					}

				}
			} catch (Exception $ex) {
				// cURL request went wrong.
				if ($display_errors){
					echo 'Error: ' . $ex;
				}
				if ($this->options->log_enable){
					$this->log->request['error'] = 'Error: ' . $ex;
				}
			}
		} // endif $has_services

		return $rates;

	}
		

	function admin_options() {
		global $woocommerce;
		?>
				<?php // security nonce
					  wp_nonce_field(plugin_basename(__FILE__), 'purowebservice_options_noncename'); 
				?>
				<h3><?php _e('Purolator', 'woocommerce-purolator-webservice'); ?></h3>
				<div><img src="<?php echo plugins_url( 'img/purolator.png' , dirname(__FILE__) ); ?>" /></div>
				<table class="form-table">
					<tr valign="top">
						<th scope="row" class="titledesc"><?php _e('Enable/Disable', 'woocommerce-purolator-webservice') ?></th>
						<td class="forminp">
							<fieldset><legend class="screen-reader-text"><span><?php _e('Enable/Disable', 'woocommerce-purolator-webservice') ?></span></legend>
									<label for="woocommerce_purowebservice_enabled">
									<input name="woocommerce_purowebservice_enabled" id="woocommerce_purowebservice_enabled" type="checkbox" value="1" <?php checked($this->options->enabled=='yes'); ?> /> <?php _e('Enable Purolator Webservice', 'woocommerce-purolator-webservice') ?></label><br>
								</fieldset>
						</td>
					    </tr>
					    <tr valign="top">
						<th scope="row" class="titledesc"><?php _e('Method Title', 'woocommerce-purolator-webservice') ?></th>
						<td class="forminp">
							<input type="text" name="woocommerce_purowebservice_title" id="woocommerce_purowebservice_title" style="min-width:50px;" value="<?php echo esc_attr($this->options->title); ?>" /> <span class="description"><?php _e('This controls the title which the user sees during checkout.', 'woocommerce-purolator-webservice') ?></span>
						</td>
					    </tr>
					    <tr valign="top">
						<th scope="row" class="titledesc"><?php _e('Webservice Account Settings', 'woocommerce-purolator-webservice') ?></th>
						<td class="forminp">
							<input type="text" name="woocommerce_purowebservice_account" id="woocommerce_purowebservice_account" style="min-width:50px;" value="<?php echo esc_attr($this->options->account); ?>" /> <span class="description"><?php _e('Customer Account Number', 'woocommerce-purolator-webservice') ?></span> <span id="woocommerce_purowebservice_contractid_button" style="display:none<?php //echo (empty($this->options->contractid) ? "":"display:none"); ?>">
							<a href="javscript:;" class="purowebservice-showcontractid"><span class="description"><?php _e('Add Contract ID (Optional, Only if a Contract Customer)', 'woocommerce-purolator-webservice')?></span></a>
							</span>
							<br />
							<div id="woocommerce_purowebservice_contractid_display" style="<?php echo (!empty($this->options->contractid) ? "":"display:none"); ?>">
							<input type="text" name="woocommerce_purowebservice_contractid" id="woocommerce_purowebservice_contractid" style="min-width:50px;" value="<?php echo esc_attr($this->options->contractid); ?>" /> <span class="description"><?php _e('Contract ID (Optional, Only if a Contract Customer)', 'woocommerce-purolator-webservice') ?></span>
							<br /></div>
							<input type="text" name="woocommerce_purowebservice_api_user" id="woocommerce_purowebservice_api_user" style="min-width:50px;" value="<?php echo esc_attr($this->options->api_user); ?>" /> <span class="description"><?php _e('API Username', 'woocommerce-purolator-webservice') ?></span>
							<br />
							<input type="text" name="woocommerce_purowebservice_api_key" id="woocommerce_purowebservice_api_key" style="min-width:50px;" value="<?php echo esc_attr($this->options->api_key); ?>" /> <span class="description"><?php _e('API Password/Key', 'woocommerce-purolator-webservice') ?></span>
							<br />
							<div><a href="<?php echo wp_nonce_url( admin_url( 'admin-ajax.php?action=purowebservice_validate_api_credentials' ), 'purowebservice_validate_api_credentials' ); ?>" id="woocommerce_purowebservice_validate_btn" class="button purowebservice-validate"><?php _e('Validate Credentials', 'woocommerce-purolator-webservice') ?></a> <img src="<?php admin_url(); ?>/wp-admin/images/wpspin_light.gif" alt="" class="purowebservice_ajaxupdate" style="display: none;" /><br /></div>							
							<div id="woocommerce_purowebservice_validate" class="widefat" style="display:none;background-color: #fffbcc;padding:5px;border-color: #e6db55;"><p></p></div>
						</td>
					    </tr>
					    <tr valign="top">
						<th scope="row" class="titledesc"><?php _e('Origin Postal Code', 'woocommerce-purolator-webservice') ?></th>
						<td class="forminp">
							<input type="text" name="woocommerce_purowebservice_source_postalcode" id="woocommerce_purowebservice_source_postalcode" class="purowebservice-postal" style="min-width:50px;" value="<?php echo esc_attr($this->options->source_postalcode); ?>" /> <span class="description"><?php _e('The Postal Code that items will be shipped from.', 'woocommerce-purolator-webservice') ?></span>
							<div class="purowebservice-postal-error" style="display:none;background-color: #fffbcc;padding:5px;border-color: #e6db55;"><p><?php _e('Warning: Postal Code is invalid. Required to be a valid Canadian postal code.', 'woocommerce-purolator-webservice')?></p></div>
						</td>
					    </tr>
					    <tr valign="top">
						<th scope="row" class="titledesc"><?php _e('Order Shipping Tracking', 'woocommerce-purolator-webservice') ?></th>
						<td class="forminp">
							<label for="woocommerce_purowebservice_shipping_tracking"><input name="woocommerce_purowebservice_shipping_tracking" id="woocommerce_purowebservice_shipping_tracking" type="checkbox" value="1" <?php checked($this->options->shipping_tracking==true); ?>  /> <?php _e('Enable Purolator Tracking number feature on Orders', 'woocommerce-purolator-webservice') ?></label>
							<p><label for="woocommerce_purowebservice_email_tracking"><input name="woocommerce_purowebservice_email_tracking" id="woocommerce_purowebservice_email_tracking" type="checkbox" value="1" <?php checked($this->options->email_tracking==true); ?>  /> <?php _e('Enable Email notification when Parcel Tracking updates', 'woocommerce-purolator-webservice') ?></label> <span class="description"><?php _e('Automatic email notifications to customers when "Mailed on" or "Delivered" date is updated', 'woocommerce-purolator-webservice')?></span></p>
							<p><label for="woocommerce_purowebservice_tracking_icons"><input name="woocommerce_purowebservice_tracking_icons" id="woocommerce_purowebservice_tracking_icons" type="checkbox" value="1" <?php checked($this->options->tracking_icons==true); ?>  /> <?php _e('Display icons with Tracking information', 'woocommerce-purolator-webservice') ?></label>
						</td>
					    </tr>
					    <tr valign="top">
					    <th scope="row" class="titledesc"><?php _e('Development', 'woocommerce-purolator-webservice') ?></th>
						<td class="forminp">
							<fieldset><legend class="screen-reader-text"><span><?php _e('Development Mode', 'woocommerce-purolator-webservice') ?></span></legend>
									<select name="woocommerce_purowebservice_mode">
										<option value="dev"<?php if ($this->options->mode=='dev') echo 'selected="selected"'; ?>>Development</option>
										<option value="live" <?php if ($this->options->mode=='live') echo 'selected="selected"'; ?>>Production/Live</option>
									</select>
									<br />
									<label for="woocommerce_purowebservice_display_errors">
									<input name="woocommerce_purowebservice_display_errors" id="woocommerce_purowebservice_display_errors" type="checkbox" value="1" <?php checked($this->options->display_errors=='1'); ?> /> <?php _e('Display Errors', 'woocommerce-purolator-webservice') ?> <small><?php _e('Warning: Do not enable in production since debug/errors would be shown to customers', 'woocommerce-purolator-webservice') ?></small></label><br>
									</fieldset>
						</td>
					    </tr>
					    <tr>
						<th scope="row" class="titledesc"><?php _e('Add Margin', 'woocommerce-purolator-webservice') ?></th>
						<td class="forminp">
								<input type="text" name="woocommerce_purowebservice_margin" id="woocommerce_purowebservice_margin" style="min-width:26px;" value="<?php echo esc_attr($this->options->margin); ?>" />% <span class="description"><?php _e('Add Margin Percentage (ex. 5%) to Shipping Cost', 'woocommerce-purolator-webservice') ?></span>
						</td>
					    </tr>
					    <tr>
						<th scope="row" class="titledesc"><?php _e('Box/Envelope Weight', 'woocommerce-purolator-webservice') ?></th>
						<td class="forminp">
								<input type="text" name="woocommerce_purowebservice_packageweight" id="woocommerce_purowebservice_packageweight" style="min-width:26px;" value="<?php echo esc_attr($this->options->packageweight); ?>" />kg <span class="description"><?php _e('Envelope/Box weight with bill/notes/advertising inserts (ex. 0.02kg)', 'woocommerce-purolator-webservice') ?></span>
						</td>
					    </tr>
					    <tr>
						<th scope="row" class="titledesc"><?php _e('Delivery Dates', 'woocommerce-purolator-webservice') ?></th>
						<td class="forminp">
								<input type="text" name="woocommerce_purowebservice_delivery" id="woocommerce_purowebservice_delivery" style="min-width:26px;" value="<?php echo esc_attr($this->options->delivery); ?>" /> <span class="description"><?php _e('Days to Ship after order placed', 'woocommerce-purolator-webservice') ?></span>
								
								&nbsp;	<label for="woocommerce_purowebservice_delivery_hide">
									<input name="woocommerce_purowebservice_delivery_hide" id="woocommerce_purowebservice_delivery_hide" onclick="jQuery('#woocommerce_purowebservice_delivery').val('');" type="checkbox" value="1" <?php checked(!empty($this->options->delivery)); ?> /> <?php _e('Show Estimated Delivery Dates', 'woocommerce-purolator-webservice') ?></label>
						</td>
					    </tr>
					    <tr>
					    <th scope="row" class="titledesc"><?php _e('Package Type', 'woocommerce-purolator-webservice') ?></th>
						<td class="forminp">
								<select name="woocommerce_purowebservice_packagetype" class="purowebservice-packagetype">
								<option value="CustomerPackaging" <?php if ($this->options->packagetype=='CustomerPackaging') echo 'selected="selected"'; ?>><?php _e('Customer Packaging (Default)', 'woocommerce-purolator-webservice') ?></option>
								<option value="ExpressEnvelope" <?php if ($this->options->packagetype=='ExpressEnvelope') echo 'selected="selected"'; ?>><?php _e('Express Envelope', 'woocommerce-purolator-webservice') ?></option>
								<option value="ExpressPack" <?php if ($this->options->packagetype=='ExpressPack') echo 'selected="selected"'; ?>><?php _e('Express Pack', 'woocommerce-purolator-webservice') ?></option>
								<option value="ExpressBox" <?php if ($this->options->packagetype=='ExpressBox') echo 'selected="selected"'; ?>><?php _e('Express Box', 'woocommerce-purolator-webservice') ?></option>
								</select> <span class="description"><?php _e('Packaging used with Purolator  (Updates available Parcel Services below)', 'woocommerce-purolator-webservice') ?></span>
						</td>
					    </tr>
					
					    <tr>
						<th scope="row" class="titledesc"><?php _e('Enable Parcel Services', 'woocommerce-purolator-webservice') ?></th>
						<td class="forminp">
								<fieldset><legend class="screen-reader-text"><span><?php _e('Purolator Shipping Services', 'woocommerce-purolator-webservice') ?></span></legend>
								<?php if (empty($this->services)){ $this->services = array_keys($this->available_services);  } // set all checked as default.
									  $s=0; // service count
									  $service_country = '';
									  $cur_country = ' ';
									   ?>
								<ul style="list-style:none" class="purowebservice-services">
								<?php foreach($this->available_services as $service_code=>$service_label): ?>
								<?php $s++; 
									$service_country = $this->get_destination_from_service($service_code);
									if ($cur_country!=$service_country){ $cur_country=$service_country; echo '<h4>'.esc_html($service_country).'</h4>'; }?>
									<li class="<?php echo $this->get_css_class_package_type($service_code) ?>"><label for="woocommerce_purowebservice_service-<?php echo $s ?>">
									<input name="woocommerce_purowebservice_services[]" id="woocommerce_purowebservice_service-<?php echo $s ?>" type="checkbox" value="<?php echo esc_attr($service_code) ?>" <?php checked(in_array($service_code,$this->services)); ?> /> <?php echo esc_html($service_label); ?></label></li>
								<?php endforeach; ?>
								</ul>
								</fieldset>
						</td>
					    </tr>
					    
					    <tr valign="top">
						<th scope="row" class="titledesc"><?php _e('Shipping Package/Box sizes', 'woocommerce-purolator-webservice') ?></th>
						<td class="forminp">
						<?php if (!$this->boxes || !is_array($this->boxes) || count($this->boxes) == 0){
								$this->boxes = array(array('length'=>'9','width'=>'6', 'height'=>'15','name'=>'Standard Box'));
								$this->options->boxes_enable='1';
							}
							$box_defaults = array('length'=>0,'width'=>0, 'height'=>0,'name'=>''); ?>
						<label for="woocommerce_purowebservice_boxes_enable">
									<input name="woocommerce_purowebservice_boxes_enable" id="woocommerce_purowebservice_boxes_enable" type="checkbox" value="1" <?php checked($this->options->boxes_enable=='1'); ?> /> <?php _e('Enable Shipping Box Sizes', 'woocommerce-purolator-webservice') ?></label><br />
							<span class="description"><?php _e('Please define a number of envelope/package/box sizes that you use to ship. Dimensions are in cm.', 'woocommerce-purolator-webservice') ?></span>
							<div id="purowebservice_boxes">							
								<?php for($i=0;$i<count($this->boxes); $i++): ?>
								<?php $box = (is_array($this->boxes[$i]) ? array_merge($box_defaults, $this->boxes[$i]) : array()); ?>
								<p class="form-field">
								<label for="woocommerce_purowebservice_box_length[]"><?php _e('Box Dimensions (cm)', 'woocommerce-purolator-webservice'); ?></label><span class="wrap">
										<input name="woocommerce_purowebservice_box_length[]" id="woocommerce_purowebservice_box_length<?php echo $i;?>" style="max-width:50px" placeholder="Length" class="input-text" size="6" type="text" value="<?php echo esc_attr($box['length']); ?>" />
										<input name="woocommerce_purowebservice_box_width[]" id="woocommerce_purowebservice_box_width<?php echo $i;?>" style="max-width:50px" placeholder="Width" class="input-text" size="6" type="text" value="<?php echo esc_attr($box['width']); ?>">
										<input name="woocommerce_purowebservice_box_height[]" id="woocommerce_purowebservice_box_width<?php echo $i;?>" style="max-width:50px" placeholder="Height" class="input-text last" size="6" type="text" value="<?php echo esc_attr($box['height']); ?>" />
										<span class="description"><?php _e('LxWxH cm decimal form','woocommerce-purolator-webservice'); ?></span>
										<input name="woocommerce_purowebservice_box_name[]" id="woocommerce_purowebservice_box_name<?php echo $i;?>" style="max-width:120px;margin-left:20px;" placeholder="Box Name" class="input-text last" size="6" type="text" value="<?php echo esc_attr($box['name']); ?>"></span>
										<span class="description"><?php _e('Box Name (internal)', 'woocommerce-purolator-webservice'); ?></span>
										<span style="margin-left:5px;"><a href="javascript:;" title="Remove" onclick="jQuery(this).parent().parent('p').remove();" class="button"><?php _e('Remove','woocommerce-purolator-webservice'); ?></a></span>
								</p>
								<?php endfor; ?>
							</div>
							<a href="javascript:;" id="btn_purowebservice_boxes" class="button-secondary"><?php _e('Add More +','woocommerce-purolator-webservice'); ?></a>
						</td>
					    </tr>
					    
					     <tr valign="top">
						<th scope="row" class="titledesc"><?php _e('Flat Rates', 'woocommerce-purolator-webservice') ?></th>
						<td class="forminp">
						<?php if (empty($this->flatrates) || !is_array($this->flatrates) || count($this->flatrates) == 0){
								// Set default CP Flat Rate Rates.
								/*Purolator Letter-post USA rates:(for now)
								0-100g = $2.20
								100g-200g = $3.80
								200g-500g = $7.60*/
								$this->flatrates = array(array('country'=>'CA','label'=>'Purolator Flat Rate', 'cost'=>'2.20','weight_from'=>'0','weight_to'=>'0.1', 'max_qty'=>0),
													    array('country'=>'CA','label'=>'Purolator Flat Rate', 'cost'=>'3.80','weight_from'=>'0.1','weight_to'=>'0.2', 'max_qty'=>0),
														array('country'=>'US','label'=>'Purolator Flat Rate', 'cost'=>'2.20','weight_from'=>'0','weight_to'=>'0.1', 'max_qty'=>0),
														array('country'=>'US','label'=>'Purolator Flat Rate', 'cost'=>'3.80','weight_from'=>'0.1','weight_to'=>'0.2', 'max_qty'=>0),
														array('country'=>'US','label'=>'Purolator Flat Rate', 'cost'=>'7.60','weight_from'=>'0.2','weight_to'=>'0.5', 'max_qty'=>0));
								$this->options->flatrate_enable='';
							} 
							$flatrate_defaults = array('country'=>'','label'=>'', 'cost'=>0,'weight_from'=>'','weight_to'=>'','max_qty'=>0); ?>
						<label for="woocommerce_purowebservice_flatrate_enable">
									<input name="woocommerce_purowebservice_flatrate_enable" id="woocommerce_purowebservice_flatrate_enable" type="checkbox" value="1" <?php checked($this->options->flatrate_enable=='1'); ?> /> <?php _e('Enable Flat Rates', 'woocommerce-purolator-webservice') ?></label>
							<p class="description"><?php _e('Define Flat Rate rates based on Weight Range (kg)', 'woocommerce-purolator-webservice') ?>.</p>
							<p class="description"> <?php _e('Example: 0.1kg to 0.2kg: $3.80 Flat Rate', 'woocommerce-purolator-webservice') ?></p>
							<div id="purowebservice_flatrates">							
								<?php for($i=0;$i<count($this->flatrates); $i++): ?>
								<?php $flatrates = (is_array($this->flatrates[$i]) ? array_merge($flatrate_defaults, $this->flatrates[$i]) : array()); ?>
								<p class="form-field">
								
								<span class="wrap">
								    <select name="woocommerce_purowebservice_flatrate_country[]">
										<option value="CA"<?php if ($flatrates['country']=='CA') echo 'selected="selected"'; ?>>Canada</option>
										<option value="US" <?php if ($flatrates['country']=='US') echo 'selected="selected"'; ?>>USA</option>
										<option value="INT" <?php if ($flatrates['country']=='INT') echo 'selected="selected"'; ?>><?php _e('International', 'woocommerce-purolator-webservice') ?></option>
									</select>
									<label for="woocommerce_purowebservice_flatrate_label<?php echo $i;?>"> <?php _e('Label', 'woocommerce-purolator-webservice'); ?>:</label>
										<input name="woocommerce_purowebservice_flatrate_label[]" id="woocommerce_purowebservice_flatrate_label<?php echo $i;?>" style="max-width:150px" placeholder="<?php _e('Flat Rate','woocommerce-purolator-webservice'); ?>" class="input-text" size="16" type="text" value="<?php echo esc_attr($flatrates['label']); ?>" />
										<span class="description"> <?php _e('Cost','woocommerce-purolator-webservice'); ?>: $</span><input name="woocommerce_purowebservice_flatrate_cost[]" id="woocommerce_purowebservice_flatrate_cost<?php echo $i;?>" style="max-width:50px" placeholder="<?php _e('Cost','woocommerce-purolator-webservice'); ?>" class="input-text" size="16" type="text" value="<?php echo esc_attr($flatrates['cost']); ?>">
										<span class="description"> <?php _e('Weight Range(kg)','woocommerce-purolator-webservice'); ?>: </span><input name="woocommerce_purowebservice_flatrate_weight_from[]" id="woocommerce_purowebservice_flatrate_weight_from<?php echo $i;?>" style="max-width:40px" placeholder="" class="input-text" size="6" type="text" value="<?php echo esc_attr($flatrates['weight_from']); ?>" />kg
										 <?php _e('to','woocommerce-purolator-webservice'); ?> &lt;
										<input name="woocommerce_purowebservice_flatrate_weight_to[]" id="woocommerce_purowebservice_flatrate_weight_to<?php echo $i;?>" style="max-width:40px" placeholder="" class="input-text last" size="6" type="text" value="<?php echo esc_attr($flatrates['weight_to']); ?>" />kg</span>
										<span class="description"> <?php _e('Max items (0 for no limit)','woocommerce-purolator-webservice'); ?>: </span> <input name="woocommerce_purowebservice_flatrate_max_qty[]" id="woocommerce_purowebservice_flatrate_max_qty<?php echo $i;?>" style="max-width:40px" placeholder="" class="input-text" size="6" type="text" value="<?php echo esc_attr($flatrates['max_qty']); ?>" />
										<span style="margin-left:5px;"><a href="javascript:;" title="Remove" onclick="jQuery(this).parent().parent('p').remove();" class="button"><?php _e('Remove','woocommerce-purolator-webservice'); ?></a></span>
								</p>
								<?php endfor; ?>
							</div>
							<a href="javascript:;" id="btn_purowebservice_flatrates" class="button-secondary"><?php _e('Add More +','woocommerce-purolator-webservice'); ?></a>
							<br />
							<br />
							<label for="woocommerce_purowebservice_flatrate_limits">
									<input name="woocommerce_purowebservice_flatrate_limits" id="woocommerce_purowebservice_flatrate_limits" type="checkbox" value="1" <?php checked($this->options->flatrate_limits=='1'); ?> /> <?php _e('Maximum dimensions for Flat Rate/Flat Rates (Also maximum volumetric weight)', 'woocommerce-purolator-webservice') ?></label>
							<p class="form-field">
								<input name="woocommerce_purowebservice_flatrate_maxlength" id="woocommerce_purowebservice_flatrate_maxlength" style="max-width:50px" placeholder="Length" class="input-text" size="6" type="text" value="<?php echo esc_attr($this->options->flatrate_maxlength); ?>" />
										<input name="woocommerce_purowebservice_flatrate_maxwidth" id="woocommerce_purowebservice_flatrate_maxwidth" style="max-width:50px" placeholder="Width" class="input-text" size="6" type="text" value="<?php echo esc_attr($this->options->flatrate_maxwidth); ?>">
										<input name="woocommerce_purowebservice_flatrate_maxheight" id="woocommerce_purowebservice_flatrate_maxheight" style="max-width:50px" placeholder="Height" class="input-text last" size="6" type="text" value="<?php echo esc_attr($this->options->flatrate_maxheight); ?>" />
										<span class="description"><?php _e('LxWxH cm decimal form','woocommerce-purolator-webservice'); ?></span>
													
							</p>
						</td>
					    </tr>
					    
				</table>
				<script type="text/javascript">
					jQuery(document).ready(function($) {

						$('.purowebservice-showcontractid').click(function(){
							jQuery('#woocommerce_purowebservice_contractid_button').hide();
							jQuery('#woocommerce_purowebservice_contractid_display').show();
						});

						$('.purowebservice-validate').click(function(){
							var url = $(this).attr('href');
							var postvalues= { api_user:$('input#woocommerce_purowebservice_api_user').val(),
									api_key:$('input#woocommerce_purowebservice_api_key').val(),
									customerid:$('input#woocommerce_purowebservice_account').val(),
									contractid:$('input#woocommerce_purowebservice_contractid').val() };
							// ajax request.
							$('img.purowebservice_ajaxupdate').show();
							$.post(url,postvalues,function(data){
								//console.log('Data:'+data);
								$('#woocommerce_purowebservice_validate p').html(data);
								$('#woocommerce_purowebservice_validate').show();
								$('img.purowebservice_ajaxupdate').hide();
							});
							return false;
						});

						$('.purowebservice-log-display').click(function(){
							var url = $(this).attr('href');
							$('img.purowebservice-log-display-loading').show();
							$('#purowebservice_log_display').hide();
							$.get(url,function(data){
								//console.log('Data:'+data);
								$('#purowebservice_log_display').html(data);
								$('#purowebservice_log_display').slideDown();
								$('img.purowebservice-log-display-loading').hide();
							});
							return false;
						});

						// Validate Postal Code.
						var validPostalCode = function() {
							var regex = /^[A-Za-z]{1}\d{1}[A-Za-z]{1} *\d{1}[A-Za-z]{1}\d{1}$/;
							$('.purowebservice-postal-error').toggle(regex.test($('.purowebservice-postal').val()) == false);
						}
						if ($('.purowebservice-postal').val() != '') { validPostalCode(); }
						$('.purowebservice-postal').on('blur', validPostalCode);

						var packageServices = function(){
							var packagetype = $('.purowebservice-packagetype').val();
							var packageclass = {'ExpressEnvelope':'purowebservice-envelope', 'ExpressPack':'purowebservice-pack','ExpressBox':'purowebservice-box'};
							$('ul.purowebservice-services li.purowebservice-package').hide();
							if (typeof packageclass[packagetype] != 'undefined') {
								$('ul.purowebservice-services li').each(function() {
									var item = $(this);
									if (item.hasClass(packageclass[packagetype])){
										item.show();
									} else if (item.hasClass('purowebservice-package')){
										$('input',item).prop('checked', false);
									}
								});
							}
						};
						// run on-load.
						packageServices();
						// bind to select change event.
						$('.purowebservice-packagetype').on('change',packageServices);
						
						
						jQuery('#btn_purowebservice_boxes').click(function() {
						
							var i = jQuery('#purowebservice_boxes p').size(); // one p tag.
							
							var fields = '';
							fields += '<p class="form-field">';
							fields += '<label for="woocommerce_purowebservice_box_length[]"><?php _e('Box Dimensions (cm)', 'woocommerce-purolator-webservice'); ?></label><span class="wrap"> ';
							fields += '<input name="woocommerce_purowebservice_box_length[]" id="woocommerce_purowebservice_box_length'+i+'" style="max-width:50px" placeholder="Length" class="input-text" size="6" type="text" value="" />';
							fields += '<input name="woocommerce_purowebservice_box_width[]" id="woocommerce_purowebservice_box_width'+i+'" style="max-width:50px" placeholder="Width" class="input-text" size="6" type="text" value="">';
							fields += '<input name="woocommerce_purowebservice_box_height[]" id="woocommerce_purowebservice_box_width'+i+'" style="max-width:50px" placeholder="Height" class="input-text" size="6" type="text" value="" />';
							fields += '<span class="description"><?php _e('LxWxH cm decimal form','woocommerce-purolator-webservice'); ?></span> ';
							fields += '<input name="woocommerce_purowebservice_box_name[]" id="woocommerce_purowebservice_box_name'+i+'" style="max-width:120px;margin-left:20px;" placeholder="Box Name" class="input-text last" size="6" type="text" value=""></span>';
							fields += '<span class="description"><?php _e('Box Name (internal)', 'woocommerce-purolator-webservice'); ?></span>';
							fields += '<span style="margin-left:5px;"><a href="javascript:;" title="Remove" onclick="'+"jQuery(this).parent().parent('p').remove();"+'" class="button"><?php _e('Remove','woocommerce-purolator-webservice'); ?></a></span>';
							fields += '</p>';
							
							jQuery(fields).appendTo('#purowebservice_boxes');
						});

						jQuery('#btn_purowebservice_flatrates').click(function() {
							
							var i = jQuery('#purowebservice_flatrates p').size(); // one p tag.
							
							var fields = '';
							fields += '<p class="form-field">';
							fields += '<select name="woocommerce_purowebservice_flatrate_country[]"><option value="CA" selected="selected">Canada</option><option value="US">USA</option><option value="INT"><?php _e('International', 'woocommerce-purolator-webservice') ?></option></select>';
							fields += '<label> <?php _e('Label', 'woocommerce-purolator-webservice'); ?>:</label>';
							fields += '<input name="woocommerce_purowebservice_flatrate_label[]" id="woocommerce_purowebservice_flatrate_label'+i+'" style="max-width:150px" placeholder="<?php _e('Flat Rate','woocommerce-purolator-webservice'); ?>" class="input-text" size="16" type="text" value="">';
							fields += '<span class="description"> <?php _e('Cost','woocommerce-purolator-webservice'); ?>: $</span><input name="woocommerce_purowebservice_flatrate_cost[]" id="woocommerce_purowebservice_flatrate_cost'+i+'" style="max-width:50px" placeholder="<?php _e('Cost','woocommerce-purolator-webservice'); ?>" class="input-text" size="16" type="text" value="">';
							fields += '<span class="description"> <?php _e('Weight Range(kg)','woocommerce-purolator-webservice'); ?>: </span><input name="woocommerce_purowebservice_flatrate_weight_from[]" id="woocommerce_purowebservice_flatrate_weight_from'+i+'" style="max-width:40px" placeholder="" class="input-text" size="6" type="text" value="0">kg';
							fields += ' <?php _e('to','woocommerce-purolator-webservice'); ?> &lt;';
							fields += '<input name="woocommerce_purowebservice_flatrate_weight_to[]" id="woocommerce_purowebservice_flatrate_weight_to'+i+'" style="max-width:40px" placeholder="" class="input-text last" size="6" type="text" value="0">kg</span>';
							fields += '<span class="description"> <?php _e('Max items (0 for no limit)','woocommerce-purolator-webservice'); ?>: </span> <input name="woocommerce_purowebservice_flatrate_max_qty[]" id="woocommerce_purowebservice_flatrate_max_qty'+i+'" style="max-width:40px" placeholder="" class="input-text" size="6" type="text" value="" />';
							fields += '<span style="margin-left:5px;"><a href="javascript:;" title="Remove" onclick="'+"jQuery(this).parent().parent('p').remove();"+'" class="button"><?php _e('Remove','woocommerce-purolator-webservice'); ?></a></span>';
							fields += '</p>';
							
							jQuery(fields).appendTo('#purowebservice_flatrates');
						});
					});

					</script>
					
					<table class="form-table">
					<tr valign="top">
					    <th scope="row" class="titledesc">
					    	<?php _e('Logging', 'woocommerce-purolator-webservice')?>
					    </th>
						<td class="forminp">
						<label for="woocommerce_purowebservice_log_enable">
									<input name="woocommerce_purowebservice_log_enable" id="woocommerce_purowebservice_log_enable" type="checkbox" value="1" <?php checked($this->options->log_enable=='1'); ?> /> <?php _e('Enable Rates Lookup Logging', 'woocommerce-purolator-webservice') ?>
									<br /><small><?php _e('Captures most recent shipping rate lookup.  Recommended to be disabled when website development is complete. This option does not display any messages on frontend.', 'woocommerce-purolator-webservice') ?></small></label>
						<?php if ($this->options->log_enable): ?>
						<div><a href="<?php echo wp_nonce_url( admin_url( 'admin-ajax.php?action=purowebservice_rates_log_display' ), 'purowebservice_rates_log_display' ); ?>" title="Display Log" class="button purowebservice-log-display"><?php _e('Display most recent request','woocommerce-purolator-webservice'); ?></a> <img src="<?php admin_url(); ?>/wp-admin/images/wpspin_light.gif" alt="" class="purowebservice-log-display-loading" style="display: none;" /></div>
						<div id="purowebservice_log_display" style="display:none;padding:5px;margin:5px;border:1px solid #ccc;width:70%">
						<p></p>
						</div>
						<?php endif; ?> 
						</td>
						</tr>
					</table>
					
			<?php 
			}

			function process_admin_options() {

				
				// check for security
				if (!isset($_POST['purowebservice_options_noncename']) || !wp_verify_nonce($_POST['purowebservice_options_noncename'], plugin_basename(__FILE__))) 
					return;


				if(isset($_POST['woocommerce_purowebservice_enabled'])) $this->options->enabled = 'yes'; else $this->options->enabled ='no';
				if(isset($_POST['woocommerce_purowebservice_title'])) $this->options->title = woocommerce_clean($_POST['woocommerce_purowebservice_title']);
				if(isset($_POST['woocommerce_purowebservice_account'])) $this->options->account = woocommerce_clean($_POST['woocommerce_purowebservice_account']);
				if(isset($_POST['woocommerce_purowebservice_contractid'])) $this->options->contractid = woocommerce_clean($_POST['woocommerce_purowebservice_contractid']);
				if(isset($_POST['woocommerce_purowebservice_api_user'])) $this->options->api_user = woocommerce_clean($_POST['woocommerce_purowebservice_api_user']);
				if(isset($_POST['woocommerce_purowebservice_api_key'])) $this->options->api_key = woocommerce_clean($_POST['woocommerce_purowebservice_api_key']);
				if(isset($_POST['woocommerce_purowebservice_source_postalcode'])) $this->options->source_postalcode = woocommerce_clean($_POST['woocommerce_purowebservice_source_postalcode']);
				$this->options->source_postalcode = str_replace(' ','',strtoupper($this->options->source_postalcode)); // N0N0N0 format only
				if(isset($_POST['woocommerce_purowebservice_mode'])) $this->options->mode = woocommerce_clean($_POST['woocommerce_purowebservice_mode']);
				if(isset($_POST['woocommerce_purowebservice_packagetype'])) $this->options->packagetype = woocommerce_clean($_POST['woocommerce_purowebservice_packagetype']);
				if(isset($_POST['woocommerce_purowebservice_delivery'])) $this->options->delivery = intval(woocommerce_clean($_POST['woocommerce_purowebservice_delivery'])); 
				if ($this->options->delivery==0) { $this->options->delivery = ''; }
				if(isset($_POST['woocommerce_purowebservice_margin'])) $this->options->margin = floatval(woocommerce_clean($_POST['woocommerce_purowebservice_margin']));
				if ($this->options->margin > 100 || $this->options->margin == 0 || $this->options->margin <= -100) { $this->options->margin = ''; } // percentage only.
				if(isset($_POST['woocommerce_purowebservice_packageweight'])) $this->options->packageweight = floatval(woocommerce_clean($_POST['woocommerce_purowebservice_packageweight']));
				if(isset($_POST['woocommerce_purowebservice_display_errors'])) $this->options->display_errors = true; else $this->options->display_errors = false;
				if(isset($_POST['woocommerce_purowebservice_log_enable'])) $this->options->log_enable = true; else $this->options->log_enable = false;
				if(isset($_POST['woocommerce_purowebservice_boxes_enable'])) $this->options->boxes_enable = true; else $this->options->boxes_enable = false;
				if(isset($_POST['woocommerce_purowebservice_flatrate_enable'])) $this->options->flatrate_enable = true; else $this->options->flatrate_enable = false;
				if(isset($_POST['woocommerce_purowebservice_shipping_tracking'])) $this->options->shipping_tracking = true; else $this->options->shipping_tracking = false;
				if(isset($_POST['woocommerce_purowebservice_email_tracking'])) $this->options->email_tracking = true; else $this->options->email_tracking = false;
				if(isset($_POST['woocommerce_purowebservice_tracking_icons'])) $this->options->tracking_icons = true; else $this->options->tracking_icons = false;

				// services
				if(isset($_POST['woocommerce_purowebservice_services']) && is_array($_POST['woocommerce_purowebservice_services'])) {
					// save valid options. ( returns an array containing all the values of array1 that are present in array2 - in this case, an array of valid service codes)
					$this->services = array_intersect($_POST['woocommerce_purowebservice_services'], array_keys($this->available_services));
					update_option('woocommerce_purowebservice_services', $this->services);
 				}
				
				// boxes
				if( isset($_POST) && isset($_POST['woocommerce_purowebservice_box_length']) && is_array($_POST['woocommerce_purowebservice_box_length']) ) {
					$boxes = array();
				
					for ($i=0; $i < count($_POST['woocommerce_purowebservice_box_length']); $i++){
						$box = array();
						$box['length'] = isset($_POST['woocommerce_purowebservice_box_length'][$i]) ? round(floatval($_POST['woocommerce_purowebservice_box_length'][$i]),1) : '';
						$box['width'] = isset($_POST['woocommerce_purowebservice_box_width'][$i]) ? round(floatval($_POST['woocommerce_purowebservice_box_width'][$i]),1) : '';
						$box['height'] = isset($_POST['woocommerce_purowebservice_box_height'][$i]) ? round(floatval($_POST['woocommerce_purowebservice_box_height'][$i]),1) : '';
						$box['name'] = isset($_POST['woocommerce_purowebservice_box_name'][$i]) ? woocommerce_clean($_POST['woocommerce_purowebservice_box_name'][$i]) : '';
						// Cubed/volumetric
						$box['cubed'] = $box['length'] * $box['width'] * $box['height'];
						
						$boxes[] = $box;
					}
				
					$this->boxes = $boxes;
					update_option('woocommerce_purowebservice_boxes', $this->boxes);
				}
				
				// flatrates
				if( isset($_POST) && isset($_POST['woocommerce_purowebservice_flatrate_country']) && is_array($_POST['woocommerce_purowebservice_flatrate_country']) ) {
					$flatrates = array();
				
					for ($i=0; $i < count($_POST['woocommerce_purowebservice_flatrate_country']); $i++){
						$row = array();
						$row['country'] = isset($_POST['woocommerce_purowebservice_flatrate_country'][$i]) ? woocommerce_clean($_POST['woocommerce_purowebservice_flatrate_country'][$i]) : '';
						$row['label'] = isset($_POST['woocommerce_purowebservice_flatrate_label'][$i]) ? woocommerce_clean($_POST['woocommerce_purowebservice_flatrate_label'][$i]) : '';
						$row['cost'] = isset($_POST['woocommerce_purowebservice_flatrate_cost'][$i]) ? round(floatval($_POST['woocommerce_purowebservice_flatrate_cost'][$i]),2) : '';
						$row['weight_from'] = isset($_POST['woocommerce_purowebservice_flatrate_weight_from'][$i]) ? round(floatval($_POST['woocommerce_purowebservice_flatrate_weight_from'][$i]),2) : '';
						$row['weight_to'] = isset($_POST['woocommerce_purowebservice_flatrate_weight_to'][$i]) ? round(floatval($_POST['woocommerce_purowebservice_flatrate_weight_to'][$i]),2) : '';
						if ($row['weight_from'] > $row['weight_to']) { $row['weight_from'] = $row['weight_to']; } // Weight From must be a lesser value.
						$row['max_qty'] = isset($_POST['woocommerce_purowebservice_flatrate_max_qty'][$i]) ? intval($_POST['woocommerce_purowebservice_flatrate_max_qty'][$i]) : 0;
						
						$flatrates[] = $row;
					}
				
					$this->flatrates = $flatrates;
					update_option('woocommerce_purowebservice_flatrates', $this->flatrates);
				}
				if(isset($_POST['woocommerce_purowebservice_flatrate_limits'])) $this->options->flatrate_limits = true; else $this->options->flatrate_limits = false;
				if(isset($_POST['woocommerce_purowebservice_flatrate_maxlength'])) $this->options->flatrate_maxlength = floatval(woocommerce_clean($_POST['woocommerce_purowebservice_flatrate_maxlength']));
				if(isset($_POST['woocommerce_purowebservice_flatrate_maxwidth'])) $this->options->flatrate_maxwidth = floatval(woocommerce_clean($_POST['woocommerce_purowebservice_flatrate_maxwidth']));
				if(isset($_POST['woocommerce_purowebservice_flatrate_maxheight'])) $this->options->flatrate_maxheight = floatval(woocommerce_clean($_POST['woocommerce_purowebservice_flatrate_maxheight']));
				if (empty($this->options->flatrate_maxlength)) $this->options->flatrate_maxlength = '';
				if (empty($this->options->flatrate_maxwidth)) $this->options->flatrate_maxwidth = '';
				if (empty($this->options->flatrate_maxheight)) $this->options->flatrate_maxheight = '';
				
				// update options.
				update_option('woocommerce_purowebservice', $this->options);
			}
			
			/**
			 * Ajax function to Display Rates Lookup Log.
			 */
			public function rates_log_display() {

				// Let the backend only access the page
				if( !is_admin() ) {
					wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
				}
					
				// Check the user privileges
				if( !current_user_can( 'manage_woocommerce_orders' ) && !current_user_can( 'edit_shop_orders' ) ) {
					wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
				}
					
				// Nonce.
				if ( ! isset( $_GET['_wpnonce'] ) || ! wp_verify_nonce( $_GET['_wpnonce'], 'purowebservice_rates_log_display' ) )
					wp_die( __( 'You do not have sufficient permissions to access this page.' ) );

				if (false !== ( $log = get_transient('purowebservice_log') ) && !empty($log)){
				$log = (object) array_merge(array('cart'=>array(),'params'=>array(),'request'=>array(),'rates'=>array(), 'datestamp'=>''), (array) $log);
				?>
						<h4><?php _e('Cart Shipping Rates Request', 'woocommerce-purolator-webservice')?> - <?php echo date("F j, Y, g:i a",$log->datestamp); ?></h4>
						<table class="table widefat">
						<tr><th><?php _e('Item', 'woocommerce-purolator-webservice')?></th><th><?php _e('Qty', 'woocommerce-purolator-webservice')?></th><th><?php _e('Weight', 'woocommerce-purolator-webservice')?></th><th><?php _e('Dimensions', 'woocommerce-purolator-webservice')?></th><th><?php _e('Cubic', 'woocommerce-purolator-webservice')?></th></tr>
						<?php foreach($log->cart as $cart):?>
						<tr>
						<td><?php echo edit_post_link(esc_html($cart['item']),'','',$cart['id'])?></td><td><?php echo esc_html($cart['quantity'])?></td><td><?php echo esc_html($cart['weight'])?>kg</td><td><?php echo esc_html($cart['length'])?>cm x <?php echo esc_html($cart['width'])?>cm x <?php echo esc_html($cart['height'])?>cm</td><td><?php echo esc_html($cart['cubic'])?>cm<sup>3</sup></td>
						</tr>
						<?php endforeach; //$this->log->cart[] = array('quantity'=>$values['quantity'], 'weight'=>$this->convertWeight($values['data']->get_weight(), $weight_unit) * $values['quantity'], 'length'=>$length, 'width'=>$width, 'height'=>$height, 'cubic'=>$cubic); ?>
						</table>
						
						<h4><?php _e('Request / API Response', 'woocommerce-purolator-webservice')?></h4>
						<p class="description"><?php _e('After box packing/Volumetric weight calculation and Box/Envelope Weight', 'woocommerce-purolator-webservice')?></p>
						<table class="table widefat">
						<tr><th><?php _e('Country', 'woocommerce-purolator-webservice')?></th><th><?php _e('State', 'woocommerce-purolator-webservice')?></th><th><?php _e('Destination', 'woocommerce-purolator-webservice')?></th><th><?php _e('Shipping Weight', 'woocommerce-purolator-webservice')?></th><th><?php _e('Volumetric Dimensions', 'woocommerce-purolator-webservice')?></th></tr>
						<tr>
						<td><?php echo esc_html($log->params['country'])?></td><td><?php echo esc_html($log->params['state'])?></td><td><?php echo esc_html($log->params['postal'])?></td><td><?php echo esc_html(number_format($log->params['shipping_weight'],2))?>kg</td>
						<td><?php echo esc_html(number_format($log->params['length'],2))?>cm x <?php echo esc_html(number_format($log->params['width'],2))?>cm x <?php echo esc_html(number_format($log->params['height'],2))?>cm</td>
						<?php //array('country'=>$country, 'state'=>$state, 'postal'=>$postal, 'shipping_weight'=>$shipping_weight, 'length'=>$length, 'width'=>$width, 'height'=>$height); ?>
						</tr>
						</table>
						<br />
						<table class="table widefat">
						<tr><td>
						<?php foreach($log->request as $request):?><?php echo str_replace("\n\n","</td><td>",str_replace("\n","<br />",esc_html($request))) ?><?php endforeach; ?>
						</td>
						</tr></table>
						
						<h4><?php _e('Rates displayed in Cart', 'woocommerce-purolator-webservice')?></h4>
						<?php if(!empty($log->rates)): ?>
						<table class="table widefat">
						<?php foreach($log->rates as $rates):?>
						<tr>
						<th><?php echo $rates->label ?></th>
						<td><?php echo number_format($rates->cost, 2) ?>
						</td>
						</tr>
						<?php endforeach; ?>
						</table>
						<?php else: ?>
						<p><?php _e('No rates displayed', 'woocommerce-purolator-webservice') ?></p>
						<?php endif; ?>
						<?php } else { ?>
						<?php _e('No log information.. yet.  Go to your shopping cart page and click on "Calculate Shipping".', 'woocommerce-purolator-webservice') ?>
						<?php  } // endif
					exit;
			}
			
			/**
			 * Load and generate the template output with ajax
			 */
			public function validate_api_credentials() {
				// Let the backend only access the page
				if( !is_admin() ) {
					wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
				}
					
				// Check the user privileges
				if( !current_user_can( 'manage_woocommerce_orders' ) && !current_user_can( 'edit_shop_orders' ) ) {
					wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
				}
					
				// Check the action/parameters
				if( empty( $_GET['action'] ) || !check_admin_referer( $_GET['action'] ) ) {
					wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
				}
					
				// Check if all parameters are set
				if( empty( $_POST['api_user'] ) || empty( $_POST['api_key'] ) || empty( $_POST['customerid'] ) ) {
					wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
				}
			
				// Nonce.
				if ( ! isset( $_GET['_wpnonce'] ) || ! wp_verify_nonce( $_GET['_wpnonce'], 'purowebservice_validate_api_credentials' ) )
					wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
					
				// Get api_user, api_key, customerid
				$api_user = sanitize_text_field( $_POST['api_user'] );
				$api_key = sanitize_text_field( $_POST['api_key'] );
				$customerid = sanitize_text_field( $_POST['customerid'] );
				$contractid = sanitize_text_field( $_POST['contractid'] );
			
				$apiValid = false;
				$message = "";
				
				// Check API.
				$username = $this->options->api_user = $api_user;
				$password = $this->options->api_key = $api_key;
				$this->options->account = $customerid;
				$this->options->contractid = $contractid;
				
				
				// REST URL  (Get Service Info)
				$service_url = ($this->options->mode=='live') ? 'https://webservices.purolator.com/PWS/V1/ServiceAvailability/ServiceAvailabilityService.asmx' : 'https://devwebservices.purolator.com/PWS/V1/ServiceAvailability/ServiceAvailabilityService.asmx';
				
				// If using WPML:
				if (defined('ICL_LANGUAGE_CODE')){
					$service_language = (ICL_LANGUAGE_CODE=='fr') ? 'fr':'en'; // 'en' is default
				} else if (WPLANG == 'fr_FR'){
					$service_language = 'fr';
				} else {
					$service_language = 'en';
				}
				
				// Create XML Request
				$xmlRequest =  new SimpleXMLElement(<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<soap-env:Envelope xmlns:soap-env="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://purolator.com/pws/datatypes/v1">
<soap-env:Header><ns1:RequestContext><ns1:Version>1.2</ns1:Version><ns1:Language>en</ns1:Language><ns1:GroupID></ns1:GroupID>
<ns1:RequestReference></ns1:RequestReference></ns1:RequestContext></soap-env:Header>
<soap-env:Body><ns1:GetServicesOptionsRequest><ns1:BillingAccountNumber></ns1:BillingAccountNumber>
<ns1:SenderAddress><ns1:City>Mississauga</ns1:City><ns1:Province>ON</ns1:Province><ns1:Country>CA</ns1:Country>
<ns1:PostalCode>L4W5M8</ns1:PostalCode></ns1:SenderAddress><ns1:ReceiverAddress><ns1:City>Burnaby</ns1:City>
<ns1:Province>BC</ns1:Province><ns1:Country>CA</ns1:Country><ns1:PostalCode>V5C5A9</ns1:PostalCode></ns1:ReceiverAddress>
</ns1:GetServicesOptionsRequest></soap-env:Body>
</soap-env:Envelope>
XML
				);
				
				$xmlNameSpaces = $xmlRequest->getNamespaces(true);
				$soapHeader = $xmlRequest->children($xmlNameSpaces['soap-env'])->Header->children($xmlNameSpaces['ns1'])->RequestContext->children();
				$soapBody = $xmlRequest->children($xmlNameSpaces['soap-env'])->Body->children($xmlNameSpaces['ns1'])->GetServicesOptionsRequest->children();
				
				// Soap Request Values
				$soapHeader->Language = $service_language;
				$soapBody->BillingAccountNumber = $this->options->account;
				
				$xmlRequestString = $xmlRequest->asXML();
				
				echo ($this->options->mode=='live') ? 'Production/Live Server: ' : 'Development Server: ';
				
				if (!empty($username) && !empty($password)){ 
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
								"SOAPAction: http://purolator.com/pws/service/v1/GetServicesOptions",
								"Content-length: ".strlen($xmlRequestString),
								"Accept-language: $service_language"
						); //SOAPAction: your op URL
						curl_setopt($curl, CURLOPT_HTTPHEADER, $curl_headers);
						$curl_response = curl_exec($curl); // Execute SOAP Request
						if(curl_errno($curl)){
							$message .= 'Error: ' . curl_error($curl) . "\n";
						}
						$message .= 'HTTP Response Status: ' . curl_getinfo($curl,CURLINFO_HTTP_CODE) . "\n";
						curl_close($curl);
						
						// Using SimpleXML to parse xml response
						libxml_use_internal_errors(true);
						$xml = simplexml_load_string( '<root>' . preg_replace('(<(\/?)s:Body>|<(\/?)s:Header>|<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/">|<\/s:Envelope>)','', $curl_response) . '</root>');
						if (!$xml) {
							$errmsg = 'Failed loading SOAP XML' . "\n";
							$errmsg .= $curl_response . "\n";
							foreach(libxml_get_errors() as $error) {
								$errmsg.= "\t" . $error->message;
							}
							$message .= $errmsg;
						} else {
							
							$error = isset($xml->{'s:Fault'}) ? $xml->{'s:Fault'} : null;
							if (!$error ) {

								if ($xml->GetServicesOptionsResponse->Services && count($xml->GetServicesOptionsResponse->Services->children()) > 0) {
									// Success! API correctly responded.
									$apiValid = true;
								}
								if (count($xml->GetServicesOptionsResponse->ResponseInformation->Errors && $xml->GetServicesOptionsResponse->ResponseInformation->Errors->children()) > 0) {
									$apierror = '';
									$messages = $xml->GetServicesOptionsResponse->ResponseInformation->Errors->children();
									foreach ( $messages as $message ) {
										$apierror .= 'Error Code: ' . $message->Code . "\n";
										$apierror .= 'Error Msg: ' . $message->Description . "\n\n";
									}
									$message .= $apierror;
								}
							} else {
								$apierror = '';
								$errors = $xml->children();
								foreach ( $errors as $error ) {
									$apierror .= 'Error Code: ' . $error->faultcode . "\n";
									$apierror .= 'Error Msg: ' . $error->faultstring . "\n\n";
								}
								$message .= $apierror;
							}
						}
						
					} catch (Exception $ex) {
						// cURL request went wrong.
						$message .= 'Error: ' . $ex . "\n";
					}
				}
				
				echo str_replace("\n","<br />",$message);
				
				if ($apiValid) {
					echo '<strong>Success!</strong> API Credentials validated with Purolator.';
				} else {
					echo '<strong>Failed</strong> API Credentials did not validate.';
				}
				
				// Try get_rates to see if customer info works.
				if ($apiValid) {
					echo '<br /><strong>Testing Rates Lookup:</strong><br />';
					$this->options->display_errors = true;
					$rates = $this->get_rates('CA','BC','V5C5A9',0.5,5,5,2); // Ship 5x5x2cm package to Purolator headquarters, Burnaby BC.
					if (is_array($rates) && !empty($rates)) {
						echo '<br /><strong>Rates Lookup Success!</strong> Account information appears to be valid.';
					} else {
						echo '<br /><strong>Rates Lookup Failed</strong> Unable to look up rates. Account number may be invalid or inactive.';
					}
				}
				
				exit;
			}
			
			
			function convertSize($size,$unit_from) {
				$finalSize = $size;
				switch ($unit_from) {
					// we need the units in cm
					case 'cm':
						// change nothing
						$finalSize = $size;
						break;
					case 'in':
						// convert from in to cm
						$finalSize = $size * 2.54;
						break;
					case 'yd':
						// convert from yd to cm
						$finalSize = $size * 3 * 2.54;
						break;
					case 'm':
						// convert from m to cm
						$finalSize = $size * 100;
						break;
					case 'mm':
						// convert from mm to cm
						$finalSize = $size * 0.1;
						break;
				}
				return $finalSize;
			}
			
			function convertWeight($weight,$unit_from) {
				$finalWeight = $weight;
				switch ($unit_from) {
					// we need the units in kg
					case 'kg':
						// change nothing
						$finalWeight = $weight;
						break;
					case 'g':
						// convert from g to kg
						$finalWeight = $weight * 0.001;
						break;
					case 'lbs':
						// convert from lbs to kg
						$finalWeight = $weight * 0.4535;
						break;
					case 'oz':
						// convert from oz to kg
						$finalWeight = $weight * 0.0283;
						break;
				}
				return $finalWeight;
			}

}