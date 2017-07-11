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
define('DB_NAME', 'cepegra-ei');

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
define('AUTH_KEY',         ',gM<q{^|s<+~1oQJBo,w*JN#_8Ifx6H+&&h0W`z%eal0qr5cz,PVqzp`n8M+>uFB');
define('SECURE_AUTH_KEY',  'ZI:?V0!j@Bq+>]Vo!(Dst6#pjuFgAQ3lu#%wkEz@KfE9A*U]C y]fH0)(U8#heed');
define('LOGGED_IN_KEY',    'K /d=DH(d@@1#X4A(EZ]fyB^HJ(T,pN^EM~N}mfh~u01XY?O%6[<N<0P[PLp_mes');
define('NONCE_KEY',        'mo6$mZn}Jp`}sm%[enCTsXZh@qpw9aA6:#6~YApU9YZ{wJz-K3uc?c`&}xN/eU}y');
define('AUTH_SALT',        'cKt!9;fVXhLDIVeu/nGGiRZ(##=Prhx^xr];]i3NI{=cCW(a$Wrte@d2geY7Ie@i');
define('SECURE_AUTH_SALT', '(Ox=D[or%#~)E]~JJ<qG6kj~QahCtv*Dv%;=w5P{.UiL,J4awxI}^s<9CU4-v2XM');
define('LOGGED_IN_SALT',   'TwA(u9+^@=3}(@:+Ex]|O4D8g5<fQ`|L|b1.lcEoGV=1q,TV[!q=HV{ggX2$#MB0');
define('NONCE_SALT',       '@:GntFR9n6cRQW|UfHC&To5H?jr:B+~uujxtBE{.c6K.-^mE}!tk1CFlL`[pH@Fd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'i21_';

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
