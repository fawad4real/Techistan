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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'techistan_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'J?XU</F^/w{=g4|HDP<I<g&0;,38+|tMlSJ;s}[VA?Iw*3qnXh,b/%nIin26bq?Y' );
define( 'SECURE_AUTH_KEY',  '`W?pCd+I6%ij?g#fL/})/Fk`>vz_NTBJ+/qruo>3-TLr=>e#x:Pg|k3mAV$8u!F#' );
define( 'LOGGED_IN_KEY',    'hh(A83m; rAxi.#I!AJ1?Z4[5@T3C;(x{lO!6u;~;,MWo!_-R#I~;7GaJohk6 Io' );
define( 'NONCE_KEY',        'HR9L-BFwHiIU%3R 7d9}*`$,!Kr:swO<*Yd2 H1kOTTVud5f^|86E#ojzgNm9&ZI' );
define( 'AUTH_SALT',        ';8%pu@C9o:I:~CcOmJJ?LT`#=iZX| !@uX7P$AL SDD$tf^<HmzZ^$)Ysy:[/m)A' );
define( 'SECURE_AUTH_SALT', 'o(q<SDU~|}vj+36^sG8jNn%%pD =]Mq&/IB0>yf:vx^jN7e7%I#Z56+K<ASC%N#Q' );
define( 'LOGGED_IN_SALT',   'HeyNG3KOANrY#B#pv7B`MEv4bxT#y(Zx5_$I3&?D~LhUh2|s|-Emt1X2kxE:5fXO' );
define( 'NONCE_SALT',       'ND>Z7}bo.0g(+1q;hP#S)YRbrE,Y(C!#Ti;Jk4gUx-Uky$mF1wxxTTuH<;?O]Rb&' );

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
