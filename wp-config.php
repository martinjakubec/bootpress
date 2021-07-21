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
define( 'DB_NAME', 'bootpress' );

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
define( 'AUTH_KEY',         '%Tehu|E2v7as:s)sSir6%dzK.oT+le8g TyMcgc:w FU=[e?!B==o-=#?jq<LM7H' );
define( 'SECURE_AUTH_KEY',  'iP1dTQXFg{NeFo)7a=T:% R_WBk`}py^EA6HAvX2tY,3t}jFmfN|hxCJ=^p]%R/D' );
define( 'LOGGED_IN_KEY',    '&f6RWx5z0(QZYj#C7w9n25`!rcp2lnQaxx=XiW]!]k)!cRND3VSu0DZUh.kBdqnd' );
define( 'NONCE_KEY',        '>SV~Qr8Ut+R+vvLHr>x,yI$V?tm7{P>eo||?$XyTVDc3K{l[Dmj1kXNgHt1dAAt[' );
define( 'AUTH_SALT',        'WP{Nld[_AB>!J7eOF+JrYS~8nsQgsq:t_*2hT;)WbC/%m)#K%a#oE9`]a_2BaXf[' );
define( 'SECURE_AUTH_SALT', 'Z9d#[o?&{J{ELfWF*NubGzlcFeZ!j.Fjkw8ldEb:cg_xlRMLUsLwJ#a[~.JAR7-Q' );
define( 'LOGGED_IN_SALT',   'DZ%$eJ^-W))uG4-@5z,Fge_q9jVwWo%WdE`Ea(Ppo:l6ghRzgc^EN)R5=`1~9[$H' );
define( 'NONCE_SALT',       '&>U=t$7*D^8zM0%UeB%VN,AP`|(u/y1b13SX$8BwBywhUWs5( |R=ft9X= Va[R~' );

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
