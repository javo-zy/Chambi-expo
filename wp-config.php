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
define( 'DB_NAME', 'chambi_database' );

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
define( 'AUTH_KEY',         '2s6m?0|G#@JK@6$zc8K4I(SP8G57Uy[jn+S|aca-HOvA!eU@/]jNQ|s%Xlgea6LM' );
define( 'SECURE_AUTH_KEY',  'zu+T 1=f//R+7V, (}zMhgSTj?IL#-/n2@?Q5^#%=r<!9h;uQU9#OS@jG3y)oB6D' );
define( 'LOGGED_IN_KEY',    '%f0%^M9c|Er65b=YCa_k,|m63*Dr@r^q@[XLm|_3GlNRuqT>AN}cO7;68d$ioKuY' );
define( 'NONCE_KEY',        'b]~p29_C*obhe}DHU7gPIeuxHb7V|D%)J+&}}#DlY7wueM-AtLuT)92=IUB4:E(r' );
define( 'AUTH_SALT',        'VA&4FP0Xs?g4)R,quc&$z@0P;3;X_+FE8k^ytDr}j:W3cFa-$N}GsimQ037tVLM]' );
define( 'SECURE_AUTH_SALT', ']]~s-q)+B9jEZT]uIINS#p(CxI$qwa2HI4p@gg:x{{h&ED6mpd?~R; w5sGnAG7f' );
define( 'LOGGED_IN_SALT',   'c$>85l3n}77|brW^2.f&KR:lV1JE40{sgg%Yk;sK$5C#hn CWTY*0Whe^7Hq3I6>' );
define( 'NONCE_SALT',       '!nWW^8c7}yqzm-:a6Dm*dYoyI XD;,-z74y]F:wUnwR0+ugfBJ>{B;d2i&VcU|#D' );

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
