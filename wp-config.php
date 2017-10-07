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
define('DB_NAME', 'wickedyouth');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[#mJ?>.)}f9R:Y#,{0|#:7;1_*QSx9@7Yn$;u8QQ}4o;G([@Hd/dK^HZ[kO2lEv6');
define('SECURE_AUTH_KEY',  '&c^5R*+b>Pj!;wVo8#(T XP6+Q]|1Ye_0Kk2FI^wkFuVGex-kCz/n@udWQ6rygcG');
define('LOGGED_IN_KEY',    '^cOW<#L4=GXc1lLgD6iXU-#&[;s)P?Dx|Ly08[GsG=r=/cK%s(T~#Ovg)DAxeqMj');
define('NONCE_KEY',        '#fJVaWZ*?E~7LR!^4$MH~X]iE_]#m^c(G2N_52T6>Q&{1%%=HwT3aUU|e1Xb>E.J');
define('AUTH_SALT',        'oD<JfiWYB-mAN/}}=w5/^<tZI(k_6K(1M4 Dqkjb3Hn?XNh-Q>&mFyKa{~EW:w/.');
define('SECURE_AUTH_SALT', 'Md5u)&R!AE+-f}JZgbv|V)y[j`4m* M| Clxt(Rn.6^)d#(IEP,V5{kS.$=8R-i.');
define('LOGGED_IN_SALT',   'CZ1]&<QF.(}Hm-<m86sv&;?!btWu@g[MYeItxqSU])yJ2_vQe95RAB[uP&&}p|=,');
define('NONCE_SALT',       ',TcOK)?:!t>%w;8VI@UL1pMFh(WSnb|2&L7,zK:y[_]-h/V7;ZtS/Ai( oXg?Bae');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
