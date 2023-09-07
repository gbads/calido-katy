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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'calido-katy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         '+=_=;]qUOPyy+rFWT<AXcFU%C1j_C*s.R]Jnpxkoa,I5PZ})AR*p?;#X:e}nJ;g4');
define('SECURE_AUTH_KEY',  'J:rB,k&v98AccqF 29+]%$aM[pQp8U{qi+$_Oo#5|d?cH/V/80?YP7.RB[~EOh<+');
define('LOGGED_IN_KEY',    '*jhId#UEX`o0F@A6sN33#2cZ@NO?3)o[#F:+BZP-(M;%/7CYZF*diNh^+-|+jYSX');
define('NONCE_KEY',        '+?mBdE&PmG<+bB)xU?&PcEG@qB_l;9xe]E+@Y{ s8+Vf2EdW;)G[01|gcpan)M82');
define('AUTH_SALT',        'ZGGnE+=x1b4UgXZ+8xmgzZH5&^>aH~pn%x#Ll|T{89Ou)4(exsqld]  i-[ln&v&');
define('SECURE_AUTH_SALT', '-PIndSL2)}FZ.vv`=-O,Qa3iadEOZ~v#`0OvQKRK6s$u.ZJ:CN8C--KWly_G&pt(');
define('LOGGED_IN_SALT',   '# 8)$E&ikR>xHoydk.Q6yn*3XRg^|9#O?`5t{L@/h$e#vodRJ%qq R%8e<z|!evE');
define('NONCE_SALT',       '!p<eIze08#*rD!Rl^=k(3.{{C}J7uXV9)xW?<5f{.m*t,=~4k,8uisPABDlN-87w');
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
