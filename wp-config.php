<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'themas-wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2oe7Mk1TmflUvhAx .j/Zke&y A/ltQ_w{1BSiY~VC}^YXpGj_yGoxHhrDn]2csi' );
define( 'SECURE_AUTH_KEY',  'Zw!4P#OG9~3hNnm>y`VVg_)fiSMHYQpR#JQ$CqzNJk?7.0yMB-kHnq`bQP5E}*=]' );
define( 'LOGGED_IN_KEY',    'W)]`ofI}C?-S8S^n?!S/7aUlZt9A)9MU>=:f1;>Ccd($WQ~L!{!eRviPWae-`vY1' );
define( 'NONCE_KEY',        '__meqXb.{d?eJtCu:.&1@zq0EZV!jeK[L`Pln_yB-*~L80!ZLRM4goBxoi?Ro%R]' );
define( 'AUTH_SALT',        '`tDa{?2{:l*WWf)@4zROOo}BS0m^=1~:`ot#*<SH}OMnC?YY-MU|LZdUD=yt=V?9' );
define( 'SECURE_AUTH_SALT', 'sZN1`OS;gu<o4;0<_jw216n1ZK#*^8[b=*n~%Z^BczX+xe[LgUl(%}=etlws3:>d' );
define( 'LOGGED_IN_SALT',   '%u9WJu?-SW)@LGYL1[;ss;I$_?6`IegB&]}Ph75c>`D$h)&+i&w,1OY*rNm!ZCc~' );
define( 'NONCE_SALT',       'j1qv2vc5gSx#Y7?oDbhX);tlWZ:b3__U;^om.d[=G):v1PA1GEE(V3=qvi58W`|y' );
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
