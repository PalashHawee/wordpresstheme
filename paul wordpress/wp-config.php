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
define('DB_NAME', 'palash_hawee');

/** MySQL database username */
define('DB_USER', 'palash');

/** MySQL database password */
define('DB_PASSWORD', '
kybiatP48a9eJVpx');

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
define('AUTH_KEY',         'y[]/RQDDega[@kTi.^7yg<n6N0AJ1jU7$.B$$yLZ+u@njJuDy^(9bJ?G6ubs-+E}');
define('SECURE_AUTH_KEY',  'y]a%Ey5k8.KZYz[]+/-d o(d|tfwR-92114e(^+@5D&uzeN5G@q{@2dj/XG5~4~h');
define('LOGGED_IN_KEY',    '1hUqSLz1Dc-),`7f3,}Z_;(h0Mq/3d,d-&)PvvhR)|-*1^ahq&hV!EAI+2fWJ<+6');
define('NONCE_KEY',        'G%~11j6*gQ]|oJ]6*1ZVh#lu<Q7p|AB`kn_Cu 6|aWpogf7[|]`wD=5{R_+>Ucq5');
define('AUTH_SALT',        '`T-Z{US0A{V{@!F4[`*FqqM_fPROHA8GU(  0d&>EZuxP~:]c.[XXDVxX+nU^zjG');
define('SECURE_AUTH_SALT', 'MBZ:Yah$O}m,Fp(Mr*Cy1ipcK+{TPmclb2d{5+E(r7N GdB`( Sa7;}RD1I /|]<');
define('LOGGED_IN_SALT',   'EYnHzSzwG6L!A9V4r:K(4`V1+|*7V!0O-:whZ)<!*Cw(6>xUS4dNl4&GBGCd32`H');
define('NONCE_SALT',       'SLT+3up=AMc-w,G)U.c46@b|Y?8Rswi~OqSVJl5oFH{|}%Ty[>?f)dGz i1O|Ryq');
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
