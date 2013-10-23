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
define('DB_NAME', 'gamerreview');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'u36A2]4SJ$r11|o@5WktN|%n4D*$zG&aKJ5$Q+PE+(SK$$n1ilB`q!y<ol=0$VW+');
define('SECURE_AUTH_KEY',  '$M%7p=+oeS+hKP89RWhL%%cZ$ v^wT|r-wvb&%RRJF%jhlMy-4WFK}i;-7.]GF>2');
define('LOGGED_IN_KEY',    '7)i:y_#bBLZQ*d8wJPV=.cDo?{XH=rtIE]vIqDl^tx/-}s``6C|:eM=;9@]i0:<L');
define('NONCE_KEY',        '8M-|,t@N)asT+8UplPwR:;}({`01)W1)Aa9l/J,&mjYP+ ;=F9As/vD(<n-7t||$');
define('AUTH_SALT',        '.+,v^BODZ8(H<Zroq01bc/K6b<jTV.N1yZsChHD8|7<XdOXoA+%oHr]}p/1_!:BK');
define('SECURE_AUTH_SALT', '{LEXm+>;pb3S[[iw[<I[|1GD|WN@+PCW#`MLBx`OYxc3~4X&Ee>M)9nRZ(|/`XK>');
define('LOGGED_IN_SALT',   '_nJBr?g+,[5A-+x0.z8d2CdPF,M%wF=zqtZTstbg~r|x{w<Rndh|JrhL>H.q_[eS');
define('NONCE_SALT',       '<>W%.I~.a*G|LWs/q;vsr%rwD5p&~ke,$JLb>6G&Lv^ly}f$3PGyW[I!BrvXv^-o');

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
