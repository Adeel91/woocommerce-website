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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin12345' );

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
define( 'AUTH_KEY',         ':f)r,mxmU~s.pb{Z]4%$gz*sQ`](,M;Rc0^l{`YiS`C~qQPSlO(eF {6U$.}qn=b' );
define( 'SECURE_AUTH_KEY',  'qhsjYm:eh%@gv`X=[c=]&AgS6z:R)ma#S)d=Y6<4l*#:r`GIfc[A%kMrR_r]y{fH' );
define( 'LOGGED_IN_KEY',    '*^jA=Iq+zmY=9I}ux{^@#FyI-g(2[gjcn)ZE~(4Be}|.UW*Kxs?6A4h2Z`7o6H7F' );
define( 'NONCE_KEY',        'T/oGsoI6LE9b}vYl<MeWTPZ?T7|N`@T6./BaZi|L#%&qm~HX!G$|xUL%s=4A*{]}' );
define( 'AUTH_SALT',        'uQu,63l/PHRE2Eu];VR`NuDaRV<M-1@<lLcj{2NG[wFPw~F%@`!Y7M4W>GH[YhS+' );
define( 'SECURE_AUTH_SALT', '1<n47QM@(#!rxO=.E1w.e0iGC)/2kH#=AC9m])h!&z9/Vrc}^wg0<w-E$aoo@*0s' );
define( 'LOGGED_IN_SALT',   '.)}4?1I.(lE4 4_;UI@F^sXv)`{@]C{W~(u||^S8OSR7PYBX5TpTQ!kJ%%v2XKh-' );
define( 'NONCE_SALT',       ' [iG1e=eUfC-ycH%dt6Q(Ab.h:5|G5.^z!3v1[$5^)u!G!?GM]<Pj3T_9+IiPm%7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
