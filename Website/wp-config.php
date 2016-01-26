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
define('DB_NAME', 'JACareTools');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '[Tx1I+!-;TR$c#D#<d?sQ7lymCzxm-P@kX$S2U^Mk^M&|Os|aO/]jO+A#dd^`A=+');
define('SECURE_AUTH_KEY',  'jC|XENk3LXzp2F;:?l^@-eZj|yz$pD0z%K%|1-@tHTf.^1{e+9xVKQ6},N&P;|Gp');
define('LOGGED_IN_KEY',    '>Q8qE|;:w%%3]!.;jh`LO#39(L)$8s?>F0qdN.f^MuRvp#=-St>LT++{mNM2itga');
define('NONCE_KEY',        '^-q-)|SM<K= 7D:+!5XGua)Rg-VHHq)q12>mj%P2)O?kfwfzc-BC3)_!wVZ5v2cG');
define('AUTH_SALT',        '0e1OC#sR *ENY#w$i(0j7]l}o1znC(]JPmq$uz+}q/|34#;_N?9r^/wL<t7JP*zN');
define('SECURE_AUTH_SALT', 'SZyFfZImjT%<db$-5I&RcSjAj}rBRcFv.d:upKS++++kFCCIGq;J!=2>] ?+~g0b');
define('LOGGED_IN_SALT',   '$(G6NHf@wO;sTsF+m|yK[14tr<s*V`4fml|[kEA{tg6H[o,=/0+75rK3]I^|0to[');
define('NONCE_SALT',       'agd@Zt$^In*.j#h5!f/|=p*Zm3k%w!04rLL1vodz(w/J8|922c+a}Gqpx{I>I[!I');

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
