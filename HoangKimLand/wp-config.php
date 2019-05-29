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
define('DB_NAME', 'Sql_hoangkimland');

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
define('AUTH_KEY',         'LB~NJ[N+Mhl;g+Uzoi*D|{l;5H@c&ZV?;z3rja:R:1$B84=U#|XD6~4ZRF3%qhzC');
define('SECURE_AUTH_KEY',  'i`i_CHm QuKa*gPs*WodHXOcd/tQwXn%KiP@5SAZIxk;L%,t]=GZ2-z/rO [JC2+');
define('LOGGED_IN_KEY',    'DK]zZHcc 2ks0Ftw~]A9UaC+_<$aOjvlRLy![it[:TOE;:v3nTWB}]N`F,/ZVqMP');
define('NONCE_KEY',        'zqcD{e#l#F-0|ta<riXN.-=tQy!.4`|/q!&k_^UR|_YXu5:@{.nEJC]v5nrDU|nz');
define('AUTH_SALT',        'y3?Ya[cxM/e$d-~021wHBr|6h@,~|dg=w-H6u+w:`o}0g>]6|E`(-jpPXTs<d,g?');
define('SECURE_AUTH_SALT', '4Bfo<C;s[iS{PpC+Ty!M9SJqb2qs0.wR9h7y|W6/]]~KhPgtbJng<BxM LUCzl:I');
define('LOGGED_IN_SALT',   'XJGi}}DVj`u?3l,d`w)b3]6Z WtkxTXM3B<_m]`NwsBQ_yO7H!F{>3G6^1|x.:@~');
define('NONCE_SALT',       'tA-0b9*Q!U}pZS]XkZ|CBH-ZuylobZ=ca1p.w=w.Lf}V08ZeS;%%&P,l~db(J3!*');

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
