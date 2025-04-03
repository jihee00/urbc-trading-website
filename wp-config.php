<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'PxSZkDzYWN2ujDJlrRUKGbPNhCvdMFn60klLTxjFtz61bPI8k0qkx6aiyqr8SBCd');
//END Really Simple Security key

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u734872023_urbc' );

/** Database username */
define( 'DB_USER', 'u734872023_urbc' );

/** Database password */
define( 'DB_PASSWORD', 'b+$T[dQ8' );

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
define( 'AUTH_KEY',         '],OKU|eY-D-X/18E_CvVnKQF/483<t/l>Cx0`CTfxnE6+n_(GA]0c3u+.1);cp0[' );
define( 'SECURE_AUTH_KEY',  '%SkHu~moC:/q#?7V:kWk#iIprj7[&9K U~ <f/Qm]IX*}b#kA^($1I6U_@p3)vUP' );
define( 'LOGGED_IN_KEY',    'Z~[b- b+9o4<LK5E/L0|MPGUKjL[s4z_{!@LEr&ul3K1wm,zQ6x7Xu1n<a{ynJkT' );
define( 'NONCE_KEY',        '`,;Nf0vl[wugd3fe0D: !n9_1UR{A9bRXPLX.IMdD{Kr>pFez/&pXdjf#.7_;~vR' );
define( 'AUTH_SALT',        'dxd9yz_qPN,@4Xw9#/j4zioL~Ql^BEMw]ajQme1NHu2.S1pf_F-~v!Brq)1:gCs=' );
define( 'SECURE_AUTH_SALT', 'j`!$,`pKZi)<3E:1@2d45oW0U-*=p1O8bU_w*9P8C1u_U_bw*q1CT*MJP.9x)H2~' );
define( 'LOGGED_IN_SALT',   'H<:Q=&|5.6D<KQn=$qJ{fENKnq lcM6sCqY|kyNr9hhpl0^|UkMLAfC]U^`]>gj+' );
define( 'NONCE_SALT',       'TQg62JMfU#UE[U1lM):1D+=S+tx}p:(tFjh`M>I}<ZG<Xi`u&cvHa2rO4fwbB^tH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
