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
define( 'DB_NAME', 'wp-blog-2019' );

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
define( 'AUTH_KEY',         'X!3e8#lXO7/=;~y.J%yE7D>/Np,N4,Vn|dJ>Ui8uw;^jw)>j)~%QkEJQl~L&s<-?' );
define( 'SECURE_AUTH_KEY',  '?t#]bQ^|X2oRZVfWu}EhnuH!M1q7l+_H{4lYO4R/v5Z?^?Uft=2mxKeE%/!w7lCD' );
define( 'LOGGED_IN_KEY',    'gu%XqUq$q$s6nT_uLG8*QM<5&DDvp|(U+E(Moa9UOmbKTZ6o/=~1cgqhS+)6c}I!' );
define( 'NONCE_KEY',        '2wmVkzEeMe%r8ZG{:Ag<j{ZfqJvOZ%hSyr8E045^7^1u~C0jsDBD /fc*reZy=_I' );
define( 'AUTH_SALT',        '6ig@LR9C#M+c,!gM:Vi*Jw:5:S -g7F_< rVW&qWfI=A$jcX1/]~P{.y~@+:@&{L' );
define( 'SECURE_AUTH_SALT', 'M/PG*}_5;VT7-bpFmMA,1gYesH}$0P[2@kKP M<c-9]PHUjy{i9tvqlPRi_gR$+n' );
define( 'LOGGED_IN_SALT',   '0D~DHXjcOAc>=#|&|d]Y&IcTw<-?!i -N.q3cyuNJ!Bc/mmTlIootNvB#@vE/:F{' );
define( 'NONCE_SALT',       ' g3?g0%T/f?$EY#A; #C$wJnU4{M2T$h`}Hd@rf *@MWdyu7nWHAYoi!+7#8a+M}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_blog_2019';

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
