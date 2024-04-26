<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webpage' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^u-I2R+1`|E aHr(yX4@uQOkw]bt;0*mBE^o]}E)~w Bi}w>MKWx=]X5)*mRiZp`' );
define( 'SECURE_AUTH_KEY',  'SP@VRh}!/#qM+QMp 9qdU!6u`>4M}}<qbYB3]SMj#TyT9HAi5Vh8q{_&eNoRHPpF' );
define( 'LOGGED_IN_KEY',    'B}5&!t[?crT$mY~+x2@IS(^e{bKXFYKhn=i)PEwRAej8dr-=?<!!BpLr))Yn_Pi-' );
define( 'NONCE_KEY',        '!Mcu_mJTrK]M9`ZEN!Y#no_NllaJkkjI9P_*dO);A6naPA{YBQaMF/N/-?!GV# g' );
define( 'AUTH_SALT',        'K%/PU~]5M{X8_)MkR){; =q?=IKj#{>VBl>{eGx3dY.1XtGt,E!99Pn~qVblt[:A' );
define( 'SECURE_AUTH_SALT', 'Y(0weqZA/J?1Y0Pst~O(H]>j,MCU^{gl89u(OScE4#.&W=J#ZDmMN7}.U{;!s.?i' );
define( 'LOGGED_IN_SALT',   '0sXH1X}f].S42URF.c@A#dDJhYwJkc](=U%hX73MuhPTOd^~udY cka[%g,22xt>' );
define( 'NONCE_SALT',       'S.hAjmG7Dc8[HrD4PL$S75Zcoqt*seVo#TLp{XkPIah0IVptp4V?I;14&^N(|jpR' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
