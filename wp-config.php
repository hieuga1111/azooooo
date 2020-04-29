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
define( 'AUTH_KEY',         'K:oBGvEA,T]t1a1wG].jXq>SJAx},pZ76.iu}fkM:b&9{?I1v<u)o/)-ioZN9qBC' );
define( 'SECURE_AUTH_KEY',  's,bNMciYGrSK$;+Pl}xWOntmPHW1#,Jg9Tfl }jADtGr9TF->D?cj{yq&^ua*{x?' );
define( 'LOGGED_IN_KEY',    'XJ7O/MK,`];okx$])|>E?ht)?2>n.kCIe6SH2[~Ol/6q^Zi_^2,r~&9&oRpug HT' );
define( 'NONCE_KEY',        'ep9Ypo5FpjG_cjzQFxhni&+75]V/?j!&;lXMUr%ZQ(!rMOs,0[2.X1jPI1ajw5o,' );
define( 'AUTH_SALT',        '/q>}{`O_5y(NweD WWE%8Z2|Jns)X.!)pQ~A}2]0JZ;u/b?jNC2gZ5j$Bo^Bv=9e' );
define( 'SECURE_AUTH_SALT', '7Yws4 R}Y9z`)bY3*g|!x?6qzWlFB1T`@+)4^=P^3gA Qjr[&DhLs<ki%mZ]r>DX' );
define( 'LOGGED_IN_SALT',   'lWmOnb$d60K-e4~^p0C#q4|qbfgHDE=$SW[c&}SO*-)u_`o>0PAwi4i<,AJK&S`q' );
define( 'NONCE_SALT',       'zL;G,Z*3kQ;0:a`~M,PK;C0Z HN (h%o&^Rwp^Y?6JK19V~w{nLE$72+=. vQpTv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
