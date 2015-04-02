<?php

/*
Plugin Name: Surbma - Booking.com Shortcode
Plugin URI: http://surbma.com/wordpress-plugins/
Description: A simple shortcode to include Booking.com search box into WordPress.

Version: 1.0.2

Author: Surbma
Author URI: http://surbma.com/

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
	return '<script type="text/javascript" src="http://www.booking.com/general.html?'.$param.'"></script>';
}
add_shortcode( 'booking_com', 'surbma_bookingcom_shortcode_shortcode' );

