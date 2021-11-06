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
define( 'DB_NAME', 'times_com_ar' );

/** MySQL database username */
define( 'DB_USER', 'times_com_ar' );

/** MySQL database password */
define( 'DB_PASSWORD', '2itzCXqM46KE8Wd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yMdrGaqxvoin00HGahO6HUHmOxxJOlzb348kZ57BQrBWJXX5d2oL1IHWZgb7GoXH');
define('SECURE_AUTH_KEY',  'fpJlL2UGt9RPAe5Ak6mDmbGyfQk7YE0enGZvEYzHuNP2LpuSQmA7miWHQvvWVJcD');
define('LOGGED_IN_KEY',    'OGya3Z6iDMuyVYjeGAwI4eYjWnHhaacKhXuNJ23T6U283o9ZgRcpG4YGHtSAJ2eW');
define('NONCE_KEY',        'TcyHmuchBGGc49tQM6poYep83yBmNKAhmk86pebLhdjr83N413ut140R5QbiI8uJ');
define('AUTH_SALT',        '3M6ne3nYgIdu9PNcXXrNDOcSaSr1TLPwaGWjJs2EZmNM1378DwJZ5xYBlupA5UJo');
define('SECURE_AUTH_SALT', 'fQexAp7aLkz8FFUngYkpaEcUyM6vyUyTlYdNKPngT469mp24b1ZKmPhV1plogBuq');
define('LOGGED_IN_SALT',   'DkQtIvAdaD4t0OHf1D0EQF7vTt6doUzmebRtaW3i7VHeC93szSXOEMVW7T6B4GuE');
define('NONCE_SALT',       'bbP7rPl4OTvY5tbCVEqtWHAxoYw1ZndZINNQxC8ifS6AiSAxgNfD0FaoVdbhgKLg');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
