<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'company_profile' );

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
define( 'AUTH_KEY',         ' vMAiwGr#u iiMqElstWi+$ai{gPr3f!6k:lSD,_t=S|q`DNfBNhbwDtPuA5Ze.^' );
define( 'SECURE_AUTH_KEY',  'rBc(t_Pt9ewhsXC&mCUHfiVkPjS:D-k;l8mvsxKT<.u2?4=@i)qi?N=JIhozly$ ' );
define( 'LOGGED_IN_KEY',    '/&A|f%ntNPA6GTZ!PF,jZb(ef]/r/YOkZfhgBW[xl~(%^R<,6(_,nItu/kyE}+;^' );
define( 'NONCE_KEY',        '~k,}[a)#;G:,)m/Ji>L3QXzO[g.:m4xW}+e`K:~K^2IKhpS}cA)G/k+eJIWqYTP>' );
define( 'AUTH_SALT',        'fZYke}Nh-)g{e{D:3V~8Fp$9V~y?3*bGw91t5lg_?MNTdO-,%.053ZloZM]]2 r<' );
define( 'SECURE_AUTH_SALT', 'ljX[vWzQ&9pu/Q9uEo6QOkW#RL2!X5pPj]|x@CM?Qf}QUtWmyLW_^YWXRcUliF<V' );
define( 'LOGGED_IN_SALT',   'YzAXjV>2jD8C(d%IvRZ2_uB b{S)>gw 7gikv]AJ-yBg~eKW]r6m/a08IHFXQar6' );
define( 'NONCE_SALT',       '|fPmg3&Epm6I7EgOFI6zY9Rd#cV, LgC8U0`c.|b;l).[y<5jQplA4Sot%EZ$x=r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_omyra_cms';

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
