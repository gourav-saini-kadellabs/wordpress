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
define( 'DB_NAME', wordpress' );

/** Database username */
define( 'DB_USER', 'Administrator' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'We~CY d^jHu<4|pXto/Rtc:s(#||Di ncH}2lE~zxonuj-sA T!&r0k[RMxf}L3>');
define('SECURE_AUTH_KEY',  'KlX#8iGapj8z3?hk6 <[y83L+EV{E,6t0`c?_iO>WMym2uQ[BOk4ged@o-?^uyu,');
define('LOGGED_IN_KEY',    'KX;-WxY2HhJLK[]]sVF>8RxHjj7k7-0QIDip#8bsmN0pb&V8]&?jM~R|K8)-K)wy');
define('NONCE_KEY',        'z65`#p5KqRq& //M(%eo%75+K`z!BO+DdYUFWbH[$|/[GtR]|-Sx/$X#Z5hs$OTA');
define('AUTH_SALT',        '/o[-+8+{AgS cC~l^ZZA,?<n;pGzxY4+S|Bc1=Ro<>pY^?zDaq?JyXY!Y+-T1(Bx');
define('SECURE_AUTH_SALT', 'f+mo|l#0Bj+znUYNR-Joh{hGys~i6 {1NiZ(s_F_5l_Td?M(^h`+kby]w7z6:ST-');
define('LOGGED_IN_SALT',   'SVVIR;Stc.gK8V+0ojf9Y9VU.dwpw^gG A-k763jn5z_W3.DgCZ_-]T_;NszQ-We');
define('NONCE_SALT',       '7((FE1eP)-1#n;h6pK`r4+zm9rnzp0}$U* A)n+5.}wF! op77k-%_U$:k$]Xmb/');

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
