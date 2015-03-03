<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'eventricity');

/** MySQL database username */
define('DB_USER', 'eventricity');

/** MySQL database password */
define('DB_PASSWORD', 'eventricity');

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
define('AUTH_KEY',         's8:``4*L<c,@|C=<1>+bA]0GT]Y~0;V?yX=svKIi? g)M8RZN)jlV<S$lcr)GGyh');
define('SECURE_AUTH_KEY',  '<OHjm/@[Vj5+78;|1|]|/5bpE@+{P~Bs82_p`FB@#eRHi6n/Iwxr27J]-0-^_vlC');
define('LOGGED_IN_KEY',    'KKvr[{/9_:h]9g(SJZI52A>vp1HW0e+*$)RxPc{WJJQ3Ko8H-/(+N[k=BJxrWg{J');
define('NONCE_KEY',        '3659H/1,4} >CGk,~mu0NM@433qko_!|PSb~&,x%eQv DHw{!~gGu wAm5Y.UA0r');
define('AUTH_SALT',        '.u?QRbfu|:+r{!V1GO` Az(P{bXpu7PK^i|z}kyrH|Ixpv,}mX`-_b}Y}#NQyd6^');
define('SECURE_AUTH_SALT', '>4)_cD[A@MI,svtCqqE<,UlTy/NH)6,U,8Lgt4_IQFX76@;&g*(!01|vG(7Olga^');
define('LOGGED_IN_SALT',   '%P{)2X+BUYI.d`G!H2e/C8kDsn2KJKQ]}D_ <p|s]5{W0WC%o:+.$oUSs}c@ouE$');
define('NONCE_SALT',       'izwpCK#~Y* 0}0FPwmFFWPWMo&&c#:|1S-NQ/I}TF5_KU:~~2=GIvP&-qwp<<EX9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('FS_METHOD', 'direct');
