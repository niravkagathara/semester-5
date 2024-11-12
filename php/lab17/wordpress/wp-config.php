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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress17' );

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
define( 'AUTH_KEY',         'Xrlp2Jl|22CRr%wR#|VXCH=arp{Uv.rAGr*jYO$9!w54&#[&0,jOmEQGE!3Wq!SA' );
define( 'SECURE_AUTH_KEY',  'Mta=ro}O3qI#[=02gA$S%b<wm&R)6xpbgi^hFPyGGS$3<ePLuC:X<yr0jq_{bj~}' );
define( 'LOGGED_IN_KEY',    'dD;sIDI6R:gAy{;7_Q.bXy$-7e gK1^5nKp2]VT9{zJ]x/2{ :n73^}TN)I`H/:a' );
define( 'NONCE_KEY',        '+BG`!Er.~0J*1wJ~a0]jX,=JIc(i,RmE5sw=hcuC`:=YJsLamp<.>Hn/izTU=Wu~' );
define( 'AUTH_SALT',        'TL<0I~Vg[PexIvCBNUm<=U_qQ. ;,:febY7pYqJ@c/z!/7J{!0V8t=`yEGsBc;u#' );
define( 'SECURE_AUTH_SALT', 'P*j[)^=HpRoxo~6E~8Q+3H{Dq:r772 h!zF;TbAH:6u*f6PX7pQlkn]u.EB009&j' );
define( 'LOGGED_IN_SALT',   '--w,[&ycuNYdc)NX3c-ORl.Nw]rcv}K7[O@}J(RH*MRbnlzdvZ dk},@6=YzSzWd' );
define( 'NONCE_SALT',       'Z?SbTG* 3f4v_/*_XI8=H:V-T1IbHh03^o__j%J+FPM,YB8>EXZdseKhE$]P[tA7' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
