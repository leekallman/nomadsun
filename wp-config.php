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
define( 'DB_NAME', 'nomadsun' );

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
define( 'AUTH_KEY',         'W@Tg=:lZ[2Lesi{>ln^uY~_~MLNR@Jjm#taM.YA{e@O@ P 6l8>A<%y :7Qg7R6R' );
define( 'SECURE_AUTH_KEY',  '<J4WG4#bF$V8)8#RdO-~{<a6UL 1E?%Wzp8FKC;`tVjH@&:)E%yt6f6u5ej-u7n|' );
define( 'LOGGED_IN_KEY',    ']A3eY>FOrO8>)>nSK7S_uPe!w.4a*uh!Q^io8aWqDbIJaf@+JLQIWK}S:Od(WHt!' );
define( 'NONCE_KEY',        'oIs|e0X9?(y(KF5SuHTEE_}|5GwTJm;Hu@f-ZbV:OX8b>(_G?LHCpcRlZdDQK)mv' );
define( 'AUTH_SALT',        '{NCpVA}: 4Bf6Uj:^t;R 3bTjx_,3lTyvr_=;nF=Xq<P2o`ri/%IyPD_wQ|gQ.Qd' );
define( 'SECURE_AUTH_SALT', '<TWsgce8fa{zs}p4N Cr{<:U.}P!u;s!OIzoLeVMSO-7q?588YZpU@dg,Ms>0a}p' );
define( 'LOGGED_IN_SALT',   'KD|SC_Y-YdllmulvNj1htYrY)L_t>jAyZAvKts~Hiw:C W:T3Scs{ZL [bRNV|b ' );
define( 'NONCE_SALT',       'KD1581w&}L!+p2Lu-gt/=K`51#&Ar:g/1ill}T>hCt$hc(,4&@s@Svi^W+m6s]HL' );

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
