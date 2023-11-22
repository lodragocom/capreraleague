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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'capreraleague' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'LXBNldYPQutv93zl' );

/** Database hostname */
define( 'DB_HOST', 'devkinsta_db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'bW`-.m}+we6].ezJwZ| Z,YVZu#b$Zr*1B mXx-B>Fo_80~q!ywHQeG}vfNW[Tqr' );
define( 'SECURE_AUTH_KEY',   'zJzdzXXJpZW]x>cA3IT8?dN`32C~Go&!j1tOl=_iNK9i},A30nft|uU^6?/P|Orl' );
define( 'LOGGED_IN_KEY',     '%sMbNlsrShS;M&cWV( K3DU~^tRH`Qyq%!Ubeyj{W!,;YVaIRY/`lJTD|34{k0L?' );
define( 'NONCE_KEY',         't{]Ct<yvJx,?ai^upvqA.gNj,|TGmee2w0N CPD|8iO$OzV1}Mth,I)[k(3p >~(' );
define( 'AUTH_SALT',         'PNcTT/,wmy~q2Do`h2oW)Wb#qZ|58W|<twjbH,fu;jW-2XMKs=yjtFh^*DSRwb6i' );
define( 'SECURE_AUTH_SALT',  'q?[[&_ex7PKQQO Qz+yH?*94t2]9qjtfs<Wsz{)vCIvx%|9Go}a8Jx?dS,,/ci1)' );
define( 'LOGGED_IN_SALT',    '(y`tg M@ J3xiR(4E(7S{%q#8{hpuZS+j#o-NnYJZ~+xGb{u$qm6[*F0xOv=jj]~' );
define( 'NONCE_SALT',        '1_fq4?g3{!r5L?>IAc@y/Ro,n-kf!sp;VY9E~YN$!VF[vGkR#tmJ`tyMwl!Eo@(U' );
define( 'WP_CACHE_KEY_SALT', 'SSZ4-y &N/$HRNA05Q)Z78P7M{6EaRj5Dnpv>{F ]f6eIQx<WzGkV%|LQRqQ}[e1' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
