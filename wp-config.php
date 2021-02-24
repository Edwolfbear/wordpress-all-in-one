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
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GenericPassword' );

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
define( 'AUTH_KEY',         'F0v{vHd<yyaVLE5GXY~qSPHSwXF{w1PnB`pqjs=]5ykA;hD!l*$?+)9)K}|[dP$b' );
define( 'SECURE_AUTH_KEY',  'x$AWh<Mgz%,j}^tJIpLl`%s>A`$Fn |~@|+J&Qy9d,utl<`]dRNiWu[qw@y-B*d4' );
define( 'LOGGED_IN_KEY',    '{3+{?]ffLQ7K{YpNS`=tX+%`Z>O!)r4vxgL^&Omb_r)~Y!??)OiZy=0-97@yTp`J' );
define( 'NONCE_KEY',        '@>ol]G*K j4(zsH[&A[9^EDfSYyzwyXHbQ^e$5e<xbEnQln1q//fgpTp4:yRG6fL' );
define( 'AUTH_SALT',        'sX{W^>qeS9WV x<+O.(6~~+m ;|RLGTX?k**!po=&M]uwLtq~IcMm>XM9gws(DL4' );
define( 'SECURE_AUTH_SALT', 'ZII]lzK<4 B)j&z0vh!>0FOOJ5&]hiMSzBFs{l2y`WJc32o>R>`76PL8YQDj Hn1' );
define( 'LOGGED_IN_SALT',   'd+&)t%?_^Yi0L:(<6^>Pp>^]`)J:D&:&FA!]!0dT2KxTk$u_hF:1Nt+Ds2a0jjEm' );
define( 'NONCE_SALT',       'C]qrxAxg}*^}:tF6c/ObOLUJ%p|8`K:)].rZ5$mMqUIy[%.(vXA++>jxhZcxd<2@' );

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
