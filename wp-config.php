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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define('FS_METHOD', 'direct');

define('FTP_HOST', 'localhost');
define('FTP_USER', 'root');
define('FTP_PASS', '');


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         'HbtAE=xre):N|f3wa?_^gj=<{p363w0l,4qxy<(4OL%q8^+){u,&beeT.esR2+yw' );
define( 'SECURE_AUTH_KEY',  '<[b<;.9I.&hsD@O2a7Wegc{rk:[[_634b5`Gg1[>AE9L,_`^@^.@MS16_hB?<g16' );
define( 'LOGGED_IN_KEY',    ']{ej,[j_#z}+C}TN!v>(X]/d}XeV6l!Um!/l3It3#a|h9? R yTiF1|,S+Y>wyT@' );
define( 'NONCE_KEY',        'k(9j1I0$9Q; ErEXM%]rEqU=*JlTHNYHN(iCB$_[x!tqLT$?gQ&nM%tJ46G2a)h>' );
define( 'AUTH_SALT',        'xBm_SwjSCaR;:D(vn5Ae@=|bU=LN:4{a+ko_d{4Id*{Kx?/a.L5>tGTW*&#p>]u>' );
define( 'SECURE_AUTH_SALT', 'py@2AgY1]w0( _Zz4X}G-D1k, Hf!~PR!AMFkSS{v6: /ir}My>[p8`DtMy H/ns' );
define( 'LOGGED_IN_SALT',   '0AV;V+7aU42D{hNx}6jV~1<t0]h.]_Z~ 7!PT2xT4BP^jjY^[$p@$z*;vD7o(FZ2' );
define( 'NONCE_SALT',       'Vji(%1_.W,46`3BV(+(sUt|^ I1+J94yP&LE#^JsF>X#m8;ply/{17XhK 1H|8+T' );

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
