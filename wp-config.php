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
define('AUTH_KEY',         'f1kdFGgGEHyvaPbgU1+bsL2NhvyWF9OUr6+WchOal9b6X6Oj55bMHez7MW+duu6vngnkSvBlo5Njdxa08niqow==');
define('SECURE_AUTH_KEY',  'PWttP8wNJIznXJDUNPb/s3+DPs5MqPM65udDWCB2jArNmeUVQDPgE/lqWz2Spf8i9CvwMYOP2Y3TjveLBbxDuQ==');
define('LOGGED_IN_KEY',    'rWeJq2XI0MCKZWhRiKC3j34ZpyPtgaWXTpme26n5QOQ5WKgDXrusSOzCOb6vmHI81oX7EbF+DQbjEVV9adqzHw==');
define('NONCE_KEY',        'zZD5gVnOBvDjJtE/GR5Ddz2htlApHVrgRMudzkO4LEDd1blrCHXOIBgLybU/LQSVBPuvIuBLyzNQ14S7Fe5yuw==');
define('AUTH_SALT',        '5I+rAauoRV0xSjTsOu42hmUOpDGemvHAr7Gsjqzk7p8CJbEodk1IjqR8knxG13u0lbEHvApsjNu7rvMzamigHw==');
define('SECURE_AUTH_SALT', 'aN7MSkttoL9PDFL376TmIKRTadLEweGEkAa+1Xlbn4CujEE0RSIfNepAkKyfKyiVqlcE9Cg+c332p0RSO5OW7g==');
define('LOGGED_IN_SALT',   'bjqzNKi5h4FePSq3H6lPC499M1WCcfiyMYEsFh7l96+0ETHqGfzqfTIqL56rFtV+hs2aVe8tkl0/by5LdBIJWQ==');
define('NONCE_SALT',       'AkG0yxB+fz10RjO/F9Lnl74WrvylXcqhr1mAu8W765V1biHVbj8z53IIr6nbeaZXHWJo8fy1DKvSzJraknRoDg==');

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
