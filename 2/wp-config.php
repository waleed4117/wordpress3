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
define( 'DB_NAME', 'word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'K3dnwnk7V:]|oWkAL<ut;;p%Vptq~i,(4zk4X[&tRsOzOrOW|$,:&rb}[$0t4R{7' );
define( 'SECURE_AUTH_KEY',  'tC/4;k]VyD%(def}J _STJ`t+>%;/Qt,},ij+wBLld1n!,g<XlK6Abu?.F=W7ysO' );
define( 'LOGGED_IN_KEY',    '_jbXy;;0(@QzuOKzN>sdw.X4?A>rQL uc%u:2-^qoM7O?~JZi/yD-Cl3qQH-)*!B' );
define( 'NONCE_KEY',        '[xz(_%iZ3%x7 f#%E4Js87l+[?RKEjLU~(^JX)[f<k$M1C Z(/^=jBv>6*J(fVK2' );
define( 'AUTH_SALT',        'D[#8x)B+fl !@CTJacY@x*=LeDK0XdUz=-E:T3p=3j;bi$[.M?:#b_}`W9aVvyQ1' );
define( 'SECURE_AUTH_SALT', 'YHj<2o_=[W9!J@f|u)M,WI(zbuRLFI~7LWVziorVJkXjgWzpdeY0vD=qWCFlC!E>' );
define( 'LOGGED_IN_SALT',   'jLX_e89104 B4`?U}Upo-m3@&z<a[g$ZSoTyo$}A0J!;8d)[ 2l=OH&;R7L+-ohe' );
define( 'NONCE_SALT',       'BA3sV$3*ov}>Qx d;K|0y^7T7&aU|QC=lakU>;kSaZfi(k*}xi=[M+(d7-!baz6g' );

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
