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
define( 'DB_NAME', 'panaderia' );

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
define( 'AUTH_KEY',         '6/v0[<x4Sjn3@UoH>g;Z8<a@cH)_@-yrUi$vJ>n{%<T,]<B<;W_%x6dW-$/Ki{}e' );
define( 'SECURE_AUTH_KEY',  'S6>f)~yg;h#1f/JVE?=#g8(h%-Z[h0N=k>M{#G8qs8n*[%dDAhv(C @z2,il%Zi;' );
define( 'LOGGED_IN_KEY',    '.mLnyl2R>J8m(O +RcGuh%,Wh&T^ENtZli!:y}EzU|VdcS,j3u0j~T8 S;7@^AyM' );
define( 'NONCE_KEY',        'TZnEyvg5~]UUGU0rqs!|jmQ;Z(.$lAGR7B?ZkWT-)8^MW5^Gm_AVZt4%NP^`M*eS' );
define( 'AUTH_SALT',        '&l7/D,9O(tG=bpg>O,Zp3OV[@pO=^G?|bzz*unpB]B$Cvgv[$U>%DZ6i>)#>yr>f' );
define( 'SECURE_AUTH_SALT', 'HaU>:[xkUw`5Q^U]^`(:z2tY]51RvYCg.*j*UGg0o@hudEd8T?i9HV=L% @j;2W}' );
define( 'LOGGED_IN_SALT',   '@d$I}^/+@2!#`d)A+>`H=,OlM1!%Fvm?652}W*3Fir$Q[OAv@<VU X[_>l&@ER5O' );
define( 'NONCE_SALT',       'tMx`|gtT~!}fpAfH`>*oYaHIf OSlfaGJnsvx`SI`X p<pZwTOKdy7iBKtR48iP@' );

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
