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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '~Yj@aP62R%h+Z/srXM:TzQ9Hbn(M}l8!$T5bnEPda!a5CibdpAN_Ab2Em[!sw>rP' );
define( 'SECURE_AUTH_KEY',  'p#PJW7hIy9M@gceivHe&h3[du@]Kv-[VL0|b2nsoeh.XK7Gjt6lqH5^>> m$GXpI' );
define( 'LOGGED_IN_KEY',    'GI$=TSK}PFQv0:w7phm@}I56jXq@Hc{f8`QTjE;WIaN_Jc3AtWZ&Lw=B}%p hP8.' );
define( 'NONCE_KEY',        '`2TmE#gN5:3Ek=:U^dG[n}hi/iz0`>JbqH=(n4_@/Xg<W0/?UTI NrA>Hd/+m&na' );
define( 'AUTH_SALT',        '?4I82YJ)O@O-Y$TC*t%-?Lzi38-`T~CMIQ>e@K!0d,p)NiewTadESw9tVW<6`Bnc' );
define( 'SECURE_AUTH_SALT', 'd8+m)E?y(NNP8O/,ypAvo_d*cLM>@uoSt;t+_(%/`pk?/9W9[-k>Sm`RO bmBX;U' );
define( 'LOGGED_IN_SALT',   'iyFp:hY!bUwk&V(Octg~| Ks@g.PtN;Teh)2BYXTc{MyAu|cUH+Kg_/L~agri0;w' );
define( 'NONCE_SALT',       ';[`4F`8Mkbxr`eBU]BD5>f8K72y2$#CPi0EifDgxh9+$=|{x/O=#fLtNBC&/|JY/' );

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
