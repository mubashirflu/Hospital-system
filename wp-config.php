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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hospitality' );

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
define( 'AUTH_KEY',         'cXX4(*:g:qRO^K(b=C=E%*%49QtAU<m4smN,%SAgKuVy{]c$<o6Gf+;Ua:hUIctI' );
define( 'SECURE_AUTH_KEY',  '<w-$_1_PykL,$):$:TBF*`,(Nvnv<A*Zg00=}7Pf?ur$G};mqBF^D6V48JW],Ie?' );
define( 'LOGGED_IN_KEY',    'A2[SvrY2GiQ&+(&tbD*F#zl&^HzP&h5uZx%G}2da;2ssf*gmpCJxsdQ{t0+f:fbp' );
define( 'NONCE_KEY',        'e*mnS8bzlvqof)[~pGWc439k*;^W9EgomtaMO<Wy]a[5Ku_sEf]L/u!ECL6Z@Fr|' );
define( 'AUTH_SALT',        'VpJ`Cyssyv.@dNacwgG4d_=i5)0=qciAKId<-$MUJ^[nkBOLb0Ql$Xb/n&rj6@!|' );
define( 'SECURE_AUTH_SALT', '0Mj?A/f_Tl9[n>fg,>BhHu[}:;z./C/qS}TIOL6L[U DWGh))HmIRv3atpQG>[o`' );
define( 'LOGGED_IN_SALT',   '11;jGvw*~bw@-F]M+_}[D@TSkM+V;t.cM?>#wTCK&b5;J}@nP+2 (9 QJA)e+O*o' );
define( 'NONCE_SALT',       'RV1}u`XlULg?]M!4]B(|@cl4^J`v9B`}n:3O5$.Yr6[uqrh5Dp0.v#)4Epte<KL4' );

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
