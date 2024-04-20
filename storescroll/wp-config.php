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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'storescroll' );

/** Database username */
define( 'DB_USER', 'iqbal' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '%;p9>@@>.;d*xJQinMX{$Kr*r5Wr58O#|r(MXYiR%+Xr9d+Y< zaLk8 f&>9i^@+' );
define( 'SECURE_AUTH_KEY',  '$f*&Jk.ZWN)0$b$WBY7mS4]LONO#4kPx}%$su3#8kf{N7P}zmNEa;{bkc6lzDrfd' );
define( 'LOGGED_IN_KEY',    'h:Wa.f4ae{vs7,J2=cg|HKQj `ODTf?qCl4T&=D.KoTs5[41,61f:(#$W$,bj{nr' );
define( 'NONCE_KEY',        '~]=>u6n|hfk[kUI[ZI=s%mrmcHqBDC/P2KEG7>Woo[._;,LM5cwOG4-AZkCMIvfM' );
define( 'AUTH_SALT',        'rG+RRa |}f>-8>Xhn_eY,D_~a9$QA19b(kmXhtn&-%M[iQgT_FMF/xJeb2}$BC$j' );
define( 'SECURE_AUTH_SALT', '~_|C;%-Ihrfa-/%vqiG>>`Q8CKCG]qEeLWydySj.P3$#zhslYN7HRs~1TciGeVpE' );
define( 'LOGGED_IN_SALT',   'QHS[5zDu:EDVqV% F9,vj Y]C6-r0(W($+xQpNtn@a$E(_k&!Z9Rtafn-qgx#zQ/' );
define( 'NONCE_SALT',       'p6 |Kp$#}/F-;i_#j#,xU(pgRTpY(;2UeVHm`g}Mx(Sdp)]s$yP0 _5>d]4^Cq&`' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
