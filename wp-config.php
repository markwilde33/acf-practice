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
define( 'DB_NAME', 'acf-practice' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'q|TeQ[s|>Bd_q~W~&K:JhDiI (C.Z2zN-m[ [q0BLdW}h0M$ei/^tb8pfmKU3gPq' );
define( 'SECURE_AUTH_KEY',  'hQ1bf<!@>`MYf0YGPv<Ig-J/(O1C]TWF#YX0Z&~-]8wj?kL[%DLy:Oq<NCsj$[rz' );
define( 'LOGGED_IN_KEY',    '>pk2`/UjGdVRm!3rb/^@:TA]?CPYmB}JnJ.NHX(X|39QRE<t?k1!.NMTAt_yIkw/' );
define( 'NONCE_KEY',        'F}~+JU|!du|*oc&5 ]IZofNO4 FynL{&`1ZAhPuM}vZT`K&zg+7*t0S*%R}=aa&:' );
define( 'AUTH_SALT',        '^P<vurY2;+mMGBYOCS-k|GzL<VKKa_:D/d{jE%3x4)6%u7uti)f{$/HzX2C%Q2,|' );
define( 'SECURE_AUTH_SALT', 'IP5Uwj1w2&-J*!ifb:H^th:hGr<z5;@+!$%T/x2(~dI%rN:$qiCbT3 UsU[_bI,Z' );
define( 'LOGGED_IN_SALT',   'iW=AnPdc9{&z?N2508tzx!K~0^r~(>5dsADx2+F?mYh5>hbC2ZNiy 5;LVo3S=<_' );
define( 'NONCE_SALT',       'NAY*6|w5ZPcqKzCRZSX#d>:-SQJ+rcTUD]I)1;1#]/7LRE87*fk$FKFhoF3zzF^%' );

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
