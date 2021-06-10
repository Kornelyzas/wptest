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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         '{i@%@@dN;2klUc3I7}E._4FDojsGE<m;dtWe5e8vM124IX=/%ec~#kjh*h?R9kT,' );
define( 'SECURE_AUTH_KEY',  '%is!]+c+fAeTg)}osD2j,$KHogGm:~sL$fAGxEiiy$l`]eRJ$;ARlq>E~emy,tx$' );
define( 'LOGGED_IN_KEY',    ';YT67hTF0fThpy//1Ls`Ox3u_gHd>^Wx*^[KDlDk^7V @[xq@fzs :[5i66+/^L~' );
define( 'NONCE_KEY',        'd0D&X-$/1Ln`8{VHwQ7gIDhomSFgxxGFwl%61GxF[se `1 ?> ,Rcr!8;QRyo~P|' );
define( 'AUTH_SALT',        ')ftbGl@)A%v8~PMn<lSnV5&eAKR59Hfk,uv+Z#W&4pG+8P@>]Fyx|1oFl0lF|_:z' );
define( 'SECURE_AUTH_SALT', 'BT{ig:afZGrE1=kCr7.c/=tm>AzJ`^._C}gR@K@=RajMB/EJn[**cf W33njg[pd' );
define( 'LOGGED_IN_SALT',   'F(.Q>a+HNLnLp0`p?8GQiR3YdvYq%1KY>+|vLmm]Vt?ptY.]I-MGb>jo],4P9A33' );
define( 'NONCE_SALT',       'fTydbF3M~[a;U0k]r m`x]g2 e8F-<?LfL@yy-5(:<qAl^Y|LVnW,ccR>~G>`D7/' );

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
