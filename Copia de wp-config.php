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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/Nac/localhost/museodelsalitre/sources/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'museodelsalitre');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4RK=gT%}s/$5=@}6[EZbE[9<(4A?UfsAc8ov1aJD!+B_8w2O`.rB5`P[Xp~WcGCV');
define('SECURE_AUTH_KEY',  'y`<o_G-stwL*<X;-nB/q6^ey;Nx0@/MmGp0Sc#uI:I9m$A62hU>V-mlg9JY7}mb=');
define('LOGGED_IN_KEY',    '~)9zukUi_gP)d:tf4Gw!KSm41_.[<~03|OG$7_.5.8y^?bgj_] *vQ57RDyOOg8R');
define('NONCE_KEY',        'b7xm6<XZgT)SxBiOgn4pTR6ULm4%$Uf&[%hFqO{$fQtm(=&f#pG=cnl&nvSRE_yy');
define('AUTH_SALT',        'a}$R)].ws{TsDA;P^$[thW77n!$ymm3M3mkhy+0gc3),#]NK]XI76V6#hy6:r/ R');
define('SECURE_AUTH_SALT', ':H+TXoi%g0K1Pi@^zg/DOwI1*W1Nv{~k gZU%0CE)ZuTdOr@f_%ur![%5mT0pnJG');
define('LOGGED_IN_SALT',   'a@^$|kf#1BUVCL;%MCT;nJ=YIrjL/-$Xuc@qtWHU]iA.j8h`Q3*7mMzIi]UCQV}]');
define('NONCE_SALT',       '=V_9jURS:unqg}WIrr8ap2r[!1s=c-_%}STnNvk|8U2F~w7t;X,rPnjBZ@MU^#cn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
