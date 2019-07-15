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
define( 'DB_NAME', 'db_sjtheme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e3}B5P)&+!33&A38|BDqR5;?H:TQrT)m:,|9*hr~USW.$*t9bL}N0Q8KxX Y0qg?' );
define( 'SECURE_AUTH_KEY',  '_p?&Cc2QmNMw:+rVz7YaWleY|Tc1(+M?21SX8v1s#s [pe5F#R.DbRl)4S&U/JMN' );
define( 'LOGGED_IN_KEY',    'gsT4s{#K.fB}r{!W)d%6=1g% [kPX-n3<7JOiej$pic]7AmyJO5;9fwSY;N!w,x]' );
define( 'NONCE_KEY',        'isWrfG_8p3QjeM1y]U<Pot]&^=DDL8q?A-wm@T|TermGBe@K?aFv)GCaIS_bjPZF' );
define( 'AUTH_SALT',        ' lC!< 5i]]1@qM<9@.zv>)4 &f9ZT6Y.Jy[b5Y3L%=2Ak#Y1[03`T8tlDK<oZ>+s' );
define( 'SECURE_AUTH_SALT', 'v+-7G+>2_n(5t]+lV3^(x+]9Xy[kb`xiI-WORX`GPqGG)P+H@]pG :pgCj^V1#~:' );
define( 'LOGGED_IN_SALT',   '1J[6Ov=awSB,-E&,(j!Y%(5in%GY<@n>k|cV+/z&HS{{!~=}?sCdJn?P9%Kt;D^ ' );
define( 'NONCE_SALT',       '-l%_D8x8kO%hs|sWAX|E<z+V(,0(mNk&zolrcV,^T!Qe[htBW~7*Vw3nY@z|--My' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sj_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
