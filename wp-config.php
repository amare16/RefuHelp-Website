<?php
define( 'WP_CACHE', true );
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
define('DB_NAME', 'wp_RefuHelp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'simplonco');

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
define('AUTH_KEY',         '6^!u);r@TYGcv!DsR*fC9M;I5&ka6N)b14)kd,GiOB~p)QnTf$vw*YIW]}<ElUG2');
define('SECURE_AUTH_KEY',  'ov@+$IIy~[X1<&4T|(0Ig`/N}5anA9mFkODsAxvSjhTJb-HZ}YO9qA5|>6g*M[Vx');
define('LOGGED_IN_KEY',    '~kX`$v~*`y.ns&j& ~c)l.2xub!#cd9dbExSrUN$[[y3Y(;SnK7B}:RW!P89:)l7');
define('NONCE_KEY',        'm>&C}N.dupb0_/DmcvUp@IFq2GtYD5Zljj<Rd&ofGXTbZDDzR9HUbtEYS#~>Z4$z');
define('AUTH_SALT',        'uWYiL$DO(jwk18o!YQa}q!u%.TUN_nu:{o)^w}4^p|qLP},AvdvHX4r%wVoHa0gk');
define('SECURE_AUTH_SALT', 'ksW5Ix8&K4]XS2SGZh;$UpX[C|nD(_x#7,.]DwhD0upzgFQw#o8[@8Rtu|(1-1yQ');
define('LOGGED_IN_SALT',   'W #UcsI{Z|2@GW7dyg(Q_0^Eo4XA`[eRD <93ycX`;I1M1Rw`3#oifS]1FrzqE-1');
define('NONCE_SALT',       'c5.g`*Gm+TQt_BmW0 [.<Z_>Pk Q*-(]+>&aTObA1*&[MzkNxv#OCXjJos*/}F;<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'refu_wp';

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


if(is_admin()) {
   add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
   define( 'FS_CHMOD_DIR', 0751 );
}
