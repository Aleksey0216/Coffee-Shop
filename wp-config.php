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
define( 'DB_NAME', 'coffee-shop' );

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
define( 'AUTH_KEY',         '4niz;{;)aFo;3i}DwA-$h&-4JqA}VBRGHwytU$ KOdy]O^Lfx`~Z^d1PdQUuK|X]' );
define( 'SECURE_AUTH_KEY',  'dra7e[[Udo=hJN{)~Q+h1O)41@?<d br>C)Gd#7.lf|Er,kzku*Tzggq9VByEt!b' );
define( 'LOGGED_IN_KEY',    '?F 7T!9QKJfZ|=JxHQRhz:=}yGx7N|F9aLjeYZW>?*S}u$;:-y:6C+C|9QqfrZI,' );
define( 'NONCE_KEY',        '.3(2]+h>6}hy}wsaE}pYTzI?2TW0 Cn75/${dVA[HJ7B6lvcmxzJxh&R)@OjX//>' );
define( 'AUTH_SALT',        'v%ZineME.m}k(FB3E*Z6LP5(}}!+0]WYJ?QSC/_b)dFM;d^Vz3B3n}DkuzY@CW@F' );
define( 'SECURE_AUTH_SALT', '8IJ1#};vaY9jByIU#C=|LdO0 /{La-rv(y6u73W-cYLOyS|j2Oq?K1X$Y(&$hHnW' );
define( 'LOGGED_IN_SALT',   '@O6OoX>L*~KLv5J`o@:U )?!k-tx/EOk9#-:|,O2yMfSJ_C=)onv+[8#1x3Be5TU' );
define( 'NONCE_SALT',       'a>s6LXHqPqvZGc/FV`zWZS?qTl<@6*|sPK.]Nf^mGqK-LjrZZ}!l?_vm#w@ZG2W9' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
