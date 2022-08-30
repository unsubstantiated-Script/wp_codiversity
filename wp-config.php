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
define('DB_NAME', 'codiversity_skriptkeep_c_2');

/** MySQL database username */
define('DB_USER', 'fjmwzph');

/** MySQL database password */
define('DB_PASSWORD', '2jpR7Z^3');

/** MySQL hostname */
define('DB_HOST', 'mysql-1.codiversity.skriptkeep.com');

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
define('AUTH_KEY',         '+F(cG8d4n7ZEGZjv*bj:eWw"Gs%_xIZ#xW(f6(Cn&rov5je?C6)$~2%ASIJhTvPD');
define('SECURE_AUTH_KEY',  'l+%Y8+W?ledP3~$5ST#z7nmUsfV(|^0@+JgocHU4(6r@ck;%I^KoAhRxq#m;mO!U');
define('LOGGED_IN_KEY',    'ZsKI1936V+ye~`M58Vu&:1K49_Jt^19v/mgap@@0LDVbCn_Fs^__zF"gbOT0Zgs/');
define('NONCE_KEY',        '&Vy$G`SY+FTTq2|tNU^ymjzFk8Q|WA0w28bzD20Cm|ielf8M$4U9q3yux&)$h!&i');
define('AUTH_SALT',        'Z("W^^*PStGe$vduIJNn"v7_7s"14K_$L9*%xt%79I*3qPo")k5OIqyOS9D*jod+');
define('SECURE_AUTH_SALT', 'wsat@`jo`#!s)0f&rWvy+f5$6DE5M(Yg1wg|o8"QW~C`^4MzoQ?z::XLI*/!#j@n');
define('LOGGED_IN_SALT',   'k1KDDN`~rNkWgQ8^?8YHEU)Oij!|!0@6yDOg@6av)9J;xedocM|e8)TpvKH%R8M?');
define('NONCE_SALT',       '7Up0n_M"xj/(BqDhBb8?URjV;)?@^%GvK(y"+(1BOM|YM+5?j#(:%joV^RtzHNRR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_5csapq_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
    $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
    define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
    define('JETPACK_STAGING_MODE', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
