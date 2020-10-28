<?php

/*
 * Dynamically load the correct wp-config file.
 * if 'HTTP_HOST' is not defined, assume wp is running in the terminal with wp-cli & load the localhost config
 * if 'HTTP_HOST' contains 'localhost', load the localhost config
 * otherwise, load production config
 * */

if (
	(array_key_exists('HTTP_HOST', $_SERVER)) &&
	(strpos($_SERVER['HTTP_HOST'], 'localhost') !== false)
) {
	require_once(dirname(__FILE__) . '/wp-config/wp-config-localhost.php');

} else {
	require_once(dirname(__FILE__) . '/wp-config/wp-config-production.php');
}


/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

///** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//  Disable pingback.ping xmlrpc method to prevent Wordpress from participating in DDoS attacks
//  More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/

if (!defined('WP_CLI')) {
	// remove x-pingback HTTP header
	add_filter('wp_headers', function ($headers) {
		unset($headers['X-Pingback']);
		return $headers;
	});
	// disable pingbacks
	add_filter('xmlrpc_methods', function ($methods) {
		unset($methods['pingback.ping']);
		return $methods;
	});
	add_filter('auto_update_translation', '__return_false');
}

