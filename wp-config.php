<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'hatem\'s wordpress' );

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
define( 'AUTH_KEY',         'JzPmIBMRUb2c0?[4@mT*XccfXBG]0.912g<gW.NwL. v,j_]v`8^-` v^Ur~ih_$' );
define( 'SECURE_AUTH_KEY',  'Pf!L+xd6Eel7,f^YizUy7i}=!Nd%^l3v)(E*aD!y9N:/,b?ne)h2x=Zi Gp?Gq{a' );
define( 'LOGGED_IN_KEY',    '4YC%2/6<t7_V ^Fo5HI-gL&V`Yn!!:GQij#;B.,-&&C=-HR2Q`3W[4$eONwHD7x^' );
define( 'NONCE_KEY',        'UQ;b1-mNH7}c1<3Yn=h>>N1lbM-M:PueQXimNl+T/6mJKS18|Kg(<fSaw=$RfcY[' );
define( 'AUTH_SALT',        'xqZT?QCte%XqJP3SkYTOp~tOQaa(A4Zl/w(puF,|cHS r@Xk)$.J16&@!wyAB w1' );
define( 'SECURE_AUTH_SALT', 'bmQ:pSi(Svi]3cbC3b4b%_f_3^+D!)VfYL%82#>+2OX@j#XP7)}8S:l$_REB%CsO' );
define( 'LOGGED_IN_SALT',   '9GNuC86%I4-sT5* ~X`_&c`z&zvTMRpSL?K#Xsp[=`[gy.`_ytRDC:j%=J&@_<{ ' );
define( 'NONCE_SALT',       'n*7OK5DwX@a.b4*R0.x(Nt#W`nurjw;~fDHo.[]mnfTD_k6EH&ttHyu>%TD>qOlL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
