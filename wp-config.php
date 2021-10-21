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
define('AUTH_KEY',         'wlBwHT56pLYAd9HSCxFOmspG7lWZoHZTjIJ3a3f3Xl2lkqp2i2a8Hl6vCS6kgqWLi0zLUooJOr+gXpcRE0LLYw==');
define('SECURE_AUTH_KEY',  'S3haQT1O2AeJzSRVRhfvjtRd39vPPea1vU1D8tV7nomt1pxapDi+Aja8TenYHh5TgG8/nzDFXmiM/Zh3L+DzLw==');
define('LOGGED_IN_KEY',    'cwtSVbLF//HjGCknRk5LkuxisZ7eB/ZaXEM3zz6mgjnXfZGoP94t3YyIFAiczvfw4KVR9VwsbVehUJTBWOgiAA==');
define('NONCE_KEY',        'ZRuSs+56UdzYRmS1XzBKx5bmQN7Tt3D0RN3dED93yb1YaZOsL/2zysj06GfZdfuM48c7WHS0XUssQo7eTClDbA==');
define('AUTH_SALT',        'nSjT5lqyvCbj2JDlYBT3sItH/xNb+V2/8ljuxBN8ox0jkaLjZaxin65BgelNgywB9wtZr7pzJeLi+OVz6ET91A==');
define('SECURE_AUTH_SALT', 'NLkUMpGidK7VvbBq56HYFAcA4b7GaqCdgAtRLCPD37V4t72RwkYjQNCz06RoZXdHreXW3ISGMPDLj3ijyOaZ4A==');
define('LOGGED_IN_SALT',   '/8oVZS89J11+2hBjrnQ8ZNzbyw6PjSKcyErjKsSoqsAaMD3caEBE3saEgOPaTSk5QqiAQ/0RLQ12U3dcIT5TzQ==');
define('NONCE_SALT',       'gU7CZk4+LVGJU4oohODuuSbPULhqwFeuVA7FHERodklh5LefNJUsBiqyTcwnM0en58D8dERndqc7vQ27eFvxSQ==');

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

define('FS_METHOD','direct');
