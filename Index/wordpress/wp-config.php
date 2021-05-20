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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '#sM>]=Q{(@,k.?B;z_r,5STV:4aQ/eq1JcD!k:z~%yeB.}#F-Unq>x,7kmpo$h;n' );
define( 'SECURE_AUTH_KEY',  '#6BUfXXBwQC]9F=)m04k[r*(v|~L_wwW8nG=]&brRfngjYQ)mRG?(|m~ECI;m_#J' );
define( 'LOGGED_IN_KEY',    'p7[7MgM~O-3B[)=Uv3RE.&jnXG^},<i@y7XYJ}lw}8Hyf2CB18BsCW3 uj[rD1yD' );
define( 'NONCE_KEY',        '~g=>;ILivXPp$;)oE/-9n0t4Jnk9&9(GP< v,Um_Ht!{u/5G %2.kTFkh?IYSb_=' );
define( 'AUTH_SALT',        'LjQ9>40~#=:uZSa!CrD1~=tUL;/7<cH[{yGm241|PJE.CYcuZ%}gld/,3nfyb~V9' );
define( 'SECURE_AUTH_SALT', '[P+f^NoHT53gG@a}V61DG`jb9pe!%c~gb8L2)5NXXP~q8`zV=mM?YhK|3U:MB%&r' );
define( 'LOGGED_IN_SALT',   'Whn_bwh405ualb>i}$`y;n*@7^D}|l-#I<alNxNpNmd ==P}t#Ri_~A[1 M4<|[a' );
define( 'NONCE_SALT',       'DhrjUp|>;}u80wZi5e1q3CkM:LUE(OxF-|thwE8~F&_r~/6!{BniCSi(@#GBmTu`' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
