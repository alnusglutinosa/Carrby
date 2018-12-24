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
define('DB_NAME', 'name');

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
define('AUTH_KEY',         'HuN#:+9lzC/aLt4DDE/7<q)y6mxMUc!XK6M> rd2j9>Z{a-^s7Dr~8!%bR;j.(hH');
define('SECURE_AUTH_KEY',  'zXb9[2G=>pj6j*_Txp}NoQBkIixWz#}PV(=Cjd)]3(R*IMW,{h&}D[M2#g]I8~F(');
define('LOGGED_IN_KEY',    ':F4n%[]0 &9y bGw|z9D  K _,U!MI8= xWz68:u~Eu}+ze{/nI sy=%5.7[WBsj');
define('NONCE_KEY',        'F)Ye/<?5qPr,_*t*vO@b+p,|SruPXT50Q*)ho4K6Ae* +1zfZ`2EV[9N A;l%oXr');
define('AUTH_SALT',        'YfclfXHg(j,hKD.0LfU$<yHuVCOG;raa3Y8h!*2goTJ8symDA7s:SwkdUHs~bLRC');
define('SECURE_AUTH_SALT', ',k]<GB{#(RVkTR[x>0&7oyA__9Gk6,{Fkd!A{HQ.Zz}2Z8G=aLk%*xL3}5vtNyaA');
define('LOGGED_IN_SALT',   'vxc}h,im]u`bLj}H02kV_Q,_g~zt|X6H^hZ+;?}&D/TTO!?Xx}/f] ~o9df&j]KV');
define('NONCE_SALT',       'Os{>es`i>jb}M2068 ?OrH|:=`[P|3HfjIx;w2<a,P_cztxf1l-]yfyP>nt]q,LM');

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
