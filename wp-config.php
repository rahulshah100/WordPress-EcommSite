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
define( 'AUTH_KEY',         'rvpB^kR#EX<]VA~Fy6pR:E>IR`C)^On#gy#i*x$RJJ9dar6F8sT=:;5Vg~-5oqDj' );
define( 'SECURE_AUTH_KEY',  'wj+(Je,Qi%]G{_wkg{- x(Bz1<z$y3~$&{nHHd-sYxK!Y^,nY:biX72QA3%Lcrt<' );
define( 'LOGGED_IN_KEY',    '-zhA#;<jb~h4jQ@WJ:1UdV@,,AOlo3D7@.3f%koHJa`b@,/<oY[EH6 @dm2_E~|T' );
define( 'NONCE_KEY',        '6;BFM&?1qv8fXF/,!pL`L~L!#^DTm6f{]v|LRy|IE&e44P4uR,;>EMyN~M[c5BtJ' );
define( 'AUTH_SALT',        'M@oT/[F4|.`ZUGKev9W|UpDJF~<977m%8y7h<3M802V:3i3lt&jYvGTnTFlTv@3w' );
define( 'SECURE_AUTH_SALT', 'ybmmt(OguF/9uiaDyMH,S$`.)`1e.U9oi;+Evk<<c<eIq%Yr0hC037<9`+#>~$&B' );
define( 'LOGGED_IN_SALT',   'ReN;seMj,?B2eXT[p_)zK9my,bRnL>Uq8CAC?JiC[<Z7r4^3JWMZ0+x}x=)M|h>,' );
define( 'NONCE_SALT',       '&OR>;2GcdO`t{B@}_ZRUOcYXg>lFSwQmll6WPz/U!yIOhKQU*FeA|pc1A+6gD_nz' );

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
