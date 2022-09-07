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
define( 'DB_NAME', 'wordpress_project' );

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
define( 'AUTH_KEY',         'H<jf{iA/;=c`_:jD^NY|z>mzm/1xeIE0)I2M9`0HL<E ^)LAnXywF^Ks>Mp6LIYE' );
define( 'SECURE_AUTH_KEY',  '75E?~v</2jj-mZsXSly]/C5t<.Y*Yxrq]JF%e9A):qu:Kq[eM5Cw)V@4gWgObC!z' );
define( 'LOGGED_IN_KEY',    ',bpn$g3^h_pl`-;9xR380H5)hsviaW?wb:h0{NUi]sMY:+oL1r$vvAU|4WkGN9Rd' );
define( 'NONCE_KEY',        'qe(80$K;YQluxi$Z?63EP4iA-%Owy:|F@m/Yn!D48{qc7*#p:R }H+3PY2t$M}%L' );
define( 'AUTH_SALT',        '/5K@UP x>se!PtS?cA_BN;M2@YbD50t?,cqj,v8$K%l/WEN2}q7qW6yh-05.y1;i' );
define( 'SECURE_AUTH_SALT', '<kP<++c<LWDKCbhOEU.D~]hYf(ytzq $l?idfkecd~!&L:fJQhSK<es:_[UKM_.a' );
define( 'LOGGED_IN_SALT',   'W=`Lu-)rvZwH38P.iJd%xTG-t5sDXqL%9VqXATw*-.G_|k(vIsWhV$<1=h%L#_cJ' );
define( 'NONCE_SALT',       'q/Qe%&J2c9i{ziei8m)MZG7Y`r%@:$QiO@6pNS(U2kL#]j$Qu,-nSE[o|$FZYxbX' );

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
