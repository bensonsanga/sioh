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
define( 'DB_NAME', 'salt' );

/** MySQL database username */
define( 'DB_USER', 'gilox' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gilox2021' );

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
define( 'AUTH_KEY',         'b@ryX<5~LPl=Vh<@[-a+8cz<Rq3hH~QiLd]D+-*1[l s3)Y)|3Jkcc|g{_OP3(E_' );
define( 'SECURE_AUTH_KEY',  'y^vF9bagih+ij4he9S31Xj)uQp[O2L6lr$-[RJjBc=,Y{pOYx#zfpD{s)JEh(}9g' );
define( 'LOGGED_IN_KEY',    'q^|y&4scv=As!JTVi#Tv3}2s;W2q&yLxdkD|[N|kJo?Gz(p?4:=Pm8Y]b.|bHYsX' );
define( 'NONCE_KEY',        '>=sSeh@]9C<O^Ie}DHtY]&Nm?/b5iCycoo*j^gCE}?c}OCJoO(`40T~/-w=+>7%C' );
define( 'AUTH_SALT',        'r~Nks.&ln)yJ1jxDPWZXC8~!NwHCuoAGl-t,AIr$5b onn{3X0T,[B6!YN$!@=lR' );
define( 'SECURE_AUTH_SALT', 'ArD^EbI#YR+} 9=g$}kaWcw|I11s-sS9{{jJL{/_0HOz_<X[N=cK S08om.8XqZ5' );
define( 'LOGGED_IN_SALT',   '#4vLPf6wo^%#:xx6,{OSA>62<i~fhIOAROY1>(_Ubw#|DdR7Kwdm&RT2;K]&cso?' );
define( 'NONCE_SALT',       '-]Ryr ]3oyPGSiv3*H@6#lbcJPPatN(J%q}%;w1JUrs{3k98KP3s[Y,(4m_xwig{' );

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
