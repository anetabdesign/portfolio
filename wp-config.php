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
define('DB_NAME', 'portfolio_db');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         ';<z2Mz+&RVs-fTUd(2w-}7`:L;Hb0pioHX>W%1}K)ykvgzf`*QjD7;-jv5,I*w),');
define('SECURE_AUTH_KEY',  '{&ENnKr.,kI`ubu)#4m/Hru~n&rajn8wmyTB[nzoLw8a$`r1fy%Ga?.x-dQ6qwE#');
define('LOGGED_IN_KEY',    '#f@J+0i.;^Jf|uHy5j*Z~BK`Q]y/CT=]Q(YBDiCYES)!iDaq_4{Ez5h=_9<iNb[j');
define('NONCE_KEY',        '{Fb)[ckA ZkZKd~JCYOhZ>Nz$u.zc+{hfoa5$Q@9a2t;Rbuze(B!hkrR&D`i0&7[');
define('AUTH_SALT',        '+VFOn44X-6Hrk7U`L=R=}$.VMUqQ]|GLjykT%xT@Dw?V4uLs+ls:^s1Nc.^OURA;');
define('SECURE_AUTH_SALT', 'yirhbdT, r yvgHW`l8MR1GDRx3URJ^zM]%wMpx$K0-Y#!C]t0*avLO0<+:q)khu');
define('LOGGED_IN_SALT',   'qWiPAcQ~&(2_3s#(A/:s:&d=|~Z1Z;1)]J)jCPuCIvp]S=}O63UmFSG YK<4}=no');
define('NONCE_SALT',       's28~d8 ^56.R6G3I{<t5GlX/1kVeB&a 63xAqyXn4r9X_M7IJ8XfJ&%gg_ShVR|z');

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
