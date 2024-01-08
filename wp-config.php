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
define( 'DB_NAME', 'u205296280_arktechnologys' );

/** Database username */
define( 'DB_USER', 'u205296280_arktechnologys' );

/** Database password */
define( 'DB_PASSWORD', 'Arktechnologys@123' );

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
define( 'AUTH_KEY',         'X1Z&5i2erd %t=.T&%~,1%aB`Inh5eNipkS7 yo#9GUgS${<m>S|Z<nXL=m :yY,' );
define( 'SECURE_AUTH_KEY',  'M%_He`7d:kt1%!^*b/kox}z)|x&WcNDq3ecH-WaKUu&P8#S&h>ux&_VOnj#bdey&' );
define( 'LOGGED_IN_KEY',    'v;_[Ma)Du+i{#4|1|y_h}Rw;&4@x^h_8OmF4(V|2baO8xN0T)Nd:[Lwk}i1NVs[p' );
define( 'NONCE_KEY',        '`evJXA%<aG-Xl#SFg:?bDA`Y5A7 p)]k3F[,R8tWhlz%&)%>M-.wJOML^@lr/IAe' );
define( 'AUTH_SALT',        'K$0?E SW*+#1gi#%qhv~-UlED(y:tWj!dT/GF: +`[/?WT4*Aw:-YKHCde)]3=*1' );
define( 'SECURE_AUTH_SALT', ')cFre~8zcgNZ!l_Tn<kA;j,Afnj&/xQa)j?KjR*i5aK/l_B7b(AHO~jg/.T>Y _*' );
define( 'LOGGED_IN_SALT',   'v$_PU>-SdwoFEi9X_9[S1xw/WVl}Ck.26f+Bf%[;$<;vTKZ0V5 X`Eo}a7GO={;P' );
define( 'NONCE_SALT',       '<oT@N6jh!Eq,x.E*z`Z`ISYQsq7s?Y~F~fz`[fgU0?Vc(k1Iz*^=5mW~qk[PwgU.' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
