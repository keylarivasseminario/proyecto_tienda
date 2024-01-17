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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'proyecto_tienda' );

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
define( 'AUTH_KEY',         'U.k.y2c`>(9*)7jFQ3j :}tp,z);Yi=q8^klw~Y#B}}WdGep*`y0~ihS7WGnI|Hx' );
define( 'SECURE_AUTH_KEY',  '>W5PL+ &_;l;a>(P?6=!7GN4ej:l?s9u>F!$_8?d)l7]sbI/*#1Qmcd]-TTp/H|*' );
define( 'LOGGED_IN_KEY',    'f48UqdC)x9rw8.G3B5ew%~w/p9/b;+vxXIA$pA;I{`d^L[[R3Hc$zJ44Ju]YTnx$' );
define( 'NONCE_KEY',        '@(P5MPDJ%:VL1?%1X)]c!v~Il(rNHh-s,?Zc9I)PvxfeCX4TtLh#Y9;r([{7nKeD' );
define( 'AUTH_SALT',        'skN,918tb!N+X}}eOOfVUk(.Bv1?Gjc0 zXL4n9sR38z<[Dp()LMmZdrQk-N(9>p' );
define( 'SECURE_AUTH_SALT', 'W+$Q{E;Ko3?KDeyI6?bMD~UJ@5Vp$wVy2d+ 3pGTe3oI?@3^L:jN`X&[N5>z|?D:' );
define( 'LOGGED_IN_SALT',   'QrG89.PMyUB+wk=,XCcs>*e.,l<b5P]AxLWYzeUE})E+GUlcZZ-]e+DbjHW*4mg{' );
define( 'NONCE_SALT',       '*:.dPwv!OJT1*V6M #9J~AT&0]zN>Op;L@4>ST(F}(W?Y|XWZ<[i.9=TIyfV(~-f' );

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
