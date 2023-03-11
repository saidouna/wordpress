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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'N]YVr-izwqg%^T?Z:B<JDm`<EVwH~$gv#Z.9^hDUe2fM~?2(KObw$(0$~QOm!Ilm' );
define( 'SECURE_AUTH_KEY',  ')x-qYahU--NPKEz&Xqv^b=ubIh5)t/dy~Vh7OT4}6$?=c`6s2Cp9cGBU i/{l|}~' );
define( 'LOGGED_IN_KEY',    'jW2vU4p7a;A/q]S]?9f0oKPHx>Zrf$R~lUzk-hFS%fc{4Lyc4s=Od7A~oWF+}kz!' );
define( 'NONCE_KEY',        'yTWySLxEvs>_4U<b?bd<Z4~+q w?73*bkAY]b13/^_P6aSGxY/_U`lqva6QVR9{~' );
define( 'AUTH_SALT',        'd08jc02bI.>SRtc]oq@Cp_{o@?/|<oafZ| /M&S_N1vqGa=8m,2w?bJbV)+wD{#B' );
define( 'SECURE_AUTH_SALT', '0U,c)@w)Szwi[IjxP._6P2;_*-mOXt3;yr^+sKT(Lm;-8|i3KOdYgfR!{]x6DOJ7' );
define( 'LOGGED_IN_SALT',   'T%Y*eTD@zehy8W-@k&{P5l4Tt7(AqtghwJ0W>#Z|/khwVB6lE&~.Mk118tn6p7M2' );
define( 'NONCE_SALT',       'BKRY?=@PZO?3mC,{Vev}H-MtR-k)})@??Ts9`]wDVQ?B`Aq(7^1x2qei>POmqE?4' );

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
