<?php
/*
Plugin Name: WooCommerce Purolator Webservice Method
Plugin URI: http://truemedia.ca/plugins/woopurolator
Description: Extends WooCommerce with Shipping Rates and Tracking from Purolator via eShip Web Services
Version: 1.1.4
Author: Jamez Picard support@truemedia.ca
Author URI: http://truemedia.ca/

Copyright (c) 2014 Jamez Picard

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED 
TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL 
THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF 
CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS 
IN THE SOFTWARE.
*/ 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//Check if WooCommerce is active
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

// Plugin Path
define('WC_PUROWEBSERVICE_PLUGIN_PATH', dirname(__FILE__));
	
// Shipping Method Init Action
add_action('woocommerce_shipping_init', 'woocommerce_purowebservice_shipping_init', 0);

//Shipping Method Init Function
function woocommerce_purowebservice_shipping_init() {
	if (class_exists('WC_Shipping_Method') && !class_exists('woocommerce_purowebservice')) {
		
		// Main Class File
		require_once(WC_PUROWEBSERVICE_PLUGIN_PATH . '/models/woocommerce_purowebservice.php');
	
		// Add Class to woocommerce_shipping_methods filter
		function add_woocommerce_purowebservice( $methods ) {
			$methods[] = 'woocommerce_purowebservice'; return $methods;
		}
		add_filter('woocommerce_shipping_methods', 'add_woocommerce_purowebservice' );
	}

}
// Ajax Validate Action
add_action('wp_ajax_purowebservice_validate_api_credentials', 'woocommerce_purowebservice_validate');
function woocommerce_purowebservice_validate() {
	// Load up woocommerce shipping stack.
	do_action('woocommerce_shipping_init');
	$shipping = new woocommerce_purowebservice();
	$shipping->validate_api_credentials();
}

// Ajax Rates Log Display
add_action('wp_ajax_purowebservice_rates_log_display', 'purowebservice_rates_log_display');
function purowebservice_rates_log_display() {
	// Load up woocommerce shipping stack.
	do_action('woocommerce_shipping_init');
	$shipping = new woocommerce_purowebservice();
	$shipping->rates_log_display();
}


// Tracking Details, Init, Include Class.
if (!class_exists('woocommerce_purowebservice_tracking')) {
	// Load Class
	require_once(WC_PUROWEBSERVICE_PLUGIN_PATH . '/models/woocommerce_purowebservice_tracking.php');
	
}

// Wire up tracking
add_action( 'admin_init', 'purowebservice_load_tracking'); // Admin: Order Management
add_action( 'woocommerce_order_items_table', 'purowebservice_load_tracking'); // Customer View Order page.. outside of admin_init.
//add_action( 'woocommerce_email_before_order_table', 'purowebservice_load_tracking'); // Customer Completion Email.// already wired up with admin_init.
function purowebservice_load_tracking() {
	$puro = new woocommerce_purowebservice_tracking();
}


// Wire up plugins settings.
add_action( 'admin_init', 'purowebservice_load_pluginsettings');
function purowebservice_load_pluginsettings() {
	$plugin = plugin_basename(__FILE__); 
	add_filter("plugin_action_links_$plugin", 'purowebservice_settings_link' );
}
// Add settings link on plugin page
function purowebservice_settings_link($links) { 
	global $submenu;
	if (isset($submenu['woocommerce']) && in_array( 'wc-settings', wp_list_pluck( $submenu['woocommerce'], 2 ) )){ // Woo 2.1
		$settings_link = '<a href="admin.php?page=wc-settings&tab=shipping&section=woocommerce_purowebservice">Settings</a>';
	} else {
		$settings_link = '<a href="admin.php?page=woocommerce_settings&tab=shipping&section=woocommerce_purowebservice">Settings</a>';
	}
  array_unshift($links, $settings_link); 
  return $links; 
}

/** Activation hook - wireup schedule to update Tracking. */
register_activation_hook( __FILE__, 'purowebservice_activation' );
function purowebservice_activation() {
	wp_clear_scheduled_hook( 'purowebservice_tracking_schedule_update' );
	wp_schedule_event( time() - 18 * 60 * 60, 'daily', 'purowebservice_tracking_schedule_update' );
}
/** On deactivation, remove function from the scheduled action hook. */
register_deactivation_hook( __FILE__, 'purowebservice_deactivation' );
function purowebservice_deactivation() {
	wp_clear_scheduled_hook( 'purowebservice_tracking_schedule_update' );
}

// Action hook, run update on tracked orders.
add_action('purowebservice_tracking_schedule_update',  'purowebservice_schedule_update' );
function purowebservice_schedule_update() {
	$puro = new woocommerce_purowebservice_tracking();
	if ($puro->options->email_tracking) {
		$puro->scheduled_update_tracked_orders();
	}
}

/**
 * Load Localisation
 */
add_action( 'plugins_loaded', 'purowebservice_load_localisation');
function purowebservice_load_localisation() {
	load_plugin_textdomain( 'woocommerce-purolator-webservice', false, dirname(plugin_basename(__FILE__)). '/languages' );
}


} // End check if WooCommerce is active
