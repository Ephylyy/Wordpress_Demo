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
define( 'AUTH_KEY',         'nvm:o$~F-KZL`/J%sytIaj4#Fmw?sCVT$e=YpiF7Kmp$-/&r%wbHXFi1_/Nc:)]x' );
define( 'SECURE_AUTH_KEY',  'EG(Ka8*rds~i[A0|`8)eRqSB qo?LU!0_hP$=2P@:wWLX^H_p2c,H~x{|%-5vBdt' );
define( 'LOGGED_IN_KEY',    'V$Mj5W|p0tKE5Hm+Vsf^BQq~0kQ)!!X~wRkCU7-1#rq |G0ki48# .=gs!O9Ity3' );
define( 'NONCE_KEY',        'wohrcBBE!ksJz<^^%pYx$&-2aB?,2_jJKj{P8UNzQeanVIRtY1o`.$1,!f`g1W!E' );
define( 'AUTH_SALT',        'fSwUNXiKG_rIXi78di%Ic(*M!Za=gXxuVNX)yBc%5*s}xWWGArvU8l!D>0dT6-.J' );
define( 'SECURE_AUTH_SALT', ':sGw,GH!L{VcfI44*Nc;xB|ov%:sHTn8JLsK)V3u)?:bmAM,K6I$lmJN93nLw:F;' );
define( 'LOGGED_IN_SALT',   '`vYgZ{MV3Nk&ZDx]{+uaGOkKl1L[ouj7]6g0vZko7wF GsH4jf]I/H8V*=.Yaj38' );
define( 'NONCE_SALT',       '>[G&KTpmk,wW,xG^c3iweL+xV(u~)<vx5=^~p_DYyk8o{a1R4ja+~#0;I(S?s.eh' );

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
