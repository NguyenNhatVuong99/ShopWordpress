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
define( 'DB_NAME', 'bantrahoacuc' );

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
define( 'AUTH_KEY',         '{i3N~6ZfYtEMIO346+v,BUZ,Q?-7PNeD?,)z8,;7]#+[ijpIG-0Jes~BRRr%,kFj' );
define( 'SECURE_AUTH_KEY',  'x*|Ca4@O(+Wk5q)2M@o b$h>!XUynM;fkb,h0A$U9it;tLPz,L!Bb<=4]B:E5bgZ' );
define( 'LOGGED_IN_KEY',    't~q$.rlEp+xfJV,;QEex,D/Okd>`h^]oFnp7IE#eqnz5C;~=gH;C#HK5_z|~4j[:' );
define( 'NONCE_KEY',        '`6%P}6Cc)JES7n)C/k=Am0JbfI6AeSPF9.q#iM>r87cs`{+vdus}/ Hmmu+l MvM' );
define( 'AUTH_SALT',        '<LvZ[5a|SrKC%lzE[V{Y|!8Nqa+y;>$aol9wJNoOZ8pS#r8RpbPIW{i`o7Ajf4+;' );
define( 'SECURE_AUTH_SALT', '.[{A$d{%|jJ;[%p`&coA@v:#Or@Zi1!?G&7FV/TzfFVE][R98Y+uu[,I].Dk#%{O' );
define( 'LOGGED_IN_SALT',   'q~+mA4DMkZ+L3RqI*{T7&zZ~LeeWZC^nW$Mr`R,^:@:DS^.4fI{6UT vn604r W ' );
define( 'NONCE_SALT',       'F7(3kiK/>YgB8r.7)s/@6.@u+fbY 7CDrl%+OBD2.hO!X mhQa1$W@~DwYvG|^pn' );

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
