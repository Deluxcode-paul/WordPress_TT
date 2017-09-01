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
define('DB_NAME', 'deluxco_dev-1');

/** MySQL database username */
define('DB_USER', 'deluxco_dev-1');

/** MySQL database password */
define('DB_PASSWORD', 'dev1.dlc');

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
define('AUTH_KEY',         'm}vrP2|smk5+}sGr4UknF~AJU5Wm+;RJ;.Y>QO wf^f :[R}3LsPjsS[tL~]f[%6');
define('SECURE_AUTH_KEY',  'V=YFM&gG`Q2>Ka-B,QoTF0P|Ce{%8p^T2{WA~fbMY2mHP>!HE*54-+}kpa~l7Y3s');
define('LOGGED_IN_KEY',    'Z%Q0Gcn/6ETqsQz~CSS&|I>ZIJC1e2(jC8/Y<A^sfxVZQI?-|7e^P/yxAu3-a:5(');
define('NONCE_KEY',        ';]vQ|.ZQn7T`E!F!ORSX}u!;2CEsFIa1Adj6H)B1Mn|,vZ1k>bB;>MMPDv+ 1Q(U');
define('AUTH_SALT',        '|SC1X3|*HfaXAFKZ:bD`Wn,>oW)VQMTnCtpsZ{7qFC_S-`7w}u}n?fm6l{RiNY]G');
define('SECURE_AUTH_SALT', ' }ZYE>cr+m3}|= 0K/br[%U<vy@KL*&8>R(E%Y~uVy2rr?{O7Tmic}SvUbG~6`4|');
define('LOGGED_IN_SALT',   'v$._l3lFWHP!l0+a72iU>5m[0LaMqo& Qfez.@6,J48n9[:@Rw 9zT1D1ym>Mlq<');
define('NONCE_SALT',       '+;+1upT>,&Reb@04:B <-ShQjN. +q@mJ_LH,JKyYI]]`+GRE[YD^w[?A+lP53N[');

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
