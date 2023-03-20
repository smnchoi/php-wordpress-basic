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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'lQzlG^s^P[Tv_-B1I.}]T>)X4sK|bsB~I|)z/>.3ID46ml`!(t_a=YX5blQvSY[z' );
define( 'SECURE_AUTH_KEY',  '+^mhc1DH*8_*O:)2/_8@j`?1$Jm[X%>n|1eg&6kc}H ltD/L|S~C#d]OM=tN.5$`' );
define( 'LOGGED_IN_KEY',    'MF:jFHfhpe[$xBX lk?#af|!g?6jQW12j4E rYQ-XC2w%Uqgxl8Qrmn&-A<wo]oQ' );
define( 'NONCE_KEY',        'j|#6w<[D|ntrMsia!K;JU%E,g#2*_liqb;S&;%/WhS!}:qW2B<wFmWJRuX?}mRML' );
define( 'AUTH_SALT',        'E$[sg0)thHqBCc^F3(q[%+ODEn7>jQ>N<|Ji)Ps;[/5-tTAbv3?+=sD-#/(u^q~J' );
define( 'SECURE_AUTH_SALT', 'P^6;_^15t]nFM-EGO_Lz#G/V8k#kxW2CmLZ40~#)aIM<<pK%>s:6D+J8M0/fc5Np' );
define( 'LOGGED_IN_SALT',   '%c.ioeEnk!ZW.CO{~<w0O:6@PuY#LH.NFqsuobn.zLH!+~./)^}p^ODelm`-3O.#' );
define( 'NONCE_SALT',       'NHtk4f~/2@1z~+`P[TZaI}=cC?)b)n|[x 5IC2nn^;OFxQ|K&n4[.BBLykz0!L8g' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
