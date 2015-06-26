<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'm41');

/** MySQL database username */
define('DB_USER', 'm41');

/** MySQL database password */
define('DB_PASSWORD', 'sideshowbob');

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
define('AUTH_KEY',         '?wyLzmLOR##*xDTcmi`Zd2 &|*XQF&9x9Y3I|DYW2I-}73<R#VbX}9R/m8]0_Tj(');
define('SECURE_AUTH_KEY',  'z)A@q1-56Qrc<f{N(H8$>LS5Q@y[i<;>f X-v[dX%|%X<skV4dSp&b%H(TWXbl.p');
define('LOGGED_IN_KEY',    '4o*}h01Iy8!b8<~uG@[}FPVKieaNMc%5fC Y<`Kehl}* w>+=BnT(jhndGlNpvxD');
define('NONCE_KEY',        'gC*6G+PY7a_%pyFYzLMH!|XSQ?I!^>#r+2B0}4=f}-:=hi|a9QR*usYEWPIaYv+y');
define('AUTH_SALT',        'D-v&<M[741j=a/NRzjk65zwf|>zEG6O+~saZgD~KjhaaHu+$PP:<V,8t,?7N*eBs');
define('SECURE_AUTH_SALT', 'GC4x;Bww4*MD[{&B-p3j)G}I%1-nS HC!&LoR P_+/M-dwIC--(78yrV-dj*:BOv');
define('LOGGED_IN_SALT',   '-2S.7R-+Je+4AS[@|s{F-m>!/qw?4]LK`6%n{x(Y_a`@}8/.r+gu L-xba/tc=m9');
define('NONCE_SALT',       '3!{l_~c]{Zl:|rO-`)e-X}-@+Da~?<<[G|(3OMgFs?-@L$WYr({xFFm[9K<ow5g8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'm41_';

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
