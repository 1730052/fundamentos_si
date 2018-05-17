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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'K4zbxDJ3+O`gT-`i43cTL$/;Tv^@{J&XAe*/Y6W=cp-6O--Eu#PEf40:nf0v+a<t');
define('SECURE_AUTH_KEY',  'PE9|(z,i}Z>C9xamjhk)|7U$;Zg8+_)MmkZc|pi6_n=]%gypWG)8lc~D&F(k-D4c');
define('LOGGED_IN_KEY',    '7f8xT#d-[`.O{Y@ZuY^pBEb&+OY4cj45NL?IOm^<`LekZ&r)D^Eg<BR6%FL}^[>W');
define('NONCE_KEY',        '1w%g}1wQ)^#K|4+Pi&3Jr/BX*U%,b:]UobY~A$cZF(.b2?~@a<LZ^l>o`u_Um!r[');
define('AUTH_SALT',        ' j#gl/e@K)P8Z[a]IJv+u;2Hnu;f[uj0xw(0K}M]mnti:S~0(FQ73,Ok}_])f*~-');
define('SECURE_AUTH_SALT', 'P1:2j6C+Z^(+^.dTb+B%/ji<fNGuMM[/]Xlt1}z=z> an:j|0BNR4c~z3|g23YtQ');
define('LOGGED_IN_SALT',   'Oh(LY5g)3h cbwJs|*m/I<2,#TugS(10uI6+Q(Ug# -)ryeC[bW)&rGA?VBP6*]_');
define('NONCE_SALT',       'N@GBzInUp+^||jnKC(UyQ7!@3y/e=&,Ej_/n^Z4#:MU c)>T0)SC=)Rl9ho8uKi0');

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
