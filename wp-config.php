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
define('DB_NAME', 'checkinlocal_database');

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
define('AUTH_KEY',         '-szdxLzp!>l}AR0m!k[k-E-2NakNfmueR}!ZP_9S[@Y@/{eN>gJ5/Vl(%M~`<#Z&');
define('SECURE_AUTH_KEY',  'NuTN,>rGD1#quo/?4|||N*SFnsx}{6|*sB-IM}R-g0(hi>let2J3Ck$CJ!wo<vho');
define('LOGGED_IN_KEY',    '|9pkE4,6E=S3no!lZqt^}Fi,6$)+zyr3N*v+ (*W5+PFn]LDjOH=c~|Fr`L>Zb|P');
define('NONCE_KEY',        'X1.IBm7u?P.s2BF|$z=lhRW/Y;N|+o(:X68@3bS*|Bone;J+D-WS2fQ3%6R1;6al');
define('AUTH_SALT',        'K=4#GDV|_;-^O*HI?V0m12J?s%`ZnqJ.?Vq*a>iD;=<iCy~ZLer-:-lX^h-&*m1B');
define('SECURE_AUTH_SALT', '=kp-Lo](}ifCP7M}ROVu:t OG(P[Av}.b*IN4+Zu6VVQJUMzJ1rC7yo=b?*@VE.1');
define('LOGGED_IN_SALT',   'seZ-+}C|5d*@ChjyoztGUM%<)eh0ZvFc7)Aq+?PoRHxx6TAK2K:RR);r~d8j-88!');
define('NONCE_SALT',       '?pR+`y=}d+%Nw=%ZHPei|yIKpL4FN|!Uo{E0l!npW3~:(1;GJH1IMj2k;HOS;~(F');

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
