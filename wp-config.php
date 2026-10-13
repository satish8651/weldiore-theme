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
define( 'DB_NAME', 'weldiore_db' );

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
define( 'AUTH_KEY',         'G3Ot9Ds lA9T>~0<UF0.KcFiW]oA:PFm0GCY?)n$`_-{uiy/INEqR(Pe*=va*83`' );
define( 'SECURE_AUTH_KEY',  ':2Vmd>fw:u[x];6W-jf?F8RvM5TF&lk;_w= 2?z=o@n)]|X`?AZa>~zK|gIzO)*q' );
define( 'LOGGED_IN_KEY',    'De|ihI9RyfuR_`&GZmw^*D|w!Y}Exv9eWc^<o+lZgGFe}WTV;_T`a!Cf?@J{^#Q#' );
define( 'NONCE_KEY',        '9<m)%3-%Jwm*#j!kw= _zSEm|t/kWYg2SbR[OiBl5Go $d=eMrx-RY{UqF8dBSY8' );
define( 'AUTH_SALT',        '-Ly;:~%.-u|gDbbW}8E)P/gQ%20mOm&mv?a>NE^uNaS$vvi}Ua~rnCzr^~jl9nv2' );
define( 'SECURE_AUTH_SALT', '!Il*M,Vo1b8qC0wNqiY,2du?LAEUGcN1B/w1}R:]~rOhYL3dB/6gb?HE%^n*Klay' );
define( 'LOGGED_IN_SALT',   'VxV25Jp)k&C:%%YQ%AIA8C>WsHWYux|oG~+B[Z&Kf]Q^}rO|bjQ0T3u(V|&uq5T)' );
define( 'NONCE_SALT',       'u_6FCV!~f;i T27W{Yij{,rJn&RUWt?bS4)C{e!H5gb(8A,Qnc9zTR9AFA:Gq4(/' );

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
