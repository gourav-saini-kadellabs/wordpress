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
define('AUTH_KEY',         'N=JZ_<;~G*lnq~LDqq=S{&f}?jz>7ibtsQXiPAd~+Y; rDd W^W[c,`,55T|e! ,');
define('SECURE_AUTH_KEY',  'fyP:[-B[Gnlf-wK8R5]Lhw_m4_4>&)!N|LCO]=>(o:-iUz}Tym[eu+fN!hU,)!%;');
define('LOGGED_IN_KEY',    'KFNu|f,2?Bnjv+rmVZbMthr?E57qkT#c`<GsG>3/;BdT+$/*f:dpO3#X0-J]|8oN');
define('NONCE_KEY',        '+~/b> L|W&rUBX(_;4yNmky~5LmtFAe^O&+4YwoH~QU*%,Q[+-OiRQ!gs(%1N|p|');
define('AUTH_SALT',        'K*+%s<CAu;;GPaj~78?l6x=H)8+Gb|.3Vbp]{G+;ZP$rFL^~*JC~k*LJvDJc>+yN');
define('SECURE_AUTH_SALT', 'W)A88R=Kj%cfB@)_,67C.wIly#:%U>#}}9mA..J6R&b;|^+w)SRq#.;H;KN|d;Gd');
define('LOGGED_IN_SALT',   '3D^7T=1;|7d!A/GPV9$+Unu~y(]L_nKGejM8-f+ft-hrT1}<Dp+>>m_6aTL`Uw8p');
define('NONCE_SALT',       'N,DnT_J?H=wcd5/,Rb#z+(v @av=$QziHbU[SG]E4YgKudmXV+ {!6+6e^`%}{`R');

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
