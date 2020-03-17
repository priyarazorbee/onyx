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
define( 'DB_NAME', 'hotel' );

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
define( 'AUTH_KEY',         'E3]DxSz?lcO~]SNt2&6i0se;@F;vbCTPX{O5*5D-%&/TT(|HGeB7m.zYih7Vr2/:' );
define( 'SECURE_AUTH_KEY',  'X?yx/EqZk1X]xjt;)0uT!uv/$E64[>rt%E/EchK]|nIRhNG|u$xQ!D2X/gP@?6)V' );
define( 'LOGGED_IN_KEY',    'x#^J!?=zz U-!T+ v^8El0PMuE2k;VEw-U{^zim;wsLOUCduL.u>t4O>kMGq,6%8' );
define( 'NONCE_KEY',        '[-{U=vhXwly:=@aZRy5MW/IcFd|0xH]V A=H[ypjgX0:[({KhW}6OiEN>95:e9s9' );
define( 'AUTH_SALT',        'yz(`H7`oSkKGgz^W#`Wq|hAn?f}s[1eq|n#=f|oH}0QS`~,Wk(4H)XKQ8./pF?7b' );
define( 'SECURE_AUTH_SALT', '}zq$v|a;-$UQ$@t[[ifX=HBxj2e^P%uY*LL7`;T2M2{W .!g/JJ8G/iFgCPQ^Z3/' );
define( 'LOGGED_IN_SALT',   '9?eBX95rL;,m?9P_}8 fC*&6K7PrJ;[A)G{>5{%WArVdkL?8;dntLg|+T$W1ja.}' );
define( 'NONCE_SALT',       'IBjE}*|YJuU*7!.{qbz|U<Z)Hp(%}vc9?YV2E% j7>]n+?mE*TGnjba@OtxOr/U9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
