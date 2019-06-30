<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nexglobal_blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sam572#$' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CjBG#hxm[9Oi[:<fY5lv~UTzO4G1QitDu8xJ4;&mCw}FBm?yYoGEd<7{S2@|I-%l' );
define( 'SECURE_AUTH_KEY',  'K@V _FB@s~nhuhf0DZi><v5*E&=&>uZmFsq(.O,K/> zQd4~CqH$xx&!mS+u&lCn' );
define( 'LOGGED_IN_KEY',    '!MK:Z+=Ei97H7My{>e*ICehh)pRC6PO^8Q{dV!x3aeM1S*8PXal8P->#d;/I~3p>' );
define( 'NONCE_KEY',        '.k#|j{Ff^)!NUHo4?`z+l{2/g(W~7qEyfd:]Zcu0ObBy[@OH5k;c@s=N+lu0gE`L' );
define( 'AUTH_SALT',        'J[vL42>>z:*V:ujCRg` y wydU*<hKU<pn@uc<4D72O~V/}kjLE3`t~r7vLl*^uE' );
define( 'SECURE_AUTH_SALT', 'oTKx[/CsTNP5I:h3;HerKr4g4~SQyo$,OCDrko2<=9|j.,47xkd/7F/tVX9P[7|3' );
define( 'LOGGED_IN_SALT',   'Wk=UD-7[lVs|b]+&9lhiX9I#W]-.a79H)>;,q_%Hw=(^TjKna.TnEA{<49pA@Mdc' );
define( 'NONCE_SALT',       '^Iy-Vy_@Wi-F/`dK8|>zc+l|?Gmfl8d-3Bw`dnbv$.Fm{y7}kzP=9}/iLxnhvUEi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nx_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
