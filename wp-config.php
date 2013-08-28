<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'elsa');

/** MySQL database username */
define('DB_USER', 'elsa');

/** MySQL database password */
define('DB_PASSWORD', 'Yellow123!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '/Go]Pzz_`$t8,*dZ??s/w|yQ$pB]O{<30N<8?,g6tEYPqHs(p)bx.Zc6;kIu+zc}');
define('SECURE_AUTH_KEY',  'YE/~f8J1j/+Q%C~%C781;O[+=6>Cb<d_`Li/5>>z,?ihWGj@`j>-?q37q:GWffK.');
define('LOGGED_IN_KEY',    '4@% SwNIUTz,,eZ(^-Juy=B24c_?o|9(MSQ~P,^ujAed|%gz@3%B6H}[y;{;F_N+');
define('NONCE_KEY',        'h^& &]aH;,E+nddp8gyeNtf}e_jo5[[]ajBh7%.0ro :/2d~Z|n?fZsat@TD-n+s');
define('AUTH_SALT',        'v.%l&.`_XfmF%_Ni.SBALG0dbq[(G-3v@&]J`|Pt2MoD|]2/UNe Djc}{`nyQ`!c');
define('SECURE_AUTH_SALT', '*ogVs>Nqed/%_Ky3uAEO|ZcUN)b]R_cAt3,=fQ^VnZNb((7e^9=,K5R][zdZCh3|');
define('LOGGED_IN_SALT',   '((TO%rq,ImYL:mms)PgTX;mU-U5N5biL)|hN)i/`M94KDfNBi_8On1sCzK.(iJpU');
define('NONCE_SALT',       'lgI?#JZcU4!#pC,m&YY!X}/%,|SRu-k^!8Vk218|34HFtxIN.e:Id{]{6>wI2%??');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
define('WP_CONTENT_DIR', __dir__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');

/**
 * Disable external requests
 *
 * This is so that users dont see update requests since things are managed through git
 */
define('WP_HTTP_BLOCK_EXTERNAL', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
