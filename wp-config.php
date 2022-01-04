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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '6WgO.W6mDn%DDM$EaBq#)?NHjQzIy>bWzq_-<+>6zW3T%4x=&<Cg&:h!mZMOAWi`' );
define( 'SECURE_AUTH_KEY',  'ZUMLn]QW,[UR]+wH,f2!{!}oaz=y~%Tl<5FTGq%3vm8,DErm9sk6#l)^Q[.LDU9.' );
define( 'LOGGED_IN_KEY',    '{}cD@d>vgg$M6yg&4Jr.W|>v{#~u/GduAw4 ?n+fkh.>M3LRx#fh*E31SQ#-:qIn' );
define( 'NONCE_KEY',        'U;9}YBSFv&~.JVi#XOqgP+6tV(N(&7.N.pjG--SmaJhL:t2p/dL>Iy+z-k{tc8}l' );
define( 'AUTH_SALT',        'lpF;nIoP(IYpaJi<@P-, +)}djpRrGc?c^A%P<}mg]$v2F.@zTfoDp{a:|>f!W3T' );
define( 'SECURE_AUTH_SALT', 'G[K=^SQ3CQcOk2_/f@{r/kQ.N[9| Kj}>n2Cs!epy!!pUm+^A0WEU<P!x5tj>zFt' );
define( 'LOGGED_IN_SALT',   'nb<{x|2XSrRWZ6yHgP (GM>H_gd(^A98z4@lGMT2&cIa$94sr/=JR:G;<AQ9}|l:' );
define( 'NONCE_SALT',       '`T.gy#W6J(+4Ev(0;`PXzl-OTY)FEzd6hUPx{2sk<fm*3z|+0FV!Ic^8W1/1OPvg' );

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
