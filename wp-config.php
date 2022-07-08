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
define( 'DB_NAME', 'wpjuly' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Disble FTP requirement */
define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         'L!B<21MWCa6&SLz3H>+Do/#Nss(C:nrLLB7QMT)6dooE0~W!zhZ7yKY>CI-MYz@f' );
define( 'SECURE_AUTH_KEY',  'vKzp*H|/C].DWMG0{6DD2[|SC/NJ-oLBE}y~Fi$vo]ffA!)WIPN?KNM0unO*^b0)' );
define( 'LOGGED_IN_KEY',    'xA}M#3=e~DVT?_8fOpLzuJ:8+MM4$qds~:?fV;/loNZ]|(./E%<[|WJqS?,8 qna' );
define( 'NONCE_KEY',        'FYg,gNP2}D:a9f{UNE{*PmZZ=<4d#tkM&U;Vb{G!GhZ;pAL;`7)?BA{My9{Zwh7p' );
define( 'AUTH_SALT',        'B2B([p}`MOMWsDD,0L;(+hV#}pay;ow/c{2^z8@!W:2jPO/]]/z.Z=#)*o4Z2[2j' );
define( 'SECURE_AUTH_SALT', '~o1x{?@!vTI_c,qT(P{iaXFr$?z@Rnpx<FuT-(14ZG_FB:=uQa`fSA2A#PQO[:~|' );
define( 'LOGGED_IN_SALT',   'H$~Hzho`W%2|I{N$&M7QyR7ENcix^=+.89HDyH3ab8}(LLy/%,1tXKX?1w7bs0Bu' );
define( 'NONCE_SALT',       '0+C&Wk%$RrS`8zFph8k427W@X 3yWsCoqRw*/KE|Xf0_R__a5a-?K*upP;.USh,m' );

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
