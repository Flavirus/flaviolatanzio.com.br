<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fla_latan_test1' );

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
define( 'AUTH_KEY',         '%&0XZ>}C/`[RLwo>AF<WkG9w_TE:*r7Pck[8&mO Q3cJEO4 Ba6.~WV<%[5!-G90' );
define( 'SECURE_AUTH_KEY',  'ey{(hJ,}oHolYpoUf:LU<9shGM(Y[HRC2zOf<pPSW|[sl2rXnv92Qjh{gF+wI+!a' );
define( 'LOGGED_IN_KEY',    '2+Z]M*RHo)Q]?w^XK rd:v.|bd$?6LtM.<Ftvw*#yz(4vR7/=djRKHHni+eDU~]`' );
define( 'NONCE_KEY',        'N^VCo=8HmqpL3N{{t#[$(S2k/r|VZI/It)3q>*/liB1Q-hzMOI1Ky{3@=[q6*M>R' );
define( 'AUTH_SALT',        'iw!*p .p=YrSbMF5.8ly2vGl07Bgi7m3y!cyF>#YuSO<dv@P;h@kPe8&~l$fVEAy' );
define( 'SECURE_AUTH_SALT', '_;]h-LLl<<g&%y@GajoXblpTS0HYuv<)@@I+YR3<JHOedT3j`frul31.jzq<JT_p' );
define( 'LOGGED_IN_SALT',   'iP].+*bezD9;|*2Q^ I#(R240YVto2wUaKx.QBBth= X4o+;Iqw0D&4FtK{R<(vr' );
define( 'NONCE_SALT',       'OpqckT6_tJMu|Acz%yVIxm9a))NZ_&y>_qoGrpk=94T/GUkuB~Uo^Tplmgw&3K5,' );

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
