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
define('DB_NAME', 'wordpress_db');

/** MySQL database username */
define('DB_USER', 'wp_admin');

/** MySQL database password */
define('DB_PASSWORD', 'test1234');

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
define('AUTH_KEY',         'MYhjTOw.Bgh$%t,U`?^7`r=_N#hIVa8 c)/Y&6IS1yB:Q,<]JOUw-vp+2^D-=kky');
define('SECURE_AUTH_KEY',  '(-N<_V|<Y|o66aIe>rJx.ry S e@&1xm>4]rYRp]m$&BoRzpogq&$*?43]2tS?&0');
define('LOGGED_IN_KEY',    'rCL$r(m9R{b52,Nzhu}a?N48.ApY=L.bV6@b!~a-P O:U7Zj#o>|/3,Ae1u,~~9T');
define('NONCE_KEY',        'm9Q>Q?~P.OOkKFl[9M-L+-q2f7<Ni_(?~>`)Kn`ah-)*=_NFt?26,]c*]Sf?|}vo');
define('AUTH_SALT',        'o8-HZrIQso_Le~-7Xc![m>Yd[{Z#oVaqOd2WL{S`8 1Xm[+H[eEK-+=`2-RKA,VI');
define('SECURE_AUTH_SALT', '-2j0Ef2FkMmrM&R<:ER^(=CqjPeJ-9H7|eNfvv[mt%|Q4$7i@:ZSmEiN-i6f*KWK');
define('LOGGED_IN_SALT',   '@HIi:mKk}p|qr:Ctt=7RF<s2RUT:YT=)ezuRx&:%!TQ$a%{iXqMPUhmJG88pknat');
define('NONCE_SALT',       '/I6}@7ZukTW)m(f,)O+uY(znx,>8kgv[t7eQ&#Pi}CiuJ(GN@jDzIj<JU!0Q<+jM');

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
