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
define( 'DB_NAME', 'envx_db' );

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
define( 'AUTH_KEY',         'cl|VDV&aY{>jf7]knQ#S,s<rJj~vW=c^t YpOqvH-SSN;qh_&EZ)2?d*a ocH}{Z' );
define( 'SECURE_AUTH_KEY',  ';s8d}0R8~vggdbNj;okLy..WrV{;l-nx_/@UVLQ~M9Ug|ab9f,;^8cM&:t`]W;A)' );
define( 'LOGGED_IN_KEY',    '>nZk:dFn-mLIM,55$l1KQy~mv<Q@=RQ,HUa0~||yFM:ie_;Tw^IGxp7Ge4~m?whJ' );
define( 'NONCE_KEY',        '*36)3JXV6zDj6>`V%*&IV S)[-qaZU7wryG f?#Mtm*v@X>#o:K|)}0mVk>[b%[5' );
define( 'AUTH_SALT',        '[pw-js[6wHGOVlYj>MLaH1JGF};y`0tYU1=m~z,eCB}*$2&:ZW}ZK4h 4iIW5JH`' );
define( 'SECURE_AUTH_SALT', 'kU)$H Q(A&K]zKyaE_.c9W(tMyEdhD{U6C3.=Rc3zT^z2MTGtv#EWU mA$3G/r%*' );
define( 'LOGGED_IN_SALT',   'NxPd<_Y>y%&j+[j(yn@VLt] r3yyK]W.AZ%.p>P,{{RCGG#_J}k{=[d fk1H%vr ' );
define( 'NONCE_SALT',       ' CK6uvUTV|#TvH#fr26d%Qwc(_GTV=zjgb.MwJAP*t#Dqr:%T7c=J~L8xpc #vF$' );

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
