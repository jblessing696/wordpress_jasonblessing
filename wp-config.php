<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_jasonblessing');

/** MySQL database username */
define('DB_USER', 'wordpress_user');

/** MySQL database password */
define('DB_PASSWORD', 'PH5ndsMr7yAmN5LP');

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
define('AUTH_KEY',         '.5UxkT/gpyu0L1$[I_9<|t^yz.zmn_A[5whKDSrLN1m=~0krR[rDK1&#<C_U@6<o');
define('SECURE_AUTH_KEY',  'l:~nxR&JwbpR6ZJ<(#=;<fj5f^vx4UI:Gcu0=J5JpT`on1JdYptz<Q`4m7&(b^G2');
define('LOGGED_IN_KEY',    'F<^+aZAef.^)c >F8sCAc>S&xqaTrKfYp!fOn-hDAl(7xbwPd1Vef[?q8g7:-Etc');
define('NONCE_KEY',        'Sx-=}#)B:b@@H;(%ncy*[4Ji K[1,MBS:}2)-AQk<6NRiTo43V.CJEc&<z-F^Cc)');
define('AUTH_SALT',        '(,d2$auHpPRd8p9NZ;i(iqVb)XU&rCjVs0{At C1}/d7MZoyF-vh:.}bv3#xHn),');
define('SECURE_AUTH_SALT', 'LRB+3JkBq1}LW;ND%*_b~W=;|;nRpN)RL(/_P=w/+Db1>l]G|_,WYDnu43{R;5:L');
define('LOGGED_IN_SALT',   ';vW%<v8bgEmTV6Wg4XxX~)<^H/Q[=z y.BQn20$H>s%<ORaVQ:NW8BmJj04vQ-t&');
define('NONCE_SALT',       'S}TEFBA]19<>nx!O?lQynBsKu.x)N+)&IEN~*!NO#CmFg,fz;XF`ACk00#,WF$80');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
