<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']rLy.U#6lBrBtDfn]aIWyKm:xaB&qxq/al#4W?2F3^{h+<ARft#UW=dQzb1k#_qe' );
define( 'SECURE_AUTH_KEY',  ',=WzSYol[_xWEV(O<4.x;}CLZZ0&raGT+2Bp1b0Ky~A/{[ kuU*x4ms>Gk)Sgom-' );
define( 'LOGGED_IN_KEY',    '}+.IkuO%{hFM)D]&&W-#m~SYEJxSC1)JG^Qk jCqG)G&4z2lN ;:;Vb]4E]b%tdP' );
define( 'NONCE_KEY',        '#yzumQk3p(ay?*b;+8:WS5`(R.X7@qTGFlvh61;=x,rgRWI`bPtFwj<;K;9R@$H$' );
define( 'AUTH_SALT',        'PUAZ>[!2-CQgZ}0A9:XS6SIDZy5E~zyJmRv)gy*-.mlL* ]jBQ3}RniyCcXEku?]' );
define( 'SECURE_AUTH_SALT', '4k,7KE@A$b&4[+`f4B,8f#{Yl6h)KBWh4;J|?UPw6!y*, p~?DPJz/2~qU(L0-q{' );
define( 'LOGGED_IN_SALT',   'p#:w+3 -Zd]6S{{*|)(y2CNCxU5_b=(U8YZ9P{}]X^x/{GoV_n?KZ1a0qp9@)ZOC' );
define( 'NONCE_SALT',       '5r-_U=;SCFhxB DoJkOmqZN,h%QFB[{n6qty}@dwk0oyxtx5idop4Q>,~dWJ37CY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
