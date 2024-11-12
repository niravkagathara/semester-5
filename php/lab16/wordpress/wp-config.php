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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ',Wiv=/V!l<)Ib6Jw (Xd`k!e;RuEM1,}@Y%c^gKCvq%U+2?<@cp(G;DostwG~|3q' );
define( 'SECURE_AUTH_KEY',  'U&Ck$HI=daqdEbL{|k$:&u?3?sQ&kq#KFn.cx)HwMmUjdN0Nkt LfQOuQA%#8&t6' );
define( 'LOGGED_IN_KEY',    'J^m6r:y|4.%K%2giQmv5{|!sSQ?R&2C%`]Q<1EV_9:~Hj1?)m&sym}wcvI!Q2LmJ' );
define( 'NONCE_KEY',        'Z.26uY@x+Smd7o7v+^2vA5uhvlFvs=p94a3Cl}M4H/vClAOba+=|yR~&~1d9{HV:' );
define( 'AUTH_SALT',        'snLqJ$c9o8PjMKl^x]w_52wx%hXewRWA3kf1Y}^3f_Bu{aW)Uzc0C.1jp8e2V<l~' );
define( 'SECURE_AUTH_SALT', '>&8N[4|x-PD9bWqCNJVj.Fl0KC XdV(uR9:B+>cKCwzXS- d;:ou!$PvK=~7d~Nh' );
define( 'LOGGED_IN_SALT',   'uQo+lJClR%cpAevEo75]/_%$?I.`!*KUw{j`2ssynyy*q/uQ$-@ni#&fPG *>2AH' );
define( 'NONCE_SALT',       '#1;3eT)T~THteKE/BLF`)[Sw~|MGv(wsquOxUbV,9xW-]9D,A)k6wF^BOONlx6}2' );

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
