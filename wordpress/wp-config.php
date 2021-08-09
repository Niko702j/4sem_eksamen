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
define( 'DB_NAME', 'nikolineen_dkkea' );

/** MySQL database username */
define( 'DB_USER', 'nikolineen_dkkea' );

/** MySQL database password */
define( 'DB_PASSWORD', 'siXD+me0<3' );

/** MySQL hostname */
define( 'DB_HOST', 'nikolineen.dk.mysql' );

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
define( 'AUTH_KEY',         'rSJ>bQdr.?2#ll$b%K:!v,HgH;qVwK<w u/}P0RE(uG%rl:PWE0IQ$HSU7V,+hZH' );
define( 'SECURE_AUTH_KEY',  'R@S3^|<k*$p;(!Vs^?]NNA8%wrP+<-5:8&t1hi/j_b?Kf6>qdL.ojA}nh0D{Y|g]' );
define( 'LOGGED_IN_KEY',    '?bA%;m9K@h~NKi5-/:FpC]GBUz#wj_EzX{d$r,xt?sQ;xr5SI>HC(!-.`DMSl}X7' );
define( 'NONCE_KEY',        ']s=rIU-F*Sdui#Vex!RhEzsV+e6d]@?Y: D>LFU#KgbqcS0fs(s$qS:IlaX1mA9z' );
define( 'AUTH_SALT',        ';pzA[q>PIGd{-0JQfDJljkIRwfRqs.;;tvJ`b2T(k1<<4w=&*Z{Nl60{Z^ZFavP,' );
define( 'SECURE_AUTH_SALT', ' dM by$]q _0Pa4#S(F|)Zuw336_yOJ5k$D[Q[L#a_kR^S(?1r5K&ALEYw](qT4 ' );
define( 'LOGGED_IN_SALT',   'g>13^!0?V0iQL_QuH.r@g]F_/dA<tHv$M(l_EJwA#)OQ!y=]P%q~g/*ya5VSoXyK' );
define( 'NONCE_SALT',       'h%r@3$kZ.=iUyVTqwcixn.bOCK2(VyFzYwa Lm9h$6%Z,yi05k0-gg2.E$C5_xWd' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'final_';

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
