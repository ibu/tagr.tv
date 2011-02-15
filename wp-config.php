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
define('DB_NAME', 'tagrtv');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'wur5t');

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
define('AUTH_KEY',         's^BGbffucG;(,v}}HsO>+|NRh|N-YGAFR(Iu`6*0-?(*~dsx!3y!j+lU[)e8NE|3');
define('SECURE_AUTH_KEY',  '#?T]&8)ZUg}p~96IB! SdiKIW%7d+8U4GP&S|9m| {&&UW$?rltmG^7 s5SH>A||');
define('LOGGED_IN_KEY',    'Jh(2oa@TKa#;`5XqGOJpMDS7bs}CLy%I)Vfd~0G;ftKR 7SH~Z5ZO1< w3diJ^+i');
define('NONCE_KEY',        '<Cq@BG[-+Z/lwVV>}8o:]!8kx){yS)#?aq<b[,eQ2t|EfH!{#|A#yxWbE?YOE{Nr');
define('AUTH_SALT',        'x>93=%X+xI2$#@*eT|P}c-SEiIc<_@/c8X1.iTAtQ)?u*7[ d|$O0J.o;J(W#i-Q');
define('SECURE_AUTH_SALT', 'GdH4P>Hm+s8NAa^H(T6`l/H<j|DG|-{PGo$(#6Bnw +WL,33/lS)@qpOfJQi-B 7');
define('LOGGED_IN_SALT',   '.|XX^t{Mb+aV*ew*_{y%B1crJ4KC=;BKL$i8Rzsz;hTXR<!r8_+Krgc7P!m#y7+p');
define('NONCE_SALT',       'u%8r)E7/+4PS8`-:2n<R{gtyp|jJfic?bv-9&l$-RX<9k/otq#-z/QUc3>BB/|v(');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* w3 total cache plugin wanted this */
define('WP_CACHE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

