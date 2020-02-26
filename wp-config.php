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
define( 'DB_NAME', 'zcgwf_pophouse' );
//define( 'DB_NAME', 'poptemp' );

/** MySQL database username */
define( 'DB_USER', 'zcgwf_pop' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qw7yM7hNJmy4YVk' );

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
define( 'AUTH_KEY',         '`**I!8a4RTeCiAF_gIV{db]=nr!R<e}e !3oOGk5e%mf/G.6s{:BIjllT{t]cli`' );
define( 'SECURE_AUTH_KEY',  '<k/P%p(Cq%F)#B1,&MAwU-%wi$Wzay0Xk>sX+<a61O&Y0t!qegtt1Nwnf)>.5x[$' );
define( 'LOGGED_IN_KEY',    '(,qy B=LCx4J Yx?mg{ydB=h $x4f/u -D;`jH1#oSqK}hi#iSmUF%dj&,jeE]4d' );
define( 'NONCE_KEY',        'a+ 6w4h#2(isdMX+?,`5$p}$Ts,y+Y=}2mhu2&TvOC:`*g.U@a8N A&BG%9R?,Md' );
define( 'AUTH_SALT',        'k##%L+Z}>}ASb<V 9]|S1ocJ@EAzSpj]*aV!-})*>&B.X*&%!k&gRg0%+g`X,E(2' );
define( 'SECURE_AUTH_SALT', 'VZgiFc)] 8XqEt5=T~mC=K%D9HQBWRdM@m59PwM+/0,CFg3o|DnZ$ 9h,pWRg<va' );
define( 'LOGGED_IN_SALT',   'bLo`H`JiLy6GL]K1G``1-DE,dLx.l#gg[nB>KBm]epXzewM,3&iaFa@,H7!7z60E' );
define( 'NONCE_SALT',       '@R_<x,C%];%ymBnXk],fFJkwS2@F]YIi{w4978 %F9Y>Z2,<~yvJCa%7 <geR*4F' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zcg_pop_';

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
