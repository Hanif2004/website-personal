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
define( 'DB_NAME', 'hanif' );

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
define( 'AUTH_KEY',         '%XKi)VZ}$Il]ckE,zoR#>+%u*OqlD$3{%jKxzELeWsr(}A?>f$*?=T|u):LmQFJn' );
define( 'SECURE_AUTH_KEY',  'Yw)PP.{+7CZEJ!=/yXqjVHzDSrV-ugs[G^urGEoYN,ucYX(J-|7`8OB0~z^AkIK|' );
define( 'LOGGED_IN_KEY',    'e:ka+&wXX+o3p|PT6M7qet`wz-iNzE6dS0h~iITi}w5;8`XNVFE@h9$[-G}w:)0~' );
define( 'NONCE_KEY',        '$m#^Z (vmwSpE-N`t9/`<X^84kw|]6`*43:gCb%iJKZJm;Ua2L.iHH5>mj2i2yrD' );
define( 'AUTH_SALT',        'bKEJu7a.XVFZhd0EhbNNP(88fIih@`tm&YXdc^A.O,9]zzg1)=h bhU$.|4IXLL.' );
define( 'SECURE_AUTH_SALT', ']xNKy%4@L`0>yU}::`Zbenqr,zowZ3GhZsn<tGC%z-7Uv&]$eNvBW#X<bZ#G-~#D' );
define( 'LOGGED_IN_SALT',   'aILbW~)mPMc]?!KH)#+s`Li(N$R<xZ=,$ZNbf%mIp~;eril!/8C4P#2f%;1=hT}H' );
define( 'NONCE_SALT',       'Y/Qrb8c~0&PidX<S!{k)l%:UpCE.}wiZFCAWRQ(x;&:k..oLaMNX}`p?0-WJ4/bw' );

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
