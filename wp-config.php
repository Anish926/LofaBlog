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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         't@*d9a^t{+f&Ts#aT6>i$hcd)@5Z*nTH(BK@Nh^>@~}yxjEe658$RqkMulbiA0Co' );
define( 'SECURE_AUTH_KEY',  'hd`u!I*RhlwjX8ooso~]q2pXLVI~JT50MR3.I/@UlJ$kwrqmjNTb$uAE*iHd4,S`' );
define( 'LOGGED_IN_KEY',    'T4  r5BeK`hX/|ZPxt}sQzE!Y[Sotu5+D6zs;zL=6v{f&~V=~N}zsC7t|5P)BfVp' );
define( 'NONCE_KEY',        '}yyB?!})+tn)PM?`cW@q<=>^Z*[a}~(z4 .@,*_i?wp?wsASI)U3`+)t/rx52J15' );
define( 'AUTH_SALT',        '[d7B<|b@Uaa7VeMULt]a^C Ob:ZOmv%$v)EUhW`%)}v9faM;w+,MvOi:3.RkiTIy' );
define( 'SECURE_AUTH_SALT', '0od<M@x,6&!6>W*-]$v6j>N_I*I%w|yt#],}TrdKx6Y#;^F2h/mx>/zDYv 42*MO' );
define( 'LOGGED_IN_SALT',   'x%.Y{5;hDI >ZRMj7{X_G);N.m?Qh0Tae7(6L=(uX[IiF&ng*Qn|S3z+,&m5SKO_' );
define( 'NONCE_SALT',       'NDvcLMoAO9TJsMH;a$Ff%X2%O-^0(2ctqb`nFpn1i(Y7At7 q%I3-6 cX]K#p4cH' );

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
