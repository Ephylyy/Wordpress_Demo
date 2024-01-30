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
define( 'AUTH_KEY',         '@^!FpA6KOTl}UDw7khp ZK2jAG `DsT]xw3B|:)]GY;+~TM M;pE@kZQCsCoj_Ea' );
define( 'SECURE_AUTH_KEY',  '/rIGO2E7uW:9{%oJAT})F/:GgZSTzmDo/S1}l;Fa,=<ja4n+*p&s/I)12LKL-g%u' );
define( 'LOGGED_IN_KEY',    ']}z={uc}HGasuz^ 5R+fGlao%|4A9&pHz4(h&+Fo4X>oW`,}Z<C$%@)56U[2V!.P' );
define( 'NONCE_KEY',        '+A){JKh;!l.hCS(p?3|.EN+n2;9y)rOS;yNM/)t0B;Dqp-.rRHL.I5(8VcF^:KlH' );
define( 'AUTH_SALT',        ')7-TvTj04_rv:vQxad9MzP.wk7;Z5Bwf&.b$]vYh2S_%;tlCHTOU]pd8^z+RBOpK' );
define( 'SECURE_AUTH_SALT', 'MfS`nQ1~)dvVAjsET6|2$[R>[v@<abrpAJ,vC9l[GV6Ju#Q~0=IuqqEeLNI0QmiW' );
define( 'LOGGED_IN_SALT',   'O@k0AwN=#]M&4^!Y*>E&8=W#VCCqgipDeU^R:BxrF2;WF:/bAydxI|W/ZpJ&P|x/' );
define( 'NONCE_SALT',       '|<YHozJ+fmP p,2Dep}xo5L?+--hJ|xQ62Vh4PAft:<&qq!XI4BXf2#HrBPRv@>;' );

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
