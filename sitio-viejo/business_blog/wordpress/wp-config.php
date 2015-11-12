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
define('DB_NAME', 'business_blog');

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
define('AUTH_KEY',         '(P{X|xZo^1EE3WszkG`J)QUH--!R1))4{;Ia8MX9 R5:(|e9 Km3R_UpMGxUej&z');
define('SECURE_AUTH_KEY',  '+31^.l~uW|[yoVrC^#-Vsp+_QboMsi@67n{]-uS(ts(Ey.^u/lBEH=%^3N:|G*Jb');
define('LOGGED_IN_KEY',    'X^wUE8;; +du9=*-P0 )Ca9h,c7SBHv(P4#[W:3O$F 5U1F<Ok,yu<n.m-l3zAN6');
define('NONCE_KEY',        '7&6V,r(`OGJWy.(>WJK|hth*I#*3p@fs~;x!J=NVf^P-gy=PG2o(#Zix&vg2cgQC');
define('AUTH_SALT',        'TDm$6wbS1>U?Qy ~9#ir7$L#kP!|&@Zn o?2kV1&64hE{kj{0&jjMa1+=fjlODZ:');
define('SECURE_AUTH_SALT', '_f=%jn1 b+D&o9Q8oP=35j-L`j/`D{1.I+|[yb8C{+r+;C/RnchU+/^jF[)r2a:n');
define('LOGGED_IN_SALT',   'EemR*,M@w7?3k(,}[|uU9`qCdvPUgPrD`q|q>0v.Fm_U#ev+?NUX/PS}B][g_;dq');
define('NONCE_SALT',       'c$$i^W)/Muw=(JVV~>)iAPWl0~Jh]bT79Z^Ab}+-D26.h%NB0C+7q|JP:L@5-Y3T');

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
