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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '=Bt3I?9x7!b[u7M]-.c=(Cr,acWRtIZh}{6S7b(UqZQ;^W#;kI^$@HT|>a@.!=9P' );
define( 'SECURE_AUTH_KEY',  'n/c//Co:{v~DJ!j__Im6H&<5zn|miDJ=e{_h1$B^uE,?9@rm@D.Sc65]D_B3nhOZ' );
define( 'LOGGED_IN_KEY',    ',_4Mo]IUiI~mLmmY8e^#=K7G %+-3WDHTvZ/ =/z)+C$3)nj--tCDcIcQg_=bGQw' );
define( 'NONCE_KEY',        'GEhYSDqO9s5V#8A];N03H{NZ9Nyl:^7e(CzoWbDSkAa732E3yu|]h_ux>`41VXp]' );
define( 'AUTH_SALT',        '?>G<ERJFbg`?bpn{ESDqXBQ|Ray/%$}o3#!$azw@5)lVpLl`bAf=faxq`#w)ppi?' );
define( 'SECURE_AUTH_SALT', '}U^BU6fy!Av^><}-zr-K$[i;_dPk-Ftg&&gwf@.Rj`~M.LN#Y?8m6s!Qs48D2^U?' );
define( 'LOGGED_IN_SALT',   'Tw|M|~:sp>p&h%On9Qs^N|$Sh-U]}rT32}X3#_WCzHE_Ew)xd~LC;*6$R|}%/|>_' );
define( 'NONCE_SALT',       'ot7XP2GV([(aRuu%eOjBb[.hoL{K^By)eNVk5E{:u=b=eq$hr>oBBx5h*l@}p^{D' );

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
