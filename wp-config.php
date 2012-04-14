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
define('DB_NAME', 'prometheus');

/** MySQL database username */
define('DB_USER', 'aurora');

/** MySQL database password */
define('DB_PASSWORD', 'yz6454255');

/** MySQL hostname */
define('DB_HOST', 'int.instance11158.db.xeround.com:7575');

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
define('AUTH_KEY',         'WI9ek% llQqKZ6d4<vb|`I:</}#|4[VLI`?6efr-2AVlYVb>~#PY{OQ:ws|[]l2|');
define('SECURE_AUTH_KEY',  'V:^Xiv)9hE;b{6FY;j+xv2H,+$*d7T&&pRHdH>3:<4gohBabbt6%]9OWue-Jf8M)');
define('LOGGED_IN_KEY',    'AQR,2Q(cHhHjE:kPOXU8B*Eh[a;8UnH2u1geehW2LQ3F--v6b0#:%U-<EW2AB)>}');
define('NONCE_KEY',        '&;Ni`piE XJ)IGr`bx1d8Ps}|DyD}Yr@%Jm8x4/dJ?4{K,FlI98.raA|0;!|q?C|');
define('AUTH_SALT',        '=%Zc-&fa!JXe]X@7rOv5+*|X+-5X9Ws.4v=Y]s5!4m7p/?QN|<*L&R-y`pY4p!qy');
define('SECURE_AUTH_SALT', '[k<-4O%%)X|m Ss=kZQR(BCf.fx+.MY!zx/w7A11$Uz5hb}g$=*20?E{VG/S$`&t');
define('LOGGED_IN_SALT',   '|q@4u4G+XU-]bnhMXy#jCH%fbFm+zy/%_bDA=>^8jr>|Byutb}m?a9h],|:; VFZ');
define('NONCE_SALT',       '`rTZUkD?ij[gudP(*}6KS~=fz+._[wAk<bs|nlE.|&~Lu2=wS2FYTJ]O83}9UWe<');

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
