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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'imis');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '52z*l_V6nF|4T/qpm,KHCFM8HU)3~$PPL1<b8seW;]S8W@+^!*+n7Y?$UgtXi-!@');
define('SECURE_AUTH_KEY',  '`*RX*o?#{)S%P5)}rrMnnTu_4#LQrSyfsu>+x<9b+8$7SN&^c8-`7ym}:|Dmb?!&');
define('LOGGED_IN_KEY',    'v-{xnpnAh+@C&C3;C?X-CZG(~]OrDS2q+[-6ry!%LRcU.;(NTzCd-cQ+dcu /M|O');
define('NONCE_KEY',        '~yt~+OWWTwZ&![:W8Z3]y12WmFHR$3%Y+1]-a|b~}5<:WQ1eL:,g=*Ur4Om;/(]/');
define('AUTH_SALT',        '&(5]|;/qdC<>Lz)_FzOPL0azRFJS093m$mxZ&.ST@eQB~4+SN;?!Rbm*1IhEu. 9');
define('SECURE_AUTH_SALT', ')|m_L#Dw@Oxn,!/~6FUs5^ZZaQj&B#J^241+3&r6~^1+]a?qN.Sg2xCAc|eWr!E[');
define('LOGGED_IN_SALT',   '}{>f2kVT+~47Anedp3fI)d-2t%SKW8a<95@C*kMnWT1vvu%y:`ECrKDUb(15yCh@');
define('NONCE_SALT',       '+jz;JAGb~K#.#]xX7LW4[z*J2}y8ThcC`;u`-Q_/HcUf5k&.-$.9n)?dn~8?[3D#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sdrf_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define ('WPLANG', 'fr_FR');

define('FS_METHOD', 'direct');


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
