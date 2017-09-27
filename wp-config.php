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
define('DB_NAME', 'digitalcook_officetrack');

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
define('AUTH_KEY',         'bUAq5/xvOcW9hW_W]!+f{__`Ox(9j@9f@`9*m2dI-)Fn7vN>HBU,2{<<ba=]A`c.');
define('SECURE_AUTH_KEY',  'AO!wEE3.[x`Z|QDUuoDHhAS+A!7,u$r[<pJI?@m_YRabp3(VR.;?!48ADvhn8I^?');
define('LOGGED_IN_KEY',    '|sd_{nn.)Fy)-V?3h.93,,qA+9e,vmY0T:Dgb ?4-:#P*yT!Ar,4.bh^QjrfKf>N');
define('NONCE_KEY',        'FUeF.xrm$6z]bKR?g}~VL(Yj9B@oRcHpG~:Ah/+3MC^jZ5w(ANjv0{5dgj?_)8zO');
define('AUTH_SALT',        ']D`^VbG=?ReQ@S1 ! #)yeHwpV^sdaN0R=RHT@a|^Lerej}!QD5Xa2*Y9pY~iozZ');
define('SECURE_AUTH_SALT', 'p!^!S#wT|z5s L8|[U8hPOXKE{+}jP2*T_C7l<dmo0nU>UI5$ !SFYOu~u>C!yGG');
define('LOGGED_IN_SALT',   '[acQ@aL+$(o)YieqgG),yw.oj2!C>D.IzFIa$2rJ(Ha?,nKTtE;YJuw5yL>1|3U,');
define('NONCE_SALT',       '%oX,C>@MwuJfSgha]?mVyfb8Q)lLA0&3C32R)+lj/0zB5G3U0!mY}c GH:l|hj{.');

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
