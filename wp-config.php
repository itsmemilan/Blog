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
define( 'AUTH_KEY',         '|Mmf,>:PCHkrLL-O:#fR^=9Yw?!HGw#NuTE}d[`U!+1?[maYr]p1EZ7nXa;<y#fc' );
define( 'SECURE_AUTH_KEY',  'Cr@H6W!vx:z=o:!pVz*&*6,Ts}`]8[*eW]19zY[AwlwqAgu{N/,8ySAz,Ln^R~IU' );
define( 'LOGGED_IN_KEY',    'ToW`H0#*nfEODt)3K!)nDf_4z?DT}4}p] pAp:1ZuxHGj?byf? crI9&S{Y;Csa&' );
define( 'NONCE_KEY',        'ptHvSo?/h,uA4gLnZ?n8a>J=pY!MeuMrEh%:C1>)UL1jtL6,9HXiQ`jATBy(=7(4' );
define( 'AUTH_SALT',        'Ro8.#2cW*}U=btt]gcY?&+!7HCr!vU@m#I^9NhV!d2JpdqM;xAUwVY46rID?Nlx;' );
define( 'SECURE_AUTH_SALT', '9G^~Gia$l<aK/gORA*6::qx:Z(wJxMdHCmc!J?MwhPik)9@(F~;58bxKYaoX|,hd' );
define( 'LOGGED_IN_SALT',   ';<qAl]D1Rm3F%5jy`phFn PpdzTA@iowP^wIr]AT{SAPM.6OoE 4WLW~P-b1bGgb' );
define( 'NONCE_SALT',       'z!L^Lh3E#Y|)#HNn>tL6$mjw2D5vwdk_aJv}rsN14[4mE13yh.}i25;v2|cGaoo&' );

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
