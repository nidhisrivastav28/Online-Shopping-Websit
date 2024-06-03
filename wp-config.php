<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '%ydo&9`1j=@9Hg).EM0Tz+R SMO/44},n|tYFBco0)X9pm/4om0dOh#g2z(fSslO' );
define( 'SECURE_AUTH_KEY',  'OYsS7T:N!Zx{^%A>z$*r@.^n4d+2?RDwF6#!<9rs)*@TG>=Nw#+Uvr6l(^P+Q`6s' );
define( 'LOGGED_IN_KEY',    '?_ZWq,Y!eqzs&2;}P?wuqwYGn=%< yj3Gc40[*)c#GFm8{EKH~w<t/M~szGpJ6pE' );
define( 'NONCE_KEY',        '!5*pz5|?YXj-lYc5A9qRW]o:oM)Q2=zJcv>hH#iBJ=f#5kITx@=3uW327uP^m]N2' );
define( 'AUTH_SALT',        '#W!t2#(rn_6?;6o%%qKSeet5S@SuhhTms7x5>!F<.d<**3+Yqi,/L_sITB$Iedz;' );
define( 'SECURE_AUTH_SALT', '<8~#3YakF:1S&NL()FcC}gOD^npA8G<i*[cpv9|F5J4Z7srV4QV>sY~8l!l{IJ,{' );
define( 'LOGGED_IN_SALT',   'c<sIb$cw.Ld#l8;u1M+z@qs) dKd?Fk:?#$8`|vEpzC`Bi}L1fi`P4R/q V.}wmN' );
define( 'NONCE_SALT',       'pZU*Vn*v:X{Xk16NmVV>H+Y4!k=dEdCL#(dISB4LLP?oE-e]Q67W| E4wu8WBk$0' );

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
