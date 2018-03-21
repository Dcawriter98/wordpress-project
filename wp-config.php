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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         '4>YB<wlNF=G;)iLlKx@fmH~G//&&Mf$ 7|AMHfM]d8%`pCoNPa-v<3aYg|]h47iL');
define('SECURE_AUTH_KEY',  '-!1GnHkd~pn9q*]V QHw]Bz<k.C&YjXrAU:f+WUf1 L~i6jnC:RB=qmct 37/@B9');
define('LOGGED_IN_KEY',    '!.popnl`#;}!y+^X1=.cSN6ZyziT&i2(UONt^akb50^J9V:3B[.sXev!KNtD|%<O');
define('NONCE_KEY',        '1@xG~TScabN5*F/!VNWguR+.lK`/aA89uV!a!_uaV!/)_ujt}5_]o(G,y{W+kD&y');
define('AUTH_SALT',        'ra,.fqe5NWyN3F(HubI1TO~1G e/WM` 7m:2dC(kAt5aPJcM(AG3V[t0RK#O7KK(');
define('SECURE_AUTH_SALT', '8_.{K)/sVs[Ji<ZUipF3|WC4<%3UuEF$WVa+f>:A![ar<3i&d2So[#R?&Y-J=t:O');
define('LOGGED_IN_SALT',   'Jv$8*k=d,?pfq_T^`3mA[!CG]YpWET)4RuaB|*y1?[PO)}J!C?rnX^w7]pa>_kHL');
define('NONCE_SALT',       'acjuXFhPF8> s#nkR7m|Yf227UJTednHt6-9w.=ZT=r.XLFzw(E!2Hi I=|B%g=y');

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
