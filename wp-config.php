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
define('DB_NAME', 'allurep_lumafi');

/** MySQL database username */
define('DB_USER', 'allureproot');

/** MySQL database password */
define('DB_PASSWORD', 'inferno1337');

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
define('AUTH_KEY',         '7b1<W:`-AA}h@e54vQdx8<t/$o$w9mADj!rvar4tQk9.`,Yd1+r1-+(-V.MejWb-');
define('SECURE_AUTH_KEY',  ')r,y=nu_&rTSgzdgv~^kpmEn/ 83$uZ-J<h}?_YrF;p1`0HnkB@S1E7<6l_rM+vK');
define('LOGGED_IN_KEY',    '-$W`m++1sm{)`jiH3Ufyd^G-*AEvfV=0Mv}jM?+)a;wE:N9 $h|+19!q:~YEMEbl');
define('NONCE_KEY',        '@:fW]uQG`Xjl)lwC(5:vN(K;V+|UP9=+mv8b)cxi+`84z-rJgb-#k9/_E>`zEMrE');
define('AUTH_SALT',        'Nj}sW5QV=A2fZOvXA$.O^(4mf~~|$w#wK&(gXf{7lN]t<C]MM1}WKdQ#AWY?7z=3');
define('SECURE_AUTH_SALT', 'E-3t:3w$H9#~vd1G}*i52SzeeyHfv+>9OXE[&Rav:tL1]QrPV:^pP<R)4{G4$E1R');
define('LOGGED_IN_SALT',   '#!d9rf}jt:k@ R>X])b{slP.2|07FLpV*R,9DrrQR[ncGGdM%B%;9Ox+n]82Cn-Z');
define('NONCE_SALT',       'MLBh&{??D+D>ON|UcY+xc`&!W=.JHf{mLasl?gu|(d`^CSKFhZpk9Ml1#8OEeM:n');

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
