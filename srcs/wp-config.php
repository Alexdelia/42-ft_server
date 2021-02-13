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
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         '4Oq/4qW<|_#C>Z9+q*}NG|wWio`hrC`/rC83|6ZDHpZSNgf5bB@R-#WU :WsH%6u');
define('SECURE_AUTH_KEY',  'm$*1+Ta-p9Z9E6v@g/%:NGR|7_kb:NK&,S~UF3(rU]odrve+0`*aaT4VNQ|B:U2q');
define('LOGGED_IN_KEY',    'W)8V-Kl}B>gj(|mJTy2{=-+kP:l+S,=|vol> Ss&%3$>-Ra^ /?~1RHI`?!+df3&');
define('NONCE_KEY',        '^v_tL}RV9*mE(/{O9J71ESn*[m(DxEE5bqM88upBa|c}g2EdQjZNvZzr>,bVN@RH');
define('AUTH_SALT',        '2${ XjpydG)Ori*#yi_jw{P#L>`2mE)T{ ~uQj{nz)fuf5YUS$JqJ2K$-eQZ8RNy');
define('SECURE_AUTH_SALT', '!JEpR[d:kL`|D:o*@j}I|N^cPBlV|og+Xj8[TkhG]E]/CTI;zehwH==)F#|b&<$6');
define('LOGGED_IN_SALT',   '-,-_:@l]z7Xga0r~D{R>-Pg:P|Yz0$h-DULg||;Kfy2/SS}Sh&0:.An,F*;FgL-|');
define('NONCE_SALT',       'a!|G<@WE=Hvj+ZO_+TW+v`.9-Dz_V:u.F}-D<O,u#lty2blav(Y&n#`xtC(3#c8i');

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
