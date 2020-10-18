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
define( 'DB_NAME', 'wordpress7' );

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
define( 'AUTH_KEY',         '9-gNdpJ&|n+}!C]Pz p](WP`ANM_)k5Esv}buabsrmBJm3AJ_}xEv_@-yL9@8>1O' );
define( 'SECURE_AUTH_KEY',  '(E1$BXuL?LqY(VE7qI^6TD9NYeMq0<r$fE-7Y>2O~|A?C1wlv2[U$wGtjjpI;$}v' );
define( 'LOGGED_IN_KEY',    'T6s?+emv#L`nMBpt; Yk4|Z mCkj[CWL>M a(6$rZfZ8Kg5fNU<#n(0;x#O,Ld`s' );
define( 'NONCE_KEY',        '*CV{HIPS+|88Ghp8Ea.4:Dsi/CbPjh.nWovI), a |&atF<+{F}:K>zqa Qlb+W$' );
define( 'AUTH_SALT',        'V#xCT1KS76Ck2#IScN4YXb#D8}Q@T)c*uP8bkeqmp>-X`A5|m#~JuAsSqZ>r>9.7' );
define( 'SECURE_AUTH_SALT', '>-LG:(: lA@_E;:<n?s-XuC$eI({hrVczAb` tzozgns<(X#w&&f.zmEqucH 9H@' );
define( 'LOGGED_IN_SALT',   '{_?g>hu|r.s8y6Hgac/e~M7o=$P5VX9Kjm67hEt}Ag8}a#,owqt!TG%JnP_J=oEK' );
define( 'NONCE_SALT',       'T4(Q6+;o*5GFG^ciezy1Ij:YHWeJOB/qe7KGOGc8w`X}P73QX,%Dc[rb8rv1E>AF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
