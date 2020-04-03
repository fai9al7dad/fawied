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
define( 'DB_NAME', 'faiwedprDBucqwo');

/** MySQL database username */
define( 'DB_USER', 'faiwedprDBucqwo');

/** MySQL database password */
define( 'DB_PASSWORD', 'QN3Kkq0QWf');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', 'Mc}8kvBNY,0cn0FQz>CRz|0co4FR@Nc}Fr!8Ks~:Vl:Ckw!NZ!1Ck-:9lx_Od]l-G');
define( 'SECURE_AUTH_KEY', '8V!0Oa_1Dl-DO-#5dp5GS-[DP+#2ep2HS+]Se]5Ht~2IT+{Xi]ALt.LX.;Amxq^{T');
define( 'LOGGED_IN_KEY', 'Bu,MbnEnyEQb<3bq$0FnzFQc>3cr$FU$>Ufr[4cs@FV@>Ugr7Jr!}Ug~[Vhs4Ks!');
define( 'NONCE_KEY', 'vJv,MYnFnyEQbz|Nco0FnzFQc,4cr@FQNZk0Ck-CNZ|0cozFRz|COZ|1Zp-CS-|R');
define( 'AUTH_SALT', ':dt9Kw_:Zl:Gam+DP+#2ep1Dp-#Se]5Hbq2Eq+<Te#6Hp*HTe]6Emy<Qb<3Eq$ET');
define( 'SECURE_AUTH_SALT', 'tDS~[.2Em+DP+#2eq6HT+]Se$<3fu6MyTi;Iq*HTi$>Uf{7Iu^IXj{AjuAMXv^JYj');
define( 'LOGGED_IN_SALT', '!gzJZ|Vk_1hwGV_1hwCs!NhexDS_1h:Dp_Od:GetAq*Pi;Dp_S~2Pf{Eq.P*;eAP*');
define( 'NONCE_SALT', 'qI+;e]Et.T.2Uj3My<X.3iyEX.6U,7jyIb>Xr7Q$W#5l~Kd[Zs8S~1P~2exHx#Wl');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
