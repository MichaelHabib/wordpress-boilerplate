<?php

/*
 * Dynamically load the correct wp-config file.
 * if 'HTTP_HOST' is not defined, assume wp is running in the terminal with wp-cli & load the localhost config
 * if 'HTTP_HOST' contains 'localhost', load the localhost config
 * otherwise, load production config
 * */
if (
	(!array_key_exists('HTTP_HOST', $_SERVER)) ||
	(
		(array_key_exists('HTTP_HOST', $_SERVER)) &&
		(strpos($_SERVER['HTTP_HOST'], 'localhost') >= 0)
	)
) {
	require_once(dirname(__FILE__) . '/wp-config/wp-config-localhost.php');

} else {
	require_once(dirname(__FILE__) . '/wp-config/wp-config-production.php');
}

require_once(dirname(__FILE__) . '/wp-config/wp-config-footer.php');
