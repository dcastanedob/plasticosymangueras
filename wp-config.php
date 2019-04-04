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
define('DB_NAME', 'plastico_wp');

/** MySQL database username */
define('DB_USER', 'plastico_wp');

/** MySQL database password */
define('DB_PASSWORD', 'Hola.1234');

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
define('AUTH_KEY',         'P8p|IT6QDsCsgo9Z04OKh@ QgI`_0Y22,xZ;R=BwkaFqinS51z@L`%E,ku:zl)N9');
define('SECURE_AUTH_KEY',  '9-dp6EU^^{aub!HOs({[rs7^[-k#[HA%urFg}%o-SU./69I1~lp1`P8[E!*L{//0');
define('LOGGED_IN_KEY',    '3b{)HD38.ad<~8b#)fo;Uzoh;YVobw&0B5Sx7Lj6prnW`tXq?`ScYYMHj+z-B=Lr');
define('NONCE_KEY',        'NAdd,e OxT2pw]p84JREyiF>-H[oz)Omg%{#52sq~5nV+gi3[ChaXe:Wac4{hc0G');
define('AUTH_SALT',        '[8PX})1koE#&[Aj3*@%1ma19ibLZt`@thy!d/rg I[~pOhY+m17X$CeZ/@?ViJ*o');
define('SECURE_AUTH_SALT', ')] M?gDlb7i[m(yDs%kv8|l8{9+nNRTKlVWV4HPvicF`:f=xUnc^k_(2)_]Q%twj');
define('LOGGED_IN_SALT',   'cLLUXc[C=bb=^FFxLX#_=.I7@s(P8(^GwxYML3dBXaa})UC>s&]u4P/i~SB6vht=');
define('NONCE_SALT',       'sZCF0mvTx#H$6kP|}M@/d$!B(W~XBM-Tnmvw,6-AlTk%d!I71=$_GGh}!-XO05=N');

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
