<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u356820833_NfaCC' );
/** Database username */
define( 'DB_USER', 'u356820833_TptCR' );
/** Database password */
define( 'DB_PASSWORD', 'q0nUGIqFJw' );
/** Database hostname */
define( 'DB_HOST', 'mysql' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',          '+9f-&mC5A{NXh=VdRYOKix`Bwrm%upFmrZPxJ;(9jm6Z,&[a#j[ZERJ#yOzw4r~6' );
define( 'SECURE_AUTH_KEY',   '0f&a9VZ<fOzXFpBr?X$`_i0YdKV;vMq |;H@;Jzj9ut}3ZIFdN+2^eI<@+t*yhWQ' );
define( 'LOGGED_IN_KEY',     '.^ZKb5B.[![9v%];UQT;%}7n$}u|M?H>^?#ie`;hC%?|{z/g()3Y~O&(LW6l0%Bx' );
define( 'NONCE_KEY',         '2GPFLCOz)a<8ycLk~G{I~W^X%=fv]haeKe]?o}C=~K%rXfA{Q[a2r&1KP_@)&C7q' );
define( 'AUTH_SALT',         'L}2WMOjES,Yxap9^5pfZ+?!GyiFX|2OesFws}hU+H~,1T1:8$=tJ-P:v-]8-p:]e' );
define( 'SECURE_AUTH_SALT',  '%7Kv+3NpmF6N9Lem5:ie?-IWr!m[O|$#5`s*lR`xeqnvs=MI2{FNj^csPePSjE0M' );
define( 'LOGGED_IN_SALT',    'lA9I]8Yy<0BB/!I0$b1`mA81X..]_MSA3;+i,jjXoF/Fx!B>40|DB}sdeS|fcz%N' );
define( 'NONCE_SALT',        'C2bH+`afZ3W=oX%NVIMjxs7<7JPWX5hK6 `FU0~!Q{B#RU/.0`i,:#]`Ie`a1H:u' );
define( 'WP_CACHE_KEY_SALT', 'd8!A5%~mnJyQ;:LeK*~Ut/Kz4UBk~H:tf.2L9*8=T8~~4@|egMHSB[T/)]$_I:63' );
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
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';