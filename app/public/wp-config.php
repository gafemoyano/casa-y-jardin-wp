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
define('AUTH_KEY',         'atzczV5bDpoe/FojRdtyn5Xl6ubQa4JRFfG3Hi8yxuiIERTFvnGeWDvSR6yvoqoIn/uUlGzrNrxinzYCW90OWw==');
define('SECURE_AUTH_KEY',  'ARNMw9XHFF+eDgqtpWJIGcxROypujM0KlbC2ZTN+fLcLI7BAjj5T359NTqZzrpYshBp06D+Zq8E6uIfJ19Uf5g==');
define('LOGGED_IN_KEY',    'vim8Pf4t5ivymoEAeTZOk62jT99OXLFDBjZNCPIuQX2qRhBn7v2nmqI7HvysvYOlwV2tB5+4OJF4mayYsfO2aQ==');
define('NONCE_KEY',        '/PVBNB7nzfpePT3KjqBwvf63OMQiS/jgYKQ3MgThRYSazFNBFJzRGqRD+mwKa/i27vaVfDdWW5GQk2M2uW/bQg==');
define('AUTH_SALT',        'uT01NJLsqBadnuIxMZL8Pb9d1RKQ955WmIfXiDmVLMxh4dBINU1REEopQFUmFpPXZkGiIJdnHsjKqicCtf42UA==');
define('SECURE_AUTH_SALT', 'SqZ0u5xwmCuwJpSV3/PQ2DXfDFUj5q4wzc7+Rb8hvYRHs2RMI2KFyF2TeWwCZePgMhQuLoJcA0UwpYW54hoFuw==');
define('LOGGED_IN_SALT',   '6CwQekZSmOvj9RdGHRv9nMpqA94OH/l9OlHUb0B2U2YAo4RkvznSeGnj6AsDMwK05QoOonyKxItRAqCspcxezQ==');
define('NONCE_SALT',       '5NeBezJYZqBsaEtNWWjs//Q/WMzAmeOD7BHiK2OjG97ySQYBipVwSKLetsOTFsCLa1s0wOJt2Mc6MufiTRJUaw==');

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
