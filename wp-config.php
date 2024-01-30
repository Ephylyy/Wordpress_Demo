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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'K&4]gAiF3$OuS!C/$GVN.(gFfD8dnR#Zi.dwiI)^52T<$bgfEWd8W)b#I_~;B-2;' );
define( 'SECURE_AUTH_KEY',  '^:Sn;w<N>^Er2>aavr*tD7P_&Alqh>HV^5t~pU[P~]3:b[.H.}mEJLH6KM)1>SWI' );
define( 'LOGGED_IN_KEY',    '_II>_RMCg|g;6h!KFkPOs<e=@Rv(VD?=7iJ)S}HUGRvmkdXrh%+/*Iy{iRon4I*y' );
define( 'NONCE_KEY',        'E=Yzl#2?jxWDTa.i^gvm|ARqv_NGtOgZC6N<Sa_)5ArPy_PQO}hsvi&,nN6]h}!g' );
define( 'AUTH_SALT',        'WOyyq,:pcy<f5*H0N7xCe(qVCxjNm@5u=~JW3Q:Df.QqR_Th`<]B|TbEf($T*,&-' );
define( 'SECURE_AUTH_SALT', 'lE>K;YE?CaUI-+Kb-q5k[WPu-bOMDz(j)=ps6u,V:cn3! KT6S.f]Xp8`D[LGWU&' );
define( 'LOGGED_IN_SALT',   'Vg@ %^+ZPvT#dc^vriQ|3T-RY-@6AJx!H~=]aCMzu[!;[s9K8fmz0&v8j#;c[:MW' );
define( 'NONCE_SALT',       '5DWaq;bbM^w]d}nqZ}}HlWpIb^vl@%q$U5H^VLvsg 4dPI$I_%-P;(J:dboANF@n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'demo';

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
