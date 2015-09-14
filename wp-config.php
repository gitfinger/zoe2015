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
define('DB_NAME', 'zoeamar2015');

/** MySQL database username */
define('DB_USER', 'zoeamar');

/** MySQL database password */
define('DB_PASSWORD', 'leader9');

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
define('AUTH_KEY',         '&|JG9r6@ (_nlu,TH/n[z;lS2iS~+n-Q/&B*LeaT5>{M]-{{1s8$ubJ&G)]UO$wL');
define('SECURE_AUTH_KEY',  'N|=[&DFzJVGpa5bddFD6IA!r4g`{~5~pKc(0O`*hPceoG!%Gn.!Ka9uA ApM5iSZ');
define('LOGGED_IN_KEY',    'f(-8sYeU]xHV_E)xQTnu@oU0^>T=hfv{hkUz--W-X%.Xj5>v~*]shMuRxQR38|*z');
define('NONCE_KEY',        'eI=w+wLEr`pQ|-pUgm/{$KTa|Q^Gb9wGkP+$o5xeAY^}rh%wJ*y[7F-:Y7:|9[(Z');
define('AUTH_SALT',        '=.u2(TX+F!)!_ 53+nYnL9i+Hb{n38+vS!~x]3G%qGyk8(kSV.J<+@03Ed4[op%$');
define('SECURE_AUTH_SALT', ')m{2-XC]AyR=ss52+|Pg+x~2ev5c6|2%+FC`6~o>*epp3Sumi$o^RCTCd=<b~S:H');
define('LOGGED_IN_SALT',   'd.<rC.QJpiRK[ks$Pi[{h7yp|{0;+/EHak9i7Xs~#P3d6i*/vtng{m/8).r!mMnX');
define('NONCE_SALT',       'xOc(z50DLI-n$`?s8tL|0o. QX-klD3Mvknhk9:?7V2@812.p0Q7Ay>5C(44tokU');

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
