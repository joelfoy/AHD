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
define('DB_NAME', 'ahd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'E+mU++Xja--dpbN!us|I*Iz~(|_U;+VTSTix?DZZ0-.7y6eDYFakh-qgd$WlhUO^');
define('SECURE_AUTH_KEY',  'iVTQ_ 1Uldo:DD1b4Yb7GyccgB}14%FMrZQ]ByG9JANMA6FXm-vScI~UPCumtr;(');
define('LOGGED_IN_KEY',    '6Eg@Vi`y;Mv>W~pBFJ]s/>!,_pk2B+,@#54x>@hG5(r;ahryZ5tdxErV3mk[|+Di');
define('NONCE_KEY',        '0(/mdH9A&fFdYK/7?wq}ICU~w:0e7-|H]PE PJ}F1X_ X)+6||:SlV,|JHrwifA ');
define('AUTH_SALT',        'I-F18&:HN}zY+4g+K%Z-|9fb:4^|9h{@e0f*r@52@<</$aj9|Zz?t@zISC(j>&4O');
define('SECURE_AUTH_SALT', 'N<z,pCFSXZl1;ta:Vp7EWVd]:/JC#|;-U n=F#Od^|RZ+I>jTI%O{v=It j+%{R$');
define('LOGGED_IN_SALT',   ' 4Brv4W,|g->#`5jYtH}j C_CN|{f0<>Ir,r_|TM:-Y[+%w^0_)&?&g)2+pGhA6P');
define('NONCE_SALT',       'SihetR/Y3Oza-S9t[#G2;$qH/!&kVDVc~XhvW7R}^VsI!IJ(S|/4z%|o()9ST^5p');

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
