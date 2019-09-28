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
define('DB_NAME', 'test3_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '@>[]DSMFOCZ!2&c2%]oR1D:3b!i-d/dIWZwoe_`=@uSSPj-%MxBkWtNk):Tx#oNJ');
define('SECURE_AUTH_KEY',  '6&x8ae}74LI>;SBx[&cgNP5G&8>sql,d$V$M`$DtdRo6:Fo_S#7vif[HJ@RXt21C');
define('LOGGED_IN_KEY',    'up[?bOm^D6YF@y(l+Ck(j8WlwP$v)|4DM2M|kIKOKm<R8GUsRmr5g>+Oz*0Zu)We');
define('NONCE_KEY',        'Vqg]?JaqCsp[=sf*@>R_Fxp10tX9In?{)NhnYDRv$[s5>{I)J;:TGB# ;f08:^GW');
define('AUTH_SALT',        '!_EiBx[<WPj;P(YN7JLn;6<ygn)>oioP9_/d /MDIe=_}0|)7~KR_z?e-<g<90cs');
define('SECURE_AUTH_SALT', 'tv9?|H%h1:PN=EY;n-l/i8O0-I(Cd-666I%^edfu*-,O{r,s/gVTOe(dslPxYyhZ');
define('LOGGED_IN_SALT',   'hr0J%4BK[-52,,!vE$khI?^<J,Y6iOM1o2=62=OR<b_`8qgc-QCGdq[f9ZJd@=t5');
define('NONCE_SALT',       '5+Y;&k`],4akTSC08YD]V+sw@~f!:+O{v6%I1)Z$[0wiPn&+2L$_Y) LO ;wQB48');

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
