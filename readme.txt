=== Surbma - Booking.com Shortcode ===
Contributors: Surbma
Donate link: http://surbma.com/
Tags: Booking.com, shortcode
Requires at least: 3.0
Tested up to: 4.1
Stable tag: 1.0.2
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple shortcode to include Booking.com search box into WordPress.

== Description ==

A simple shortcode to include Booking.com search box into WordPress. This is a very useful plugin if your user don't have a permission to embed javascript in the content.

The shortcode: `[booking_com param="ALL_THE_PARAMETERS"]`

Where param is the parameter, you can find in the Booking.com embed code. You need to find the src field, where you have to copy all the parameters after the `http://www.booking.com/general.html?` url.

You can find the parameters at the end of your Booking.com script's url:
`<script type="text/javascript" src="http://www.booking.com/general.html?ALL_THE_PARAMETERS"></script>`

== Installation ==

1. Upload `surbma-bookingcom-shortcode` folder to the `/wp-content/plugins/` directory
2. Activate the Surbma - Booking.com Shortcode plugin through the 'Plugins' menu in WordPress
3. That's it. Now you can use the shortcode. :)

== Frequently Asked Questions ==

= What is Booking.com? =

Booking.com offers online accommodation booking. For more information, please visit the official Booking.com website: <a href="http://www.booking.com/" target="_blank">www.booking.com</a>

= Can I customize the look of the form? =

No, you can't.

= What does Surbma mean? =

It is the reverse version of my last name. ;)

== Changelog ==

= 1.0.2 =

- Changed some texts, text domain and function names.

= 1.0.1 =

- Fix localization.
- Prevent direct access to the plugin.

= 1.0.0 =

- Initial release.