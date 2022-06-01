<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'allaith330481' );

/** Database username */
define( 'DB_USER', 'allaith440481' );

/** Database password */
define( 'DB_PASSWORD', 'Chachou99s@' );

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
define( 'AUTH_KEY',         '7$h!-If, @mR|*[,>sVw!}C+4L7}pDV3tykm*~__0otEw ]fdA`4D#s}KJL@SB6C' );
define( 'SECURE_AUTH_KEY',  'NzU3+0(=+38Og(5~IsLoI3vZl6?cw3@N&a&C++9<X@;h7^|73SL88<&/^NdJdku[' );
define( 'LOGGED_IN_KEY',    '>;nL;%%:9/1|ii@*CgN?X[8iMW7Ub2[.)J``*y>cuVp{}evOwhpAM}BLSowY_lgE' );
define( 'NONCE_KEY',        'tQ?BV=W?e(SHe);yjb[,5phz-u@XGIC/s4>xw$GhSAd.N;1siMku9&j<@-Fu|kZ9' );
define( 'AUTH_SALT',        'vnP?HTEVg5@>)P(xq;>gnkRP[>z-rKhB~znsIF@93>rSs*)` :a&OH$l cD!a]!:' );
define( 'SECURE_AUTH_SALT', 'w~Fa(MK3*^<2FvmXPU4DDf;s[E}%gi<CTU+Gj`E1(q&++4Ubhlxt3U^9){q9I[i~' );
define( 'LOGGED_IN_SALT',   'Uz]2n(VnNX3+D*+s.Ks[~HV}J]la#9{12cU-+_U9zG*S#5FLWIt6S:~/K&Xx#5 =' );
define( 'NONCE_SALT',       'J4?>2Acio~[5;4,S/#&QbK1+SYfyY}K,mc),fRkoP+cNC3cAr!`yvu6iPc(QG`3q' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
