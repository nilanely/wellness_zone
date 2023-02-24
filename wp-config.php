<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'proyecto' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H9ExDq2Uy7nY8mSIilBM3UZq2S2ABVOxCC9D4v3jsfIfIa7jnvUY7AfPrANLaqeZ' );
define( 'SECURE_AUTH_KEY',  'XsvdWiIEW6oEMKkU94T0CvKdNYn4XrTmKCatw9cJOLcqUOZe5FBgz1YHqpxnH4Ky' );
define( 'LOGGED_IN_KEY',    'VjqXzDRqLwuOhXMDpPADx7ubihMqjkNnfvOKCNFZGK9Sh0oMpB5ca35oUKR59oYy' );
define( 'NONCE_KEY',        'bDhESvya0vwuWlfPfxSZ8HfY5m8TEPSdnvQA7qPp2gC5tNiG7MLuDtNhTyBGF2u8' );
define( 'AUTH_SALT',        'Ps0qJQmaTnPnulZtV0wC9JUqcsPPWgkXFSQ9You9uv1oZ8KR3kYFeRPJFoB4ps2j' );
define( 'SECURE_AUTH_SALT', 'IVKMLmUR4uh3c7B8c2AdkLhJEELoRj8ug8tO1SGPXBziRxc1uFoE70m3oGyLEGDx' );
define( 'LOGGED_IN_SALT',   'c019isut0rNSjPJLwkxhXg7buSC6upqwOQpmJGAK2abrz4H9QyKBDbx5wCrGZQLO' );
define( 'NONCE_SALT',       'ccuc4kxgUxyrDfZdZsFEYQVQ8cRsN3VE5CGCg7IxFcEBlJRj7OBpBLd8HTUkdvg9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
