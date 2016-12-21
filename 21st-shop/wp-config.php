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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '21stshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P@1fk}LPXhVxn>+EttZ#8 0RV/,=n}lrUhLMZhU l1hX0BYj~}AZr  `-^Sm,m|<');
define('SECURE_AUTH_KEY',  'r;*EBZftivn$qW5WI+ZIs._X+1$.aS2pZ>hTy0SwZOBogM7hoMH|I{Z#:C {A7;#');
define('LOGGED_IN_KEY',    '>9>,n!0Z}n`tgcP%/D8dj7EnIRF<U^KiQIIxogu3xR*eP_L(C$Y@2=zcO?n<yupu');
define('NONCE_KEY',        'mr46#5Ozhw*djW(A;Fnh1~RY-klGf.3Q2x`@)ftD/~RU*v>q}=u%Fm]m0m25Ht/9');
define('AUTH_SALT',        '=~hYj9CK%VD~w8Qj1|~dNSZt ElE<*:tlpwfm(6G*#xNtDK*7LR(,P=OsA3>V0%;');
define('SECURE_AUTH_SALT', '*$I#E,,,!/ouhvJ3d4|$b?&ts??PH2Cs~s39Uua8sW.s<|@0SpO+(ft+)mX[6amR');
define('LOGGED_IN_SALT',   'R@(v@mf.Z^9TunTUZ-55U5j__*|rR(a<E~O<D#1&Yd!].IL6wnI$Dq4,5u1E*<sl');
define('NONCE_SALT',       'uBvE1T,kV3>X%_&LCC;&dD;w6#WF`tS?M<3kx$srCRD/II&esV3 *6kaVK}xS8A$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'shop_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
