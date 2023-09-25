<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u869504592_pURgH' );

/** Database username */
define( 'DB_USER', 'u869504592_9P9XU' );

/** Database password */
define( 'DB_PASSWORD', 'gAR7DI7vgm' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ';Y:t{3o|f}0qrgWI2|4CbIww$L}r|Y~@=~In~sy[^>NG$g^>|&2tc;m~Lx% pTwC' );
define( 'SECURE_AUTH_KEY',   'Jo=hmC.{Xhr}zFkZg^Az` $P(T_A}gA I7JXawU#|~qN6HL}e/S9YchVK1|;J*lY' );
define( 'LOGGED_IN_KEY',     'h-UFPSt30O.V3m31s+Q?J>](FH$tzDR#mQ]-Ft&VE?kX=!fxq;$$+e(RZiiP;(n<' );
define( 'NONCE_KEY',         'tXbY.AD5k6Os#8iKss1y_UD)xC^ 1Fr$JUd^2a*nt81uUfXW?r2XAMiMH0$a;2Qp' );
define( 'AUTH_SALT',         'gpNgV+!$1q%b_ILwzXB8Ap9]xnO:+2`TsP% Pg5sY-_;6OQL{R:oRCGeKF^-bf<t' );
define( 'SECURE_AUTH_SALT',  'FClO~OdQbeAnMkSTd7a__SiaCsK- j[L{0rRdo9?-^n``kN271stoE91E^GiwH43' );
define( 'LOGGED_IN_SALT',    '`K/4YF7fZjyKiHDA]q7LFb?~Pmn]39 |3!Tirlcf3qtS WUJb$!GpT/RfKu{u|Dg' );
define( 'NONCE_SALT',        'CSa[pVeS*+.Y3bR=e>.u^<:aS((XcMmSaVC.N$hPMbCEdB-F.maK)fUgyoIlJ~5N' );
define( 'WP_CACHE_KEY_SALT', 'gNp:7=?afNAJWdt% )_IH8$Y#s5-6=?*_9>N!A1XNnZ8oirA%S?b$dk&ap4**HGR' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
