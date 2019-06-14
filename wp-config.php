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
define( 'DB_NAME', 'uiinternational' );

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
define( 'AUTH_KEY',         'l.%t?:.XP!2Z99>t6m]XpgL49J6<4VP]vTpC$oG<!?bC]5w7FdGsp:vTC!@uMFg4' );
define( 'SECURE_AUTH_KEY',  '*W6bLETtK0}>byC4  Mi7NvD0<3+BS@$mx}yQ<#PF3gPCMuGWL0YawPQ`>+[Urt8' );
define( 'LOGGED_IN_KEY',    '%2&XC(Xz(IT;N;Jnr)Ku5NO-Xub(0i+1pMU)F}.BvA*Xf@5}+cww#N4bOl<E`F&<' );
define( 'NONCE_KEY',        '>&#,BG-Dp.N`;T{9?.s6k]}i<kNRuA2@1k0QY<zp6y$#,cc$87<U5W1b>NM14;;J' );
define( 'AUTH_SALT',        'A5>1hN oMo9`[J`=6itkQh~04V&0~zEZDA~xMpid&MG.shljDSB?.Wc&Z]Rgi=m8' );
define( 'SECURE_AUTH_SALT', '1+i2t[0-EutRDhe7AL0U@Z#? bpA((Cinj*kYL&m%kyDX0X3A&@I6UWpMD(&vS).' );
define( 'LOGGED_IN_SALT',   '|D:m<.o5:PnRgrQ0xpVkLJG{iP+zvb=t*#Q~UMZ?`vxcY=[$dj{ cZ7]-,+af2Gf' );
define( 'NONCE_SALT',       '$KR7$yZF/$@A1Gfuz`Mv2B9rS/E>4)m~bZ#35[Z4ftsUr-B:yGy(W_~`bA[q5Zh7' );

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
