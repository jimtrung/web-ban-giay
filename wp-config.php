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
define( 'DB_NAME', '' );

/** Database username */
define( 'DB_USER', '' );

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
define( 'AUTH_KEY',         '),o<Bx3_:j1[6`QL-_jm}+#DNGv[FK[B{Gz%aeV5jy+6*Ysb!Gg0^;N%8IZ?Q-},' );
define( 'SECURE_AUTH_KEY',  '<_VE*H]J(+T4kNqJ}3V:V!runN%FylbZ5fB@c#IX#%h)S$2qLel#Q0R_2FZ<Om{!' );
define( 'LOGGED_IN_KEY',    '8Voz5t_r;H@4lHx<xDaEse<H0F-iMLIPT=>c9Ah^vNV(KFn[IBpWS0.LoudoaJw?' );
define( 'NONCE_KEY',        'zC4Rnl2M]R!t[+v,giG!=(3$)4oa!3pW:$Xvi?F?C4*xo84%l]q!6IdD-7Y}}Y;Z' );
define( 'AUTH_SALT',        '^W0Mk9~yrZMy~~S]B2 .[P&+Q#_s6o}:L~Ca]9mbw(Zg<4Vid4hJtRxgVhBC+e.!' );
define( 'SECURE_AUTH_SALT', 'JBX_S[/p89NN-p_(^NT!nu:TZl~~:Z/D%H6=ygzq7%,{Wv=Qi|_Fb}cAA|zNHcI9' );
define( 'LOGGED_IN_SALT',   '5vZhk1&xq0,u%x<YURT?4`)%8>&[F}7Z-h}=l-l**/m_siv({Cm=}AE{kCmrd)^C' );
define( 'NONCE_SALT',       'U9koG_oIsz&Pn(XHXEisF{@CfwtF3,@e.&^Q)6L}Bk%e8Lk6+^;;bPCL=Sg{1$l!' );

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

/* Add any custom values between this line and the "stop editing" line. */

// Fix: Increase max execution time to prevent timeout errors.
@ini_set( 'max_execution_time', 300 );

// Fix: Increase memory limit to resolve "Allowed memory size exhausted" errors.
define( 'WP_MEMORY_LIMIT', '512M' );
define( 'WP_MAX_MEMORY_LIMIT', '1024M' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
