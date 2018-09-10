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

require_once(__DIR__ . '/vendor/autoload.php');
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// Algumas constantes
define('URL_FB', getenv('URL_FB'));
define('URL_IG', getenv('URL_IG'));
define('URL_MAP', getenv('URL_MAP'));
define('EMBED_MAP', getenv('EMBED_MAP'));
define('PHONE_N', getenv('PHONE_N'));
define('PHONE_F', getenv('PHONE_F'));
define('ADDRESS', getenv('ADDRESS'));
define('CONTACT_MAIL', getenv('CONTACT_MAIL'));
define('SOFT_MAIL', getenv('SOFT_MAIL'));
// define('xxxxx', getenv('xxxxx'));

// define('FS_METHOD','direct'); 

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         '_UZqW$DNCzMs?2lT%w[4~g]y[Qa.i&8O9#U=je4JMrKajNo#nsl(3 OJC-j[_AGX');
define('SECURE_AUTH_KEY',  '>T3d}In}U!oViGcvux1cbX~I2~:Wr8dPNnV=Du$R:p{BX]iP5Uln)tm?[DxF5lx#');
define('LOGGED_IN_KEY',    '6n@$6q%XU/&,n|/avY8B3HP!Fa0fz9ANKNv3`[!T:];hb[@Y&ODR]GmK8nECw{MV');
define('NONCE_KEY',        '86@}Efl4K^8![=`{/zQv#kP26L }t^9$JB&K}M<PC2MR{0g1582*c,w  cs!+==t');
define('AUTH_SALT',        'r^7_]BaQDpI+qJ}E6Eg8@h(w1mqNSOdwvQTB;P`..V*&T};_|$IOJ~8017S1/!)o');
define('SECURE_AUTH_SALT', 'Q&MLovNHJV-WtJ|:gzp5?m*psBf+g]NQcSPl{^k`$[K4whd?3*1s+g{&3OHE]#eO');
define('LOGGED_IN_SALT',   '6J~D HZ]N)}qKtiC>(Sb%yVHKOs5D38# d-[aR!ev@Q.4/>7zn.Qw42b6QJT |Gd');
define('NONCE_SALT',       'Ny:q5pkBgkR=.l1R;rTBoBirT%yzM9n,AIU0KJ$q$=vQM/[W_dFK25AXpbx^Gl+q');

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
