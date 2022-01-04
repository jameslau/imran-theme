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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Cr3tDL91nwangMFkmJlGP0+m/x5HIjDdh9EL1oxemcUevr1HhSXhwrwhBxQAyNJCd4JCRkBtoV4ieyZlOOGUXw==');
define('SECURE_AUTH_KEY',  'ghCaN30Nq29NfmzOJdROjid183BwXWU8KL47GsPHltROQTA2l9fvHWUfAnjoAxhCF325OlFP+89wkeLu+ldR2w==');
define('LOGGED_IN_KEY',    'VlJDSwQ5Z+U5FtcyZh/of7Md97uTJXCc5VcOwc8yHltDuD6sVqe6QthmgkINklGOYYUSpYE2cQ3VmYAHC6vkvA==');
define('NONCE_KEY',        'nDhxBPFobl/IappwQW7SyhKnaBKO5gw099nDmH8nkKrNTQNEHS1AIauSlB8MrTRV42M7V3wir7S4CzyfY6W8mw==');
define('AUTH_SALT',        'E0NDPS4yTqc6cIK9GLrpf4e5bGSlxhDFuugOPp71RS6cWg2OCvvXgkGpkQnN4ic4LDfkjVv7CNiT/MaALQ7BAA==');
define('SECURE_AUTH_SALT', 'LYaWSXurdvKoDUTkDrQ7bXQYHjOdk131RdmoiQKFL/jy4VJk/w6BDdztWY3E6ZFUxrMyRRUmf1MSV8iUHap9FQ==');
define('LOGGED_IN_SALT',   'x/fHznTK45spQxaUi2O9Hi6Sx4j6v0WkjknByHxrIcCVuNvUHUDj/ykLNm2KF44EtfaiDvQkDWiM98XGeXto0w==');
define('NONCE_SALT',       '7FN8ZYMrwdbl/ZqxHHVeyTyXlToV2Fp8LP33nGf/4hFdGh0qPTcCDqysDOJ24pO2YtZ87dbVwsVgDkjKVdcBnQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
