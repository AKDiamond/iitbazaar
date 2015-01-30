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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'ayushverma');

/** MySQL database password */
define('DB_PASSWORD', 'ayushverma');

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
define('AUTH_KEY',         'xuqZqhJ6sAqxDHrHEiSVxt71DcjEYZZAwCmDujkt7Z2lMwEDEYvM5sbGMBGGmHyK');
define('SECURE_AUTH_KEY',  'ngyx9AcYX2WHr6CjVfFhIW2dbTRTF7buIO6VtgpS6UVGwXgjk4fNsL7FaQWaRTIc');
define('LOGGED_IN_KEY',    '5UNIiENRecZ4BsZlIxQFV17F0FtYtTNCADdCdHluacASa3EEIC72GoMXtKFky3v4');
define('NONCE_KEY',        'vKnHTw6OlpeCsqgpSQLGcCAbX3QRRGEv3hHvzSNqfg5wYVHclaYl5VDlmVh8u9WI');
define('AUTH_SALT',        'FL0wGzRzzd2bVduJmoQvxzJLMF7sNiwtsON8JBdcUtZEyYQtd2N7aOdU3E5II51o');
define('SECURE_AUTH_SALT', '14DtMdkJJZyiOWGIRbydCuk9vlbXr2WY1qHfePFKlnKOdn7JodbsOfYV4H3ERZqK');
define('LOGGED_IN_SALT',   'HQtS3SiN5Zm3kSbZ7SC5t5lOUiALYroXZ5Iwqu7C0XOLOILqokXpSL1AB6xZM4JH');
define('NONCE_SALT',       'eVd7Og1hLnxEGhNKWvHlYtv08JMHt7SbhRtDq0mQrQCKC0grZkBFOmgABUF0dW7h');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
define( 'WP_MEMORY_LIMIT', '256M' );

require_once(ABSPATH . 'wp-settings.php');
