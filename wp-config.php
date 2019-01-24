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
define('DB_NAME', 'localhost');

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
define('AUTH_KEY',         'wQB<CgD;=x`k&mYEFV3Y4xHsrPGR^sBnDVFaH&cgwqWI D&E.APty/y.Qc%-g*D(');
define('SECURE_AUTH_KEY',  '4W}YfH%d<!k{,TOenpz|Locx/)?mz 1@NE3DCqi.%;Q}cZC)Ap-fajb[T=^`a/|c');
define('LOGGED_IN_KEY',    'KrqaTBw:aF;aG|E!5VYY0ZcB 2Z>xFxKyZgKoD9Bo3v%lG3F[TV+b-Bcx1#X6D] ');
define('NONCE_KEY',        '43&=#bI+0(94 O&1BBZD{sKPCxI5xq^].y[)R#AYE QzO]We)ba9tVgeq+Ve06F)');
define('AUTH_SALT',        ' cun_25yFe:^- i-eP5 +OR26oCgc1B`4Fk>(:u5/p:WfeV(,mJ7zVtwGGgB<K@.');
define('SECURE_AUTH_SALT', '])dkMR7mo$cP0i}qN@`ZHzbGw&Ag;Lk)qKYCkSDQ}eW4Bw8vReA&K~-`#%DVLdPe');
define('LOGGED_IN_SALT',   '_[$f1TB-[<O`].U=P$S$t[>RvW9dh!FQN|+)5S,.:At9|LUeYvg.i$IUmClW|q9J');
define('NONCE_SALT',       'xhOl$1Xgx*RYs;j4Mt-MPiT0Q84|6Y22q#<:I^u)MJEJIn0)O1=#u|ppWS)^l19R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
