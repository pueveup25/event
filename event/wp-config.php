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
define('DB_NAME', 'bacsigia_event');

/** MySQL database username */
define('DB_USER', 'bacsigia_event');

/** MySQL database password */
define('DB_PASSWORD', '6mu41euM7Z');

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
define('AUTH_KEY',         '8~{FM,fv<(uD/1?}[JTko&y]jkTtaFbInu~U `+pb4gi<{kT3O?cQ8L9e1/.,`!E');
define('SECURE_AUTH_KEY',  '[iR)19-,6;R@HMfO_P@wt<y!f3ZWM=,g^PYOid1WT9t{LKSP2t|#A1IO;u]Sm1j/');
define('LOGGED_IN_KEY',    '*CH=mzND(];:h%LVoA<7)W|H+,>D_wRx;g>u,nKpG>Rl@k*IvgJtUBdo@KgsA=T2');
define('NONCE_KEY',        'h{ZI() 0Q@sHTCZo-3j6|e <ls]z4)QO(j}4B/(66C<pC{oYh},sGXYk[gMr,{(k');
define('AUTH_SALT',        'HzUIELZ/5._9O$=tTkXn&ZRSV4{Lpxx/SC&z3h!m]:~zpwl)oWa/>gF&J^JNTBgt');
define('SECURE_AUTH_SALT', '~7Ch@&i!*V )GCpgq;E~cGNstD}S<22t`Yn@6T;J%,KR6!;J]&LrjdJO>}8{*w A');
define('LOGGED_IN_SALT',   'vFZ&AX({pll6l8%A0Whon`dp1_@MY E.>KBZ=F{@RiW45fr]B~tV/)w2RE;IIAR$');
define('NONCE_SALT',       'ZeN}i3Cb#2*v d:btEn(eX)9vt.<_x,0)<UKTkF%V2,^@pn]PE<O/w qL]U]V]Hy');

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
