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
define( 'AUTH_KEY',         'DsQ+Y|&xT(Mtwy?JtD@8Gn]}P}Ch&oTjo?InRnYL&G m]iM HV^[0?JYdF`!nM#Y' );
define( 'SECURE_AUTH_KEY',  '_!K`*:$;V(I!f#r<VhZux_K!0d-BCCI`Qp~@9soz|ZDq<Ypj5n[C)XSx)^&Qj;GI' );
define( 'LOGGED_IN_KEY',    'y}sl`V%=r|pIptx]Ex/S(btg|^hn_3{1~wV{EN9,@_f%l<l{/[&6sIp+=5J}@O0R' );
define( 'NONCE_KEY',        ';`N}or{RplT?l7k.$eA5eB#ZQ}W?k{o?pVm456`M8qV+VfiVVay,2_&-Mnm%No`P' );
define( 'AUTH_SALT',        '<eTdh)H)monda]Ng:#$5QuM<Q9dQ~fs]svwa!LtdXQS-)Zcj)3j,b/=W;ufe_h^}' );
define( 'SECURE_AUTH_SALT', 'K)R<>>]@qqZLml7gErxvsfZ=U[5#|%L.T`p5zA2U[ARzj-;6bK6m(@9oyC:O/O9*' );
define( 'LOGGED_IN_SALT',   'FTPk:g?x<Vg_&N#?mj<2OfsgZkl3vJI>&#sFizv7k;)2T{nyHy*B{tS^3[A?P;T.' );
define( 'NONCE_SALT',       'R^)zYsv>d_ |C,ZcBmq{UFN10?b Csk~,I/)9B#o*KpDCP_.zB{I!]SYatKRvsB)' );

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
