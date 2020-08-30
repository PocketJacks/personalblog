<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[yNqA4STPc?h(wrcUv&R`4}`{+1E8v%!3JdOht_;<fX$i!Ot7*:jYy9IHW1#aTH~' );
define( 'SECURE_AUTH_KEY',  'pELRK}I.Pl8`-,xgQ6}O666{5]<(`w!6+W(nL49l9o`G,:;hFegP2`|/$qKwsJkt' );
define( 'LOGGED_IN_KEY',    '0>#U{*vIO 7<?w0&A32M[8sH:q*|Zy0A+VkCoR(Zj<iTK`OR_HWZS~uFN>|CGK3Y' );
define( 'NONCE_KEY',        '-V3t>mJ9m8x0SY,)jZC?*@o#)TFg6OZqm tP4zw!#bykq1>?%sdOn# KHjb:=k=q' );
define( 'AUTH_SALT',        '4lLVk%GI`;CbO.n{-`NNm07^k4XPJdR~$Zw9Yq1pC)xSw/p^N];|!8um?5yYT`)w' );
define( 'SECURE_AUTH_SALT', '$5JrMMSdfx=<ztO@^<xexc=:8WnWw+l3X*OXuYjy-yk0zax8y%4:+j+7$HP7L)h/' );
define( 'LOGGED_IN_SALT',   'N5ptK.+kFv(Zg L[%,$Wj!2k,2 #AzwJkq[#tO6/hp|f,hF?B0`ETo7O>KpeK[(G' );
define( 'NONCE_SALT',       'C/ P/tjrjbRI~z~*7*b9ll05h:L; DnK&[@eRd:%i^m0h#mCGQ%;sh1inrh:/ZTV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
