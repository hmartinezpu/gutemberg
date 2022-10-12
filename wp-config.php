<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gutemberg' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '|=v/yqWimJGMy(r QE`0g$X0;a-K;TB:kSe3x?hj>KZ6L$eV!O^+Mhl&v+&z(QKC' );
define( 'SECURE_AUTH_KEY',  ']#>?RQU=Q~j-oN#Ge@f7!r;Cg*`W(K!S{kvP>sS1%[BsGF?k,/*2osHCd2_A/jG|' );
define( 'LOGGED_IN_KEY',    '{7Q1E1bzx6L@l>1A!e#AK?Lb1M5.E8J6|(X!MbIVM#u:3ZPj.qX+_~+;YB>%Q~wn' );
define( 'NONCE_KEY',        'fIZ}<Qp_nn:O$`)[:TAu<Qg&x7pTrtfQ~s/#ohGjN!UA>hy@uj6]>:-6A=gX$+8;' );
define( 'AUTH_SALT',        '1WWRb@D4ihP5Nx@`7ew6b9R76Y#hgQJcFch9~rX.veZK `YH<ktf|J2Aw[BUi`4Z' );
define( 'SECURE_AUTH_SALT', 'O/6j2(_?RuT@jCf f`L!imdp}i;<wRx+=W#K!CIFsF0yK=]xG!pcBg;+NOI%1SO=' );
define( 'LOGGED_IN_SALT',   'N7IPQhXF|Lo@u0q9SDn^e2%!Xd_]<-TqlfQp|sv2e:f/|nMt$?L6g^J<(6Rt#E@ ' );
define( 'NONCE_SALT',       'f88RdsJfH;k*R8?X+~gyi*S2;)xM5cl6V6yx@_`eOu}jA?k>k.&eB(~H1<Fqjx%[' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
