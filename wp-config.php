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
define( 'DB_NAME', 'otomotif' );

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
define( 'AUTH_KEY',         'ztX|HQd@>Swj,2(uf?j,t=MfD7XMcf7BTz#(d(~D|o5@Y&1PUFVE84XXTnE_5GWN' );
define( 'SECURE_AUTH_KEY',  'P{PcK,Fu_W/lk]C9liByk_ej-h~rDl>lVbP%!^?T2s#k9>_@m_(#<i^{X#PF**Lm' );
define( 'LOGGED_IN_KEY',    '2d$0x(2:_?`peo!]}RK5=lgIFw&jM{quSSBvv%h!<,>e6CEuJ,`P$&,h5b6UYmq:' );
define( 'NONCE_KEY',        ')`BsskL[1T5[n^}.R_6#|,lirtxAS_0)B;3=e=b}rj}BM,G$i>/mtQqYK{zZoq{w' );
define( 'AUTH_SALT',        'nXfPVAh!Xg?|:k6`G`uR,*KkgSAM:vkW$lk!Aks(;JR%)(jRrSRB=^jC1L6C44Wj' );
define( 'SECURE_AUTH_SALT', '3G;vwC{4i$HETyF QJkv**6e@I- c0xw%O5fCXX5`!`o4&H9|evsNG`bZKHONjv*' );
define( 'LOGGED_IN_SALT',   'WS+3B3[KZx28|/![d7Z2V#vNLz!2Cy=lq_1a*8)V.`/)Kw^1<Mp6UPkhK@ hXW>a' );
define( 'NONCE_SALT',       '^bJNOW.4qp^u/-YB$i=&VlXjr>/!^9.(:5|/N}fy5kLB!<NEge>,@Xr6J)_/|cq,' );

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
