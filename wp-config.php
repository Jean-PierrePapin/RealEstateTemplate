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
define( 'DB_NAME', 'starter_theme' );

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
define( 'AUTH_KEY',         '|N+x{4 0ErlGY3HxYE7s9n>r%^bWF9;xO[9Wo)-~*KRona]LxpyF#ig#&~&.RVf7' );
define( 'SECURE_AUTH_KEY',  'Xgz~68`<ELlzARxz:FS{rES-iE-gj48uI|y/ m]}/S($4;1n}Il_C5{sMCtpp`.*' );
define( 'LOGGED_IN_KEY',    '93/[6{m,]~Tj3$copB.`@Wf;bEg>{x]k<+V|eU.}@_.*VU=gJ=mfs+lvQTI}PXr;' );
define( 'NONCE_KEY',        '|uS<WM+7M4)USt5*;mn0iLnmNHF0l0OALe]n8+swey.[4Xxht.$O#X$GSSmSJ<~B' );
define( 'AUTH_SALT',        'R/U$A%Aou/?2zn)($mzuVB^;}nMOO6iDxF5%wOa+N4=l] 5bsk9g Y3e5.V))fIF' );
define( 'SECURE_AUTH_SALT', 'l)1c,=q({zM^6S^rL#LGPqxTPo_$KeNZ,pCD[lS/qZ/dqz-d]Y Sw D2qk)_)aT^' );
define( 'LOGGED_IN_SALT',   ',{3i5aNNiU/ZWaBokleI},:zyobE%M7Zt7_~F,gqHCKUAA`fV{4O>lW*K61alt@z' );
define( 'NONCE_SALT',       'GM$sDo235!YNhF3x*@hr+Km756~&l,B:m1}njL.f%,C@!pZ~NK]Xk}M 7aGK3-CH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_startertheme';

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
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_UNINSTALL_PLUGIN', true );
define( 'SITE_ROOT', __DIR__ );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
