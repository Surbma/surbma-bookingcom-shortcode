<?php

/*
Plugin Name: Surbma | Booking.com Shortcode
Plugin URI: https://surbma.com/wordpress-plugins/
Description: A simple shortcode to include Booking.com search box into WordPress.

Version: 2.0

Author: Surbma
Author URI: https://surbma.com/

License: GPLv2

Text Domain: surbma-bookingcom-shortcode
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) {
	die( 'Good try! :)' );
}

// Localization
function surbma_bookingcom_shortcode_init() {
	load_plugin_textdomain( 'surbma-bookingcom-shortcode', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'surbma_bookingcom_shortcode_init' );

function surbma_bookingcom_shortcode_shortcode( $atts ) {
	extract( shortcode_atts( array(
		"param" => ''
	), $atts ) );
	return '<script type="text/javascript" src="https://www.booking.com/general.html?'.$param.'"></script>';
}
add_shortcode( 'surbma-bookingcom', 'surbma_bookingcom_shortcode_shortcode' );
