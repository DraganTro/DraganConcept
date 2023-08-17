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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '1b53EbPlQgjMdEVEc/8aF3s499IEEarijmAXNg6JWdrZA3PYZddIebdDCrkWeGjuH5AVFgTKGtk0/he2cUjBFw==');
define('SECURE_AUTH_KEY',  'XMDA2m8CZItlAd8c060ReHQGdXbtHcnVqJyfTM3y5PdBTRtNhFacg/Z2T5qIDoyGquHyF/cuX+fglm6x4kS+iA==');
define('LOGGED_IN_KEY',    'JoVvrvlwHBnL1iqZ93SiCBhyeOx4TBDbLUX8mxTSbG6keo6LWKtedEeUs+BVN4+XQU9HiqCF3kA39MgiFHV7iw==');
define('NONCE_KEY',        '7agCykDZvngntIoBkLVUsotUMTgTmfbvAEMvh56Aww0htWo1jCaay/tJIyBwxgretvvJYLgoaE0BoTMHH/F5qA==');
define('AUTH_SALT',        '7GMifQHshGlnreIADyG/+d3RA/MUwNqFAdhE7SWD1526pHMOKuh56nw7s6fxmA2y3QkOufYwMEb0GVyjZ15UnA==');
define('SECURE_AUTH_SALT', 'pGSBGa5//c4V1wW/i2aRfstFUKiR1FTMoJS8G4qsy9ltzCrFS+nS0+uYlKfGoF+qNDwKwG2RCBgk8BBSbjN9/A==');
define('LOGGED_IN_SALT',   '/Dt4L88zWkhUODVladhhOIAzOz4nSQLjAo1A0PP0qDInXyEX1cEVkbQdAdhKxSE6xsi9E41pGbsYU2RUX9DZsQ==');
define('NONCE_SALT',       'J6H/gaO3mUm72yGeuyYrlzmJpEj+gxChLT41Y5I3livkbdZJKo8BdX9pWfihbPfKIY5AfRvRTmUIkBpjEUZW4A==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
