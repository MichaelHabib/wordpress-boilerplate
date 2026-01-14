<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db');

/** MySQL database username */
//define( 'DB_USER', 'bn_wordpress' );
define('DB_USER', 'db');

/** MySQL database password */
define('DB_PASSWORD', 'db');

/** MySQL hostname */
define('DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '123');
define('SECURE_AUTH_KEY', '123');
define('LOGGED_IN_KEY', '123');
define('NONCE_KEY', '123');
define('AUTH_SALT', '123');
define('SECURE_AUTH_SALT', '123');
define('LOGGED_IN_SALT', '123');
define('NONCE_SALT', '123');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * Custom Config
 */

//define('WP_SITEURL', 'https://example.com');
//define('WP_HOME', WP_SITEURL);
//define('WP_CONTENT_DIR', ABSPATH . 'wp-content');



define('WP_DEBUG', TRUE);
define('WP_DEBUG_LOG', TRUE);
define('WP_DEBUG_DISPLAY', FALSE);
define('WP_DISABLE_FATAL_ERROR_HANDLER', FALSE);

define('SCRIPT_DEBUG', FALSE);
define('CONCATENATE_SCRIPTS', TRUE);

//define('DISALLOW_FILE_EDIT', TRUE);
//define('DISALLOW_FILE_MODS', TRUE);
//define('FS_METHOD', 'direct');

//define('WP_TEMP_DIR', __DIR__.'/tmp');

/* PHP memory limit for general application use */
define( 'WP_MEMORY_LIMIT', '256M' );

/* PHP memory limit for backend. */
define( 'WP_MAX_MEMORY_LIMIT ', '512M' );


/* PHP config changes (if not possible via CPANEL or php.ini */
//@ini_set( 'log_errors', 0 );
//@ini_set( 'display_errors', 0 );
//@ini_set( 'upload_max_size' , '20M' );
//@ini_set( 'post_max_size', '20M');
//@ini_set( 'memory_limit', '800M' );


/* That's all, stop editing! Happy publishing. */
