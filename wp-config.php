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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'consultasterapeuticas' );

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
define( 'AUTH_KEY',         '&8-M${;r6R=t/PJF:/GwibA,@~H(yd~gO9MH=nz_n#[`vM/TH?+P%ulx.%OIFk4[' );
define( 'SECURE_AUTH_KEY',  'xoKme wv7[L?oV{rIYz~ilVVxw^5t`+HP_d^ihn:1c{o2`0 =l&y}5hxp;X`sZ3 ' );
define( 'LOGGED_IN_KEY',    'piv.GU.ziX@!v2X5|`lPzr^qVW@o2(VyiB)2t^ 5aZl&dPV+_<k,m+Q,ts[JNZy2' );
define( 'NONCE_KEY',        'B_oxI68[ZpyKd=Ubzdp;xUGrcun9nCyVDz(Vlua,:H}UqKB#C.H(Ha12@hZEc+;.' );
define( 'AUTH_SALT',        'f}s51pl*h.x/}.!SV4|!q8(,{P/#L#jmVei_9>$05Qh8;Wh~` 8Tq,m|[m^?(R8$' );
define( 'SECURE_AUTH_SALT', 'DH[8OU`TYkR&^0&LArN,FH)Q~7pNfl.VW:foH`YS.%xZzHp|H1K`M64=s`[S6Udq' );
define( 'LOGGED_IN_SALT',   'L#M9I3g,Swt!5<`N`A`KI^nZbz_LHkZu*AY(,ieZP@;>b|2N|BYf0~&HiF-/jX2H' );
define( 'NONCE_SALT',       'O,opDd&FK|r4{U,$k5Ctb%iviinM8~tXfyb%:{(B{y%2+KPdOh|l|8o}^4?TD[fd' );

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
