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
define( 'DB_NAME', 'sql12394325' );

/** MySQL database username */
define( 'DB_USER', 'sql12394325' );

/** MySQL database password */
define( 'DB_PASSWORD', 'A6LGnMWHaP' );

/** MySQL hostname */
define( 'DB_HOST', 'sql12.freesqldatabase.com' );

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
define( 'AUTH_KEY',         'H!&l%c*q03wOPs@YfQVPp2}uiBGRHEN*=OPtevm[e!n27*{] S1+ @a0^Hb_&rW&' );
define( 'SECURE_AUTH_KEY',  'f`9RVxEQ,WE>~jIOvz&XUmCKD0#cQSG4@~H- &gqyiXr^0E/ih<LYK8E|bS{R)u~' );
define( 'LOGGED_IN_KEY',    'cV&7 l5duSRgU. U[n1=fwFb_T.G-;.Oc#Xi0]>%5rSalxz,xF)@z:z.qNBkr!@H' );
define( 'NONCE_KEY',        '.[{bDA?IG$!%i0QFM1vsR$<vUkhj&47v.@@^C`RP%(;j:`x@NrWHCNibNWLM+TRw' );
define( 'AUTH_SALT',        't1gn:?h$E:F?gVR;e.wx>b;[D6]ERsyTDA%1Bqwu1&-.rr $Y%zoP*R=VGF2W@JG' );
define( 'SECURE_AUTH_SALT', '3]4@HXE$1@%AQR+v&x-;xSxA4Bz3@&aa$95<m%DK5;SmtVcm%Un2>tz7MYPJr[BY' );
define( 'LOGGED_IN_SALT',   ')QRR!p;q?0?zZhd9Tv>j=AJ+ezsj8pp*S#GL]*q~g:Kbr/qYd+g$57H}0M)kz/FN' );
define( 'NONCE_SALT',       '!Uc5SA] 2f4F!ac!z69@#4;_=NFWFF]UChAA0eRi8}apgSio_;|VBCHch9xEK/)Z' );

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
