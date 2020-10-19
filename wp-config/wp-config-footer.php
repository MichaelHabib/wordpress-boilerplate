<?php

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


//  Disable pingback.ping xmlrpc method to prevent Wordpress from participating in DDoS attacks
//  More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/

if ( !defined( 'WP_CLI' ) ) {
	// remove x-pingback HTTP header
	add_filter('wp_headers', function($headers) {
		unset($headers['X-Pingback']);
		return $headers;
	});
	// disable pingbacks
	add_filter( 'xmlrpc_methods', function( $methods ) {
		unset( $methods['pingback.ping'] );
		return $methods;
	});
	add_filter( 'auto_update_translation', '__return_false' );
}
