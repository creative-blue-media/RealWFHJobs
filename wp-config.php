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
define( 'DB_NAME', 'rwfho' );

/** MySQL database username */
define( 'DB_USER', 'rwfho' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password123!' );

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
define( 'AUTH_KEY',         '*gi@WzfRIZ|PiM7pFNJTyDx$HTMmdRD$Qv%hw%E!0o_@sZF Q{Z_)|uLF+wrS2@o' );
define( 'SECURE_AUTH_KEY',  '8>D )]vx}muC; mn8(:KS=5UWQJEYpLjb-i#k-82Q8aPR7gyEdb$V#,P<Cl$irUg' );
define( 'LOGGED_IN_KEY',    'u[9MzHnBf3};d/4wm4Ir~e:LQ&=gpU^a=.=)lO,jw%$}T@n]9t .:Uu-=<{bUmRx' );
define( 'NONCE_KEY',        '#o6v~bO~Vamu%:VgbuyBpy@=T_B4ri}c~t1xt8Z%Gxgd-tWiJ+Jc+G*#Z|(SR+~;' );
define( 'AUTH_SALT',        '|bb.+QOc<|#mUbv*g ?/M$fVF{)jQ,&F1Wzr,2C`1FM!`*It]^mzCB%Ar<]8W]1^' );
define( 'SECURE_AUTH_SALT', 'ep8jr^@9X?$ 8I*`J6Ml<iqn_%CMI,?@joaYk7.gLVDvi2{7vt|2s|/cV%9<L|g6' );
define( 'LOGGED_IN_SALT',   'IW;;!?v)2Si03N@0[Z!S5/,T3VV)oG7F+.Mq@rp?P1SKaOwp7gqRHEHZsGGiA1@J' );
define( 'NONCE_SALT',       'E5st4nZ93r7a~Gdeqq#(4Zm}-$8bdMgbx4GNrv4]uq#xI>sU<Tv8%H8?ik^fA1AY' );

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
