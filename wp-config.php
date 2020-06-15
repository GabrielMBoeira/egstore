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
define( 'DB_NAME', 'emporiogalhardo' );

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
define( 'AUTH_KEY',         'lKx,)IiC$sXe^hzR`Vcs8jo _$fruExXEyerC{5[z5&Ms#k4i$0`wpXQ?jHmP,nS' );
define( 'SECURE_AUTH_KEY',  'f2Pck<,{I(7%I3x_Y2O}D+2|iQygFsvQj2tN_OYO1%@)e7Vsl,m.jYXMMVc!>3dV' );
define( 'LOGGED_IN_KEY',    'RPXfemQmSKl7M{+6A?,}9XLDXdQ+bG3$kP&k#27rOIOu[u=Zh3m)|LUE Ggg#-L0' );
define( 'NONCE_KEY',        'v+m_}D0s7buf2b~(IEqABMcfgGL!,hF?CwSo@oujIofD/iHwaA*{R3:1<+Q[_C>I' );
define( 'AUTH_SALT',        'G0_Q45Fvmtq}@fynre}TSLifbcM#>]vBRCt*Fx^KT1rzv<bD;)2pZ@jc$t/p,W;K' );
define( 'SECURE_AUTH_SALT', 'K^R]GvwT$mg?:#%< oUoQ]6TmOC}Hf7&)>n{$W5)qlE5~q0+tYA;Tbwp^}fnKNHs' );
define( 'LOGGED_IN_SALT',   'RB+HOOc/ky:3vF4 7.a.tf/4|-xOKI!&yL?kTwPZG_TUe53WHCdXRcg@{J0]l1v,' );
define( 'NONCE_SALT',       ' JD7u:*mx]`0SY~(N?3(nN5MZ^~gU,uBut7E{ef4/&&8AeZ?.&9qD?{<C^uNKJ|5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eg_';

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
