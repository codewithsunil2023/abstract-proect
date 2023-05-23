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
define( 'DB_NAME', 'news_magzine' );

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
define( 'AUTH_KEY',         'ABw~3>7WNw_KYSOa%C.8d8EGcVWo!cIcV&b*/e^4vbMN*+]5dk8 hcWSz:CL*FrD' );
define( 'SECURE_AUTH_KEY',  'gZkv?@bga5WTx?X0_[<wo?ov+V!^PJ>Y1#U$x7e7.Pw~zwCmN!#Q<h `#5|wz1xr' );
define( 'LOGGED_IN_KEY',    'O,p!`NvwVn2Jq6j#4YCCH.VV%8YWG.%y22/Go9G)a5b/c[UF)v=%s;z_h58EaTV:' );
define( 'NONCE_KEY',        'm%p]ySB7+/N[a/jGGVNZq1%oVx&(0GL95QaU;;*8m?TZt/qrkp0>I`)m%<ma*|nH' );
define( 'AUTH_SALT',        'l,Q).cgLtEV^M=K%1/m[,&!6Z9l@9k|~.8)5$|gGq-O7jdZ6o@Y4A10(~4QKqpgn' );
define( 'SECURE_AUTH_SALT', 'Iy7D#@EwIeIEfw7w&o)93u-F:tcj)8;w=q,hg::2pZZG&zmx+2nM:*k;m0PTCK=p' );
define( 'LOGGED_IN_SALT',   '..@:@cMO`~DlH-<:Jr_a5Th(<cVQPqy[}vm39a!)6m~ 8zvjy?S7vFS_#OtRd!{o' );
define( 'NONCE_SALT',       ':.;.),2m1.@GSf)=Z9C~/1>B+CzB_JsVMN9fr&%h+n&jq=wJC$_Z5c%X:+.YvLOY' );

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
