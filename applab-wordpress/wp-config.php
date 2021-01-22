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
define( 'DB_NAME', 'applab' );

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
define( 'AUTH_KEY',         'Ya&nAh3Q[rYP9Z|IW5UQFC|3i4L1(gpt==[U*^xE`nbnWNaYD4l1+]F!Q4NaGjj4' );
define( 'SECURE_AUTH_KEY',  '+<G{u!Y|rZN2o(K_VXEev nryX;!Y])7<+3x{rv!:8r@d3@.c6-}+N( .?q&Z27M' );
define( 'LOGGED_IN_KEY',    '/OzwCFe-Ou$7C7PaAxe`.B*AEyqWINt`2,Z(<@2a#M82rW>mrA;qr(F+D=p[kC9a' );
define( 'NONCE_KEY',        '!A20N`SRS$ugg)|#2H0Q=4?!1YpN#ZrxM$$Sd%ud/tjxx:.#}c+:GyUu&F-xsU?q' );
define( 'AUTH_SALT',        '7.w^bfNE|hM(g*@ZWMx:/A9KgZ&swEdTk9FCjEB?y#2g1J93[&+pug<eB$Rc&/N:' );
define( 'SECURE_AUTH_SALT', 'y=#*uoVzdgR88xr=]A$:uSVlc3`rR~OqqDZN!Lez,Hx S}-sUWVG)vK!Rj(1t<[)' );
define( 'LOGGED_IN_SALT',   'yx?+F3<m^!<!#_p4?@bdbn2q!`>1%ZYiMdt_~<r^Ea,@eorPWJf-_?%W3Lj]7Zvt' );
define( 'NONCE_SALT',       'Q4dEoY9P|};i>+?bZAv$a(~):R:g]K8u+Vu9I<h)=.P.!O$F7>b.4!!{g_yuKSJq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'applab_';

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
