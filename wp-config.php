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
define('DB_NAME', 'goconexc_wp');

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
define('AUTH_KEY',         'iyjnrbkcjhrbxlg7jhsju1c7kotdg6iiwrptgduswxyoufh62zfhibi0l4jpvx6l');
define('SECURE_AUTH_KEY',  'udf8isjxldwxx5eepwcylaag8trwiamhg6ngwx1sjf5oeaxy7h3tcwffghdpzjve');
define('LOGGED_IN_KEY',    'kyuorkl3xveq9ksgay9ahl9pm301hgxdogw0bj4vg5e9a0lu0ixfsdvjmmawt0c9');
define('NONCE_KEY',        'ze7lhcgfqefiudm6autjhgcsuemeiyzk6xyk2cogyekkqpnxk9dlyvohzxfm8rzm');
define('AUTH_SALT',        'ckbjbiaa3c0p81iiyyfuap2vzamdkql22kfh3kolnacjpfikjgm05p199ps1aokf');
define('SECURE_AUTH_SALT', '1fq50jtriiuokojsp8f1zxrpbmvfmbjisr8gj72ptm6eltnvu19guvrmc8pebcrh');
define('LOGGED_IN_SALT',   '0837vyd2r2cj1jap4hbwv0fjvdgfsgerqoikyht1nfvkmu9056vpktj1jjxoj9fs');
define('NONCE_SALT',       'iqi6otjeojjyfplkbzvccne9swjyloyvxemgliheh6uabwxkaxrjgazru3row0bx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Max memory a script can use. */
define('WP_MEMORY_LIMIT', '96M');

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** Limit the number of saved post revisions to 15. */
define( 'WP_POST_REVISIONS', 15 );
