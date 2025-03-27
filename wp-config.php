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
define('DB_NAME', 'tiendascanaperu');

/** MySQL database username */
define('DB_USER', 'tiendascanapeusr');

/** MySQL database password */
define('DB_PASSWORD', 'pA0nM5cL3bjhb2sW87h');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'iEl)ccL6Qv2hR9A47CyQ4ISttB6UVvcezS5BAuU50)zxXVZYWcVGHZJ^mATU7RGG');
define('SECURE_AUTH_KEY',  'FNSbrJ4&FbCEX0P5D4HrtSJjEDrOCBHoq(OSV2IsTbAkC8xfV)19d99UmB*UmA9L');
define('LOGGED_IN_KEY',    'LJ(sQdSz6eD6@h#skGFtE^wcS%K10L4QrcOET(7A@%4QV(jw7W7aDdzuEmmZzIZ1');
define('NONCE_KEY',        'feAyVekEVzD&H1fVT3jz!ajOq%V9KGsXmbth1!@^#cVkS3XTPR)BVqZamSDTCilj');
define('AUTH_SALT',        'LQF)tXfugTkJPis#du^bB(ZDm9Yf8%wS!P%LWH7oerwY0p8ybZhgXqr@O1@hVx7w');
define('SECURE_AUTH_SALT', 'jS4ZveY4@1hS7yx%ZPNPBypJ(IFMfhtoC8LxTGtr9*saXjbQT4H2V^f!GzV99@E7');
define('LOGGED_IN_SALT',   'W%nLr&adcpvXP9!2(aX0gqw&#g19FBo2MS8L4)XhuDeE!PB&dWtp8s4@6XRDt4NO');
define('NONCE_SALT',       'eui6Xrz2K42P&aqrLs1%DYl5O8NkgXfQ)iK2qw*ujaVnSykjovGyuc(bC041Z*UM');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
//define('WP_DEBUG', false);
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
