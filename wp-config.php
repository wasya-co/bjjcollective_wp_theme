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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'awesome_password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Mk{]Z}M3_S8P`u%_?}7_=VWu@z7q1Cjx8S|h;XbWjo0jbegU`4cSS-fF~;u]A]L4');
define('SECURE_AUTH_KEY',  'Wg(4uG_8+bwTY4$h,3dyTX8dei*N1IF)).n${63Zq53@9Kt{>:S7873=ayuoF/KU');
define('LOGGED_IN_KEY',    ')LG(SP~qO]>=%F37O9!n,xT0|ETY#JQf#v1&@T~KHR@@rsWu%X,[<f,9|gVsTh%b');
define('NONCE_KEY',        'rYayV|FfiqaRIk8fY]}pGD# &5d/LU!o5iOj {*)!5Bv*6>CnsiIkx)cGFIemC/k');
define('AUTH_SALT',        'qBk[9DH;)bY4j|%+Z#6.fvLfZeTz7t)TLb:t2wGy-AA`Vc2%[||Dw9NDzY^oSMip');
define('SECURE_AUTH_SALT', '_Dk|ob2EJgkx$XG7jJD9h4F7w3>HSu&?D# XR}j.MPuEht@7$D f:`&iCekxwDpZ');
define('LOGGED_IN_SALT',   'OF1TY}&{,^v`UO-_rT)Slr`&O@W=1nS(r,h1Nz-EPq9Zc,?zXSb58{XGjAP.tQ )');
define('NONCE_SALT',       'oo2({?.07L`+gU>7:tw&-Wnz6^Yvms:W6,2md%`TWJh:45a-y,m?m^M$T&kG`ap;');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
