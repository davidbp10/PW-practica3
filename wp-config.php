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
define( 'DB_NAME', 'bd_p2' );

/** Database username */
define( 'DB_USER', 'cursophp' );

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
define( 'AUTH_KEY',         'GDA*znw-MQ- D$4c.)-~USl_<5H-&1RCnee>b_DeK^={[@wyABRlmxt_}`qwvLS_' );
define( 'SECURE_AUTH_KEY',  'Q%/[B&R>Y_Vu[}.y+%C^o(g;Mt/tQF;fw8i<b3E<,;L%E)F$*(fQqmA0^Un<v{?f' );
define( 'LOGGED_IN_KEY',    '~~u;uV6Ku_G*WkG:4p]O3>75aHv}Ow##94hI0reeY&3JK<6#M8@fa;aes&!0UBN=' );
define( 'NONCE_KEY',        '^P:UrrIw{[uc_x]:eOYWE`|C5QE_@Ho4I@W*ykhPV<^NsES104!B@zLO~K7.JjE-' );
define( 'AUTH_SALT',        '@qU6W2{3Ai*3W!0^D0-zpiyXnu)}3o/cLY,@oi&k}qpmohTI;P  ]th?<xpX!zGT' );
define( 'SECURE_AUTH_SALT', '$ANfqMi`W8rh:]6[.j!dkg9*9(nm^,o8;&IL|H82u-65>1Y}2()R:Q%LiCo$RcaX' );
define( 'LOGGED_IN_SALT',   'a%SHa!lUOn2e/VJJPR_yd]VtJJMl)r% ow!N7SYs[V2_XWULQUwQ=K-b`?I?4RyC' );
define( 'NONCE_SALT',       '+6)Oy,Jn>2y( hvk4c[$A-^.KNbr*H|&($<#e8g$t:AZkZB/{z{&=J&APiN~{u]-' );

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
