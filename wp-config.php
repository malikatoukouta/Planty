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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'uyoF`53,  +lU]k=pU-Kw&d>R=/qn:w^JzOhMp5#dwL*nk)uyR,PwW~d<B9`+#7L' );
define( 'SECURE_AUTH_KEY',  'Za}kU,v~Kc2k=Y;*(c7S#y*np_^2sZ|PAKhD8&YWI1}~n~V{}]#y!u&$CugFKczK' );
define( 'LOGGED_IN_KEY',    'RY0uZ7Am_7nqu_Rx>eHsO*S8<rIp%a~bET&?C|u9ka,IxXTM+Z}Cl 79Sz8/m&+k' );
define( 'NONCE_KEY',        ';c#rtWLPR/5&4p*;,Rg5SSl8~SV,YA^6c%%doy%~<GaK~J4odkI?[d^QR)rh(~zX' );
define( 'AUTH_SALT',        'jdoiNaP*J;ZXSw9}l@f7f+KY,PVcJ(|NbrohScaj7ceY[lD?D$qu,IL8qW{5<2vb' );
define( 'SECURE_AUTH_SALT', '8dCy&K2jt1ebCMwtryU:lNV<M}-![~Hez;/s[,lpCdgCjz,Pv*=).;}petxSt@N%' );
define( 'LOGGED_IN_SALT',   '}2=[t}$SkY{I(G_z ),ud]<t$=,.{JrtX~}z7hYlJXs^,_cH4_2DMl9L+jV_;QDn' );
define( 'NONCE_SALT',       'zC,>rnLb!I@+8/M%m13>sCRj+>PTrODacTQx*=@<5[ZcGWEK3I<6.aiXY_b]0qr#' );

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
