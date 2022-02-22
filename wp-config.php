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
define('FS_METHOD','direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assignmentone' );

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
define( 'AUTH_KEY',         'K?[?~MX;V1~uftls#u&(bT5j`XEX1eDdcLh:7!X3u##LvCpOvfaFMK+Dh)C4tWwL' );
define( 'SECURE_AUTH_KEY',  '+:U>}PGsgf[=ebhVlVi1H6hD_jpu*9mR L^Lt-T?Syfjw,MCtvbHw^1+ps4r-D2]' );
define( 'LOGGED_IN_KEY',    ')[<H3:`kRQJ{?~uDT[>Emm+Adf=uHC>&`Ez@*+5:sL<#|fx!1yHRk<DZ16W+8~d7' );
define( 'NONCE_KEY',        'L0ca]$R2+H<15Z,GT+AkZ**q+u%:5$3F1+u}L{c5W?3>bfi R7C7j[LcU!KpQ)|t' );
define( 'AUTH_SALT',        'g,v ofY!MLeT.C ^&E4UHmBFJQ[u(8fu!aq#[Uu63uq95&#I{a`fDM+_q^tsuA-}' );
define( 'SECURE_AUTH_SALT', 'D.<~u~4P?AnEap(x[>DutK53^xY@|b,:gNXH([H)e-y]iTcG9,otNjoAG,*|Z&dA' );
define( 'LOGGED_IN_SALT',   'm2o2:q|$cc+VlsnU:3 #o*~3a}KHnAvq;aqM8=H|fr !.ME;=Ta)Lpr%h(5H*).=' );
define( 'NONCE_SALT',       'Ln`@)8BTHW7^N  z4#soJHi%8}xs(gy46ODvd;Bk),}t(~42c]]i=C1]ocp#N/t2' );

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
