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
define('AUTH_KEY',         'icNpshyN9Wi8F5jTscEiq2MneBGU72QmYsxdMFxgW9HwYAFmrAcXY+FMH3AvlZTnvH3XyMVL/Qj/ngUjItSadQ==');
define('SECURE_AUTH_KEY',  'RNPTYpZ/UtI2RBzIPnKat8zRPuYERt27dwvR4lRwL+75tKlWMY6G1SDj6fGa+YD7h71Rm9nk7BryEcigmkt4OQ==');
define('LOGGED_IN_KEY',    'rBtclofj1bKbb9ZO9hJ+Z9owklAoAAYxZdptbGGZ/9/ZuEaxFTWEYNYLTlTqIfgQ4MEc1tJl6NJ2Ws2w/Q4uCg==');
define('NONCE_KEY',        'XfrNF1FaO17kCfokgbC5B9OQtvXwwb/Kp48kMR53qzm/EhMYLXqCcXEfzaFzOHSucV8mTpcdKG8QVijte14gEQ==');
define('AUTH_SALT',        'xf+DxJeawQnXP8ln0mO+kp5fUmGEP2oR+A9h9RooYbKni35FtGjKUaegu+/Flsqn0DKpwuM+5DV/+V1K734c6A==');
define('SECURE_AUTH_SALT', '8tI6sSCJjYsUxrd88s3OaB5wI0X264wDMZsOeA855EUMtQjdAyWTm4qlhIKjfZlsca/bwXQJPPCvuPE/Zc7EkA==');
define('LOGGED_IN_SALT',   '+YPhCw5KlOmZYyFLI6be9kmyPMw/68JhRJorjp9TSn6M/DguyxkjhqVrrkVASKv+oy6wvlSyp0thN6YbhvRwuA==');
define('NONCE_SALT',       'aIC82peLKS1G64NTNtTuoC77Z05if96JN8L1yoWgykI+I7kOQQY/ulmC+BUl008X2KOjQxxp4Vv079ZBT0egCw==');

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
