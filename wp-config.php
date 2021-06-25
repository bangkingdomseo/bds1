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
define('DB_NAME', 'bds1_nguyen_91b0');

/** MySQL database username */
define('DB_USER', 'bds1nguyen91b0');

/** MySQL database password */
define('DB_PASSWORD', 'bbce0b1d46735023');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_ADMIN_DIR', 'giaconseo');  
define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . WP_ADMIN_DIR);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}e|s4I -p4DpXaQtQ6_C&lj;DtTBp;9#?[d]>qPZ=}c6.hsLw|`|sb*P2?G;81A`');
define('SECURE_AUTH_KEY',  '+0^K9%oh63&{|-EeOoViI;58UkqAbqg_9&^ =,x+T+FGW3P*gT*h2.ZFo uFJ[tK');
define('LOGGED_IN_KEY',    '7pF  HYjWA8V3Nj5azUXo@BT+WSVH>n|dgfF[s6vG{?>g/ost2!++09`)9^z{mO%');
define('NONCE_KEY',        'lsQH2$U}]5({MWDX/fZBv{dlCr{{#pEc,EMO{~5WtCRw<I0+-0_pwjvW&JY,$.@1');
define('AUTH_SALT',        '`F>@HG<d0lkOL*-TS!ZcSH-}RRe&%7-{YlV9<za$j0IZSZz?7sn#1vB8!^N=K3Xf');
define('SECURE_AUTH_SALT', 'X;|/NfiLqq%:FfU&b{kaJRiP0+ckmz*o!S^B7vlrKQ^J$^hd5NM/E[&-4,XZ%CE!');
define('LOGGED_IN_SALT',   'XwXdlEeR}*H[PI2/hY|gjv4H8Y0TBYN_A/. 4>U !;]ObZE% ^9^J1oMP=o:$=RZ');
define('NONCE_SALT',       'xITN|2Q,=w|;SBVpM5z+Dk?/PD!CS@7XN+g9vlDNn=WC-GA3*EA~_GYrmhuh}#sr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vpw_';

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
