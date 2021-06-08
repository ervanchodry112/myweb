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
define( 'DB_NAME', 'belajarwordpress_db' );

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
define( 'AUTH_KEY',         'v=PS-5D~_NI7:c {[guV1>vAYNbz/S3)D2=(@}5-j+eBeq.VZ9r;t`N>u}e9FYS1' );
define( 'SECURE_AUTH_KEY',  '73t8{s@?ob%n6mb%RSYEPu*{K~l+RzWwhJ83esf}Df[cmRM 2o*(B>]OYyeDX>F)' );
define( 'LOGGED_IN_KEY',    '#`_|[w5k:4~&_oXRbL/KsOBx19~Pi*S4@NC(@FPEyf@MS. Ri3Yn12)6 BO#7dF2' );
define( 'NONCE_KEY',        'Bqz$A~=*1Bzu2S92Ea/<L7As:2.qSb,b9$-t_nES{^*]uOy,ymwa@0Hn7:1(W,0,' );
define( 'AUTH_SALT',        'R3LF;9vT=8}kiGFA>A<oq^O2o8EFfiJT>I#$#C1+A]{f>St7$g.Ob)+|=Y03pCtH' );
define( 'SECURE_AUTH_SALT', 'Jt2-r)T<E8y.1(Neq<FuM^XP|*|?1[omE`_bpIJg[X+1PX&:Pp7csuKO+[!<2Mq4' );
define( 'LOGGED_IN_SALT',   'h%-YC[S8?U z.bTa@f&t4fLpW~B6zY>sX]O2<kEEy3F>}s8mJ-tPdLtX2,#hJH|N' );
define( 'NONCE_SALT',       'k(ZJ~sV@womK]:Wvf!}_If.IZDcs4~wCo~7kqe4LC=9.M9zI7 qmVh:Ci7NlT4D0' );

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
