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

$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';

foreach ($_SERVER as $key => $value) {
 if (strpos($key, "defaultConnection") !== 0) {
 continue;
 }
 
 $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
 $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
 $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
 $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
#define('DB_NAME', $connectstr_dbname);

/** MySQL database username */
#define('DB_USER', $connectstr_dbusername);

/** MySQL database password */
#define('DB_PASSWORD', $connectstr_dbpassword);

/** MySQL hostname */
#define('DB_HOST', $connectstr_dbhost);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Testing direct connection strings for DB **/
/** The name of the database for WordPress */
define('DB_NAME', 'tymotewpnet');
/** MySQL database username */
define('DB_USER', 'tymoteadmin@tymote-wpnet-mysqldbserver');
/** MySQL database password */
define('DB_PASSWORD', 'M1cr050f+@zur3');
/** MySQL hostname */
define('DB_HOST', 'tymote-wpnet-mysqldbserver.mysql.database.azure.com');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ah1;i}|Y;CO0)%U>(cLs$0s[iX+/|Fa?H{M:L;nG>UhK`|pf<^|uOv1gv:;[[<M^');
define('SECURE_AUTH_KEY',  'E[kk)(ZbbA~Ua<ZF64&1;&vqTxNDF609=*&-Y`syD?Y!yZO[VbHT4JXnOoakA~rx');
define('LOGGED_IN_KEY',    '4&N2%lVae7|we-c{qCN4jM_d8$R65v 6AMM{14}J*sM;1}}BMiXrg%?*T70/E+j8');
define('NONCE_KEY',        'f<26&fv%VGc1YL`VQ-J=7/;].~y>il>dVbPr]oG5[cW8^dD-E?@DRup*=PC8j,nf');
define('AUTH_SALT',        'Fw1hLBb~&!|GZt<Bq8!=DVn<wZ4vTCR6`kU[/vV/$l308i*yd_I3,Y<(u%c.j8j4');
define('SECURE_AUTH_SALT', '^mz~SuU2Jf[X)m,MKx_3AY4wjA?q@9&pVqs8VEex}[8%rpXJb*zJ+nz{1O{?_8!D');
define('LOGGED_IN_SALT',   'fU6, R~7n(bv:N}!O#fV#Nyx1<7w}R=E!u#Rg PCOKS<H5,4Q%N=J0<](;-V:S|3');
define('NONCE_SALT',       '-+w`95($2lOZM<noh9Il}>a@VjF0G-o>VeCJy#M@z57K)bdY-T+l-+U|JMd%}`$Y');

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
define('WP_DEBUG', true);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

/* Force SSL Admin */
define('FORCE_SSL_ADMIN', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
