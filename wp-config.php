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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywebsite_db' );

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
define( 'AUTH_KEY',         'k3PN::mg0hlK6@4RNouX`_NsIla/f59w=c#];p&X,OP.FkjecSNupvrV6{:^|,1E' );
define( 'SECURE_AUTH_KEY',  '-Vp~FuDU~s? tR[4:IO.g-l{P`8mA-:hmP1im=bKIn~RmA&ueuWX0>;&]BHADH +' );
define( 'LOGGED_IN_KEY',    '&#`UL0G;im}w%A5$&b*<JZv8}. Od&(surU`SzH5(MMt+2XDn]E|15%3-7A2w!vh' );
define( 'NONCE_KEY',        'v%:JsU8 &1jtk-pzB;t#(-;DR;RY81YD#`NL#5FK3Lfhs9=ss~lCY$sgdm:KkDlU' );
define( 'AUTH_SALT',        ';#tLf3Kct){y!dDBPIk:aw0Jss%K@k]1Gg>jeMV!GSD?=/$@0Tvgwuk>8:?%`yjE' );
define( 'SECURE_AUTH_SALT', 'O!:3/iXPtT@ UZpEzBc2tUGtlU;&_=@UUK600?Vs.[})A`&,fpixC)5Q?YE_//|!' );
define( 'LOGGED_IN_SALT',   '8lr$=GX{|%6(jXI37 Kl)X%W{NOw[wy@F@G79TI3[CCBWRQ!}@f_V;Jh6x6FZj&e' );
define( 'NONCE_SALT',       'hM>?rY+n*XB!z%s5 ^TA>~_|ViQuj:?Y*:OAOUE7!Yv]<l`#sG!/Hh(w%nD+SY(>' );

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
