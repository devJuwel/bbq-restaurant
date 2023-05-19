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
define( 'DB_NAME', 'protfolios' );

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
define( 'AUTH_KEY',         'cNKrnms1`+2i^]}{*;CK)eQ!3&=|SiV%|DtI$CegQEVFUfm{F{(myB)G%$p4AhxN' );
define( 'SECURE_AUTH_KEY',  'OhDl>IXNK7Z2ld5w=y{Gg!?>/[,Gxxtc+&Z:xvZN.z>6E}JQWiWTZ,bL_wy9T&.q' );
define( 'LOGGED_IN_KEY',    'r[:^TfQ!xV`P&};Ok]M)ZOq=U2gsdKI9K3:5y#rqVI$sh905TC&3GTyM]^tHSe@4' );
define( 'NONCE_KEY',        'OW$+f=L8AT}ki%mbzL<i`8ud<^]`aEo_ksWLP{>Tj+qNdV1dlr*;B_MRE$*$3oo/' );
define( 'AUTH_SALT',        ':(A>0~_CE[8ok*YrZd+^{C~{M!.J4g t;x?n2N%6wIJ^@T< eNm:Vs3|>lC1jkvI' );
define( 'SECURE_AUTH_SALT', 'XFNu*f!61~2!-9G,7]M&GJy#.4LPG8Led:8I(!TbQG{&]BME?h/Z5y$OX8l4~5<-' );
define( 'LOGGED_IN_SALT',   'WW0>XLVv%Tt{gv<vc} 3rIbMC:V]w;9fYHQdeqJ(g2cJVUg;RRxhtPksogQ-A:pC' );
define( 'NONCE_SALT',       'YD9qFQkSoV:r:58;0wtmCGwb;tcq!)jkUPS@WaA?8_BK5l1*.t5ILv5:Lr!dD[V~' );

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
