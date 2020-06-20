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
define('AUTH_KEY',         'bTuRpYR+v848lRNQFW3KVhSx/+1KS/2c7tQAzWg/jJJ82vX6MF7BjfxlkBOfoEEFA/upql57Gw0EjSCyeOPAqg==');
define('SECURE_AUTH_KEY',  'cDmWoofMjy5+3O4y04/3Ev0jzV5o6KltyWexjUr0QGGDT242IutZ71YdQqN1Gblhcen1so/RGp4ysCLbRA19yQ==');
define('LOGGED_IN_KEY',    'nP8AO5DFvLNfTZbE01S4syre5M3DkecUPx69N6s13EcA8yElJQFk5jRfdqgzxUk3X/JJ2C1J/S71+E5Twq/yVA==');
define('NONCE_KEY',        'o6EPIll355rp6VKn5YOSlDwfdju2q+apxHZxq5fBxjc+ygY6elsNhJqUi1Xxyg3KA1ORgfpKGYeiCJuiW6FEGA==');
define('AUTH_SALT',        'wBleWLuoRMuC1QNA0T/kttIfJcblVbezAXiPheBIa13T45j9fhyrAMn9muRyQRwYlidTIoT/VExrfeGKBsAR3A==');
define('SECURE_AUTH_SALT', 'ua9ahQMU3p63SMf6EVIsy3dxnt4oU5NZ1x4uTj4yKtsBJu6baMi2HG/+rgVsI+bOa0G7bELw4pGWys6nxoZgPg==');
define('LOGGED_IN_SALT',   'RJ1Wi18PWJASB5n/jcr7WnskovzilizMT1n4MVdoHxBNhPAck6MoIeRwuvjB6KKmIuerVeyLgF0d9ZNe/TXrxQ==');
define('NONCE_SALT',       'GQh2nkwYv9VdsLAKUxabEcTcq72DhOIydr41zwNAuNu7OB734/Y+t54KUvKCgtZ6b3Lhstz+HLGDVEsHZonZ5g==');

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
