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
define('DB_NAME', 'wordpress_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '&0XWdwa`OE-+WIV}_eX+AWzhCxP p:kxP~(-e-|+m!-d 8fFC7~h#Xh*+ b&enz%');
define('SECURE_AUTH_KEY',  'jgzv7RM_x%xn 8K(4iHDx+8?11fe&!L8o,IW,z>UF6=`U(Y[PhPnvCBCy.UGnyJ!');
define('LOGGED_IN_KEY',    'a+c.!G-MPYp-uCc6i*x5u/F0C9Gh$bZFm|~.SR0x9F7$$Fmw=dUbRn;WMk|(Yvw|');
define('NONCE_KEY',        'Q|4Tmos>,c]4+Qp|UUC{F<x^51]zF>SD)ct_J(CVz;]IR@q0`BM+Lvd{,+QV%+cx');
define('AUTH_SALT',        '6oRQDj>^A1wfOc=%UC0<Eavp62rE:V`tO25N^MR.!1N0U_Xh9c8g~3y<_w&hok|>');
define('SECURE_AUTH_SALT', '-dPx.CLZe@~T8TA^Qw(=eF9q$0C~bm<@{<Y2[.Q$2;vX4A>F]aHnem2x jHVs,Rh');
define('LOGGED_IN_SALT',   'iP]S;?ZHdoqkrrp,PZ9X++)tz%|4%[g:-CMzQ@Jd8PBL~.)a|iVk?0E8I^%<d0$[');
define('NONCE_SALT',       '6lc[_=O~PKPmX;0+)>0z9W&8DJ,bx4&I?6u+c@a?Tx6mqtM-^eoL.gQ713O?4+hP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_4';

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
