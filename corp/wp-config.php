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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

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
define( 'AUTH_KEY',         'IFCK13Mn4g}-g1LU5,>*S}9uuKF^fo/ J<<r;8(5PG5$u|!;Ze>Ckl`KWB)]$Z{$' );
define( 'SECURE_AUTH_KEY',  'uzk{9eXbJ9+dSD_Lpj^V7t~sy7NXbB,6)#:(h53o>j=fHP*l9!PD^*I+@?(C)`5~' );
define( 'LOGGED_IN_KEY',    '2RRtB7UIobKq,eU`DXs6AOSUv-KfpFNn7tY|)+bu(R<p5hru1am{Mn4f*.g9[:}u' );
define( 'NONCE_KEY',        'muxX$TxDk*@[w:3<aOMIs3#aPlCzmb06=bD!}i_6F[N:Ls*A*=%ydF$W_N%&Gs]9' );
define( 'AUTH_SALT',        '%5A:gv4kurjG~8yz{P{$97LXg;6s?Pb(8Qt%pJ`7,~#ATTqwR1A-b.$Hb4!;:H.b' );
define( 'SECURE_AUTH_SALT', '8>7u!4$`Nu>!53ujNY;Uxmk<e<buPz){:`<xi`s8egP,G!odZYnWMNC-:Pbc~U]a' );
define( 'LOGGED_IN_SALT',   'tfWjiI0mK:|$|-[w^Gkf%cR!>twZ,7~G|8=A-*4kK-yp=kYm]_!D>gxBA8}iPHZu' );
define( 'NONCE_SALT',       '5_v@>[G)U.-><2A`i8n%~mg?j~]up)tx(666bL [1E$ Kw/k84!!(+tfNdR1(TC=' );

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

define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
