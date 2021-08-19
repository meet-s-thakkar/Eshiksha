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
define( 'DB_NAME', 'E-shiksha' );

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
define( 'AUTH_KEY',         'rx l!MjhjU{;:DTLOJ7My2:n{[2U:mvl.*1]bfOY1eY6JCW(C:>^~z:aZL<$NQs ' );
define( 'SECURE_AUTH_KEY',  'z.y-2,xT<j73i;DuZ,G<<~`0+zSeC)YLnpz+=f* _~i)8W(-KTj K`5!&;#,HE&7' );
define( 'LOGGED_IN_KEY',    '(N*n#t0oztxmAiFlFM|lSZf.XH#EL2une@Aou9|.G.BSJR@e4vW<f=BB~?L=k_5I' );
define( 'NONCE_KEY',        '+kw=X>5 )lxI]e|K`@oX*eZ(9!zAy&oZ46rAx~142&R=tuP0}!$<*gE2d=N~22P,' );
define( 'AUTH_SALT',        'ijod3!kC_1Fyb&2,7Z37rft^A}I`i/=B~^n])5OG]u~O4 OrjTSx 6bb1y)97[E5' );
define( 'SECURE_AUTH_SALT', 'PDC~#Ly,n=dY[j8$U7Ni1:jaqPNtpbqsB*KqH;>@=gC]EZ9NrDTm.Eg^0Cp[>/dY' );
define( 'LOGGED_IN_SALT',   '5GF>F(Iiy4CqzWt:VorzAT0c8,|_@0+<PL9CA4wM@ :Bb1x1MMP``x2.]WP]>W,n' );
define( 'NONCE_SALT',       '<bhzo!TnRr$+D[fW}/w8{! dw^O%4XIWAp4P2}u`nXD^WHD5nr:RCzrMNt-pJ]{=' );

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
