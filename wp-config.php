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
define( 'DB_NAME', 'autogrowtest' );

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
define( 'AUTH_KEY',         'w&Q##OE2/5SIVCw_rpJA@M`8|c19wrvQQC]xYFzt%dXmNdz8%&$=>S%J.}_NMIky' );
define( 'SECURE_AUTH_KEY',  '!6}Pji=b7%9PPy8=M5CPPIFA3QDadzZ?>mvRasLKGbem>P,ZO/@sv-BgiUX+G):6' );
define( 'LOGGED_IN_KEY',    '0es(56p^eME/-WA!e/(Vr7.{0un*7$7k2K$@-G.XC|Pcr4]XBJtp1:IajZ^Q+E|m' );
define( 'NONCE_KEY',        'DX-B@<-E%x}((n~br9q*2v;;?lI/W?X*vM9IOhz_^&e0wSD-]#vc%G+6)4u6*}jf' );
define( 'AUTH_SALT',        'dO/j6OI6ud>/7cO0Ny19jh5rm9jYW}|MfH`WV$:xUXn&~xKlYENKHHu=/^Aofx_}' );
define( 'SECURE_AUTH_SALT', ']-h)#}0xRx9;XlJ](kWX UnvfqG!K@L[Sh* wI_(m7}KZkJHaMr|`bf;srYu ^R?' );
define( 'LOGGED_IN_SALT',   ';d,Ni2WsWEcyn4flkzfqK!x]i{T1x>_I{SZdUxtN3DQBujV(o_S)^0h~8crj=jV7' );
define( 'NONCE_SALT',       '27}fdXZR^DCPH)+7}8V^uk3OAxC~c1hF&</C|ve2@2Hu0M0wFzBdvQd5jN6Nh!OT' );

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
