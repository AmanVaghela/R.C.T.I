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
define( 'DB_NAME', 'R.C.T.I' );

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
define( 'AUTH_KEY',         'Nj`Nk/VJnW+q5a*hxl`I(dWQ0/DinTpS(Fl!fkfk}uG&_0<&HUD1 zUYyq,+f|pb' );
define( 'SECURE_AUTH_KEY',  '{f$@CvoJv03~v_<He~J3{MtCG?;jp6K17|sW?M1S8*gN=77l^e!NNutR(4v]iuU)' );
define( 'LOGGED_IN_KEY',    '#oZ~lHUV.oD@VoY%1E>CgPwu1}1%c{r2y,(*7CRHr G@*Gl#qW4T_EM,R(AJ=U7D' );
define( 'NONCE_KEY',        '@t|sU$bx`bF{3hWi|_pWR6,5h^[;6{pRU~`h.w0K~iFW{r7zZ)k4Ac#C,ewq^=ZI' );
define( 'AUTH_SALT',        'Ha(LuY(}Wx&YGbZU)<_99l#Cq}[7ovx3wB$=T0n5LY[hP&6]Y`V9YnOWpwPvi)I_' );
define( 'SECURE_AUTH_SALT', 'z>z3 W4ER<`kEY.QG=h=@Vlh;KteOc]8;(D+9r%e;2&xNLQw:.Z,<oknncrUk |n' );
define( 'LOGGED_IN_SALT',   'K)b8CS8?Pf./JoT?zh3/B0:alBF*f,PR6j~0EM .I{&B3o4@W)b*^FgA`b^4HIp5' );
define( 'NONCE_SALT',       '>/J$H10av0|~=W~r8!4XcmAsB1[}r[je*$yfGvU?cA[Tk:M&VRBP*9Niw2/h6R#[' );

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
