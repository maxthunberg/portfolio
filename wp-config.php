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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maxthunberg_com' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'B1BYIK:+c F{V~xKQYdNq.YrUDQ2Pz/yb0G48A#q1)IC!Sp @p.8A}o0dO)a>eN(' );
define( 'SECURE_AUTH_KEY',  'o0bO1@^r8vePm.j21q104=B|.G/m>B#;z~sX%(AvMem7;3ITeTZoI`nZ&V![b?.f' );
define( 'LOGGED_IN_KEY',    'kV%$X`Q*H5V#_1(EBp7V]2Z!-DJ[Tw:}8MCM_]QVPmmBH?7A(pg*|=CctuWxOcJ~' );
define( 'NONCE_KEY',        '.OEd=lKtZJj(+.==?>LCp%f:deZ(pr1<ip#hm8Jde(1R|PAX_9_ij^JYbO9@jN3-' );
define( 'AUTH_SALT',        'KRJ<J3y?6!+A83*C_/?Z7m?q8T<|KC]#1wL]^UIsGuN_|EE-Ob_7DoOSyabdV=~T' );
define( 'SECURE_AUTH_SALT', 'yII~|v-s}c]I#|J4:)e)7?u-@fnYVj<OYV7GT0)5esa<G0k0[@FAF!Xe<O59Qb!k' );
define( 'LOGGED_IN_SALT',   '-fCFd2pGPtg%7OW:[jmxZ`q(ie!`1vg!~Q$L^ }I ;##KDH]s6}2GT_EV0}lQF :' );
define( 'NONCE_SALT',       '86*R%:IE*sIh-X)^oHeA@bYN9SU#t}F_<a{V%rCY<9U7u+}<^)@X=w8.XSe&d4[Z' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
