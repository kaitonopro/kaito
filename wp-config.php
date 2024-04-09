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
define( 'DB_NAME', "vit" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'gW9qU9*0?nOwDwvi;Ie|ex-AO b7xmVCZg75($0BTo3=-4_nWP&)4&w*+ED89n:y' );
define( 'SECURE_AUTH_KEY',  '.?Q.g)1z6x2Lqv)T~96STF&A>K^<8:ByEEgWj_TCSh$o|5ourEm$ h3^l+|NY%rY' );
define( 'LOGGED_IN_KEY',    'Y[KYhDHj|b5;a<&AO<R<Qy~/v`{az[/LcJ$L9p+A|:aqzp^tO`do5oc>05WGPm^>' );
define( 'NONCE_KEY',        'bnCbqT*e&~F+b[*PDwXSvJJKKvi6Z1$B%7{A0v*YGZWv(~b1Pbkg2;9z`/[x}yzU' );
define( 'AUTH_SALT',        'kl)}J/3ZEDWcG)u!T7[CkbE;dJ:Rz0pB8r/mBwIRgdy@_dF9^,%&T(udt`c_{%Rg' );
define( 'SECURE_AUTH_SALT', 'MSDv[e/$%AOT|J9U,J(`qj&G$X%[.zqAdN%50fnI:{dM@]5a4&OYL@2[@^^U:)|N' );
define( 'LOGGED_IN_SALT',   ';`=t[pp(6fP)pbbrA}B1M.{bkPyw[O${a*A,r:hSl(_J4F:UT.<|xAqH$vf;8=`C' );
define( 'NONCE_SALT',       'us:M9xOexFRIcrllfjPE(X~GO_<4C[k+*PgG+)u[DNsF520oD=Tlwnc)eY;B@;q.' );

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
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
