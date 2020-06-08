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
define( 'DB_NAME', 'userdb' );

/** MySQL database username */
define( 'DB_USER', 'db_syhan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'raspberry' );

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
define( 'AUTH_KEY',         'ZOMB$T!A5b?2v!J::;LM<OiM1=W|`HH|9H:0ETi] !;Y#=nGep<f~809jX-v~[tv' );
define( 'SECURE_AUTH_KEY',  'c G3=UC/@$1^?pak<cJo|0@ZMkn=KtfixjE`D(Ga}70WW;39VZP=^n2`KsMTOX5y' );
define( 'LOGGED_IN_KEY',    'N0jN7;?+`l=X%agYw-#XY,s.5dB(35BogbQhJWRyEspT[$5<h>)$#HnW{BJ3ApYR' );
define( 'NONCE_KEY',        'oni`km3vy,3s#Re+?K=wHfvysD=Y5;1sz.t34ST_u~@A pkJjHiGEB?S<gFlk$!G' );
define( 'AUTH_SALT',        '~T,%i=8Nhmhkpw3})SD1(]&$Qd+W#, H,< VpHC$)yI,G/l!zFx812xbF%?GGkoU' );
define( 'SECURE_AUTH_SALT', ':~}BJ6&7+^m(&o!**)_(HPZIH:Sr]FgL<e~Iz(pka>~=zH#DtT*S6Z/.l_vp_h>Y' );
define( 'LOGGED_IN_SALT',   ']F?Ps#uvUU/E$Y}Zfke$e+_}d4ShKY.pMoP+gGIo&.E:w:t8sPPA=&{`N?Q>REGX' );
define( 'NONCE_SALT',       'llH<#O;Hnp[U]`nKTbV51an2@44jB8TUDc-$Hw}QWlAm>$({`k!>jvSllrRNZeA_' );

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
define ('FS_METHOD','direct');
