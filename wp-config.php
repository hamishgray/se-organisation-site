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
define( 'DB_NAME', 'se_organisation' );

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
define( 'AUTH_KEY',         'h+f:&6@#UaEY5}*-45SEca>.OpbC,,vOFY4&`~6TKFvP:J`6~jr.J5oXTb,}d*^S' );
define( 'SECURE_AUTH_KEY',  'pIZZ{_3V{6[#QIR8fO=;ni@hlK~l-]w^]1POuB oxFjLo =tV@]u}LIF)D}O$hS4' );
define( 'LOGGED_IN_KEY',    '`~YoLD|JF;<o;u,NaKP}!=R}g:c2$xJ9L<%+Duff{jtS*h0H&SiH;}m([wY`K}(K' );
define( 'NONCE_KEY',        'R]ur]}m^ocXMW>Dm)}{b1{{*5h_6$W(]b@f 8aQj(.XO{0If+Cy!Gmg.SV|U1XY.' );
define( 'AUTH_SALT',        ' =XPMF8>6{sh=0F]@G@>C~Bu1au<7/m-{fWIMPw-E!Q#`vmT&$~j&QA}<y2uJ@2%' );
define( 'SECURE_AUTH_SALT', 'K3mhs1,[e}|_Fj:p[,^.ewd*,0mfvX6}aF:DvHRBhY6+vVN/5UM0.sXGH}@_0+|J' );
define( 'LOGGED_IN_SALT',   ' =v-J8]aUb?G%1$PSbCf8.6^mYM~)a/X&pkzIdE-m^J#[)M]-gOT9eT?ac>e@:P-' );
define( 'NONCE_SALT',       'm;25JZ+(u4Y)w8J/@~*T4%#N;tPfXoivyMoxnA(+Q)TZ| qoL4Q_IK-7/lm%~j0X' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
