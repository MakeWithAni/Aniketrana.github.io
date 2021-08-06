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
define( 'DB_NAME', 'makewithani' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ',XFv2iWkW9Yh}=P8S7(y8HLX?x;d1JA[1!WS2oknv3t-c3>Us8iYx8[k1yK2Mks#' );
define( 'SECURE_AUTH_KEY',  '(!jBu>*rlOlg10X+sd8sqpRs-`U !9+ ;]S,o2@Egr#0%D93oY)FpNBajCv!# II' );
define( 'LOGGED_IN_KEY',    'vBin]EFt$>`{q&=0BU_b((CSn[MJNK<!+O$B~)j`8=;)3d<vhUB)|$,eK7sL2jT(' );
define( 'NONCE_KEY',        'bBi~!kD8E)uIn^}=_n8W508F%<wC+bvin}Zht_w=J08HtCoQtETJ3)Ny AL?973_' );
define( 'AUTH_SALT',        'Bs8)G(iyWG5M]2~T`rCQ&DX;sEN`7p_&zPHlBD_Jww]fug~wH[*wodS;<y5PyA6B' );
define( 'SECURE_AUTH_SALT', '>hLbE`KvDnZh9}TZWF%vj&90&mQYUu!Ihm.(42%r{)!enj;pNi)t3s@E.M~7LUbg' );
define( 'LOGGED_IN_SALT',   'P(!h889xmfb~<`FJL5_}{VafeyD p7AF;|6j~@4j0*<iFUNH(xgtmp0%%$rNU7}k' );
define( 'NONCE_SALT',       '&c,N?~wv`WcVU<p_fB_n<]1oHwE?a%Q+8Lvcj9&6;#%H<w%2%hAIZZs*<vwiY XP' );

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
