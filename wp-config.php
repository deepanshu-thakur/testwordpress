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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '*1)9=M4gl!T{|iK(9{%(xA#t]OjCr,iP 6~72&HP2^bq93Y/S5x(VeB!khSmlJ1U' );
define( 'SECURE_AUTH_KEY',  'D>Vk!DzU3((muW+2P/c|oabbnb6r*XFk.H^gzp^3dITX>XL<.rCZ8!t)UO:vIIIK' );
define( 'LOGGED_IN_KEY',    'LYyU?A^X|c)X3nQnw5N!t*>;z|MLjwD9A1^Msd8@)7nmOHG- !T`O`*$3~!udH:9' );
define( 'NONCE_KEY',        'g^?5#ykHl!ncqeY4<|.(jzkyr/F6F:Y`kUNr,n<0=q]lt-xt)%$-2w3eI_$;?),(' );
define( 'AUTH_SALT',        'FjIiQ!A *I4}E@}:*hBEVK]u/c?)ll&>0hpVT/T5V~Dmz*doCkk5>kL1r,a5.8eT' );
define( 'SECURE_AUTH_SALT', '=C[n!&/zgCN(?&j]iOJHC#TK.JTvnS9(EzVT]d3W6Q08JU4DC{A&|8Dz@3jeJXd1' );
define( 'LOGGED_IN_SALT',   'KKC:iUIwu^vX?@)swJW@.]!^QYkqB6_V9C.r=+rSSg%9_@.>C4t-$ tar1R.a;pw' );
define( 'NONCE_SALT',       'X ?F[R=(,iX)!H!UzRiW#_(46LY1YxG7!@F^NLXK8|oBw3~Q+:B`ckKu9[t MPz^' );

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
