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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
if (file_exists(dirname(__FILE__) . '/local.php')) {
	// Local database settings
	define('DB_NAME', 'cubizznewdb');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
} else {
	// Live database settings
	define('DB_NAME', 'bizzperu_cubizznew');
	define('DB_USER', 'bizzperu_cunew');
	define('DB_PASSWORD', 'b}Qt#vb^)A>CbT}:#');
	define('DB_HOST', 'localhost');
}

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
define('AUTH_KEY', '7fa464b0209ae0426a642bc7a8e8e929b3c6b783d464a0c557f1ec9a016dbf6a');
define('SECURE_AUTH_KEY', '424e2e4b82cd8009ec018034b99989392d2c8b7d1bf584d74856ffb520b7fb21');
define('LOGGED_IN_KEY', '3b9724c67db8376166a3e57e6593d4ab4b18ec8b1e937a15edba619c9dbfd176');
define('NONCE_KEY', '8faf01cf2ec1cf328e356db8795389cde84486bcb5e442fdbe643b38950d0c85');
define('AUTH_SALT', '71d7d3ef854574014915b0b8f4e88819f3440484412730eeacb59408f0bc830a');
define('SECURE_AUTH_SALT', 'b0282cff0e793993c31dcf716e487755378a6755da199b47a799d78fc27bcc23');
define('LOGGED_IN_SALT', '648f5f4eae1fa902ed85ff0721d1f90296aca53e1cfa3718c697760f50da8c9e');
define('NONCE_SALT', '47f94c28aeddcd761ee587d0ac145592f44b9a827cb9eae312aec7fe88f5f089');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rRe_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
