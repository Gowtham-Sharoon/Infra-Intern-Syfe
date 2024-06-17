<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hioxtraining_wp109' );

/** Database username */
define( 'DB_USER', 'hioxtraining_wp109' );

/** Database password */
define( 'DB_PASSWORD', 'r0EOt(3-3!S-bpU)' );

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
define( 'AUTH_KEY',         '9opbetbsqr33vkecqmd6e0d1t2icqxhxbh2t86ukxwpatrhjk1mwxsyoep60ym8p' );
define( 'SECURE_AUTH_KEY',  'mcvgdzkhwof2zafvm0qtiuxzuhosu1yaqaa8zmqfgvdxtye1mpwqnsezas8djjhw' );
define( 'LOGGED_IN_KEY',    'bohodqpejxaomwwbeitfygdewazcd76jzxaxflvapsqamy9rkd11qokq9zqfrxsv' );
define( 'NONCE_KEY',        '9tkbcv4vyd7a0jyt3oaus2inf1onrfogujbiy7zsyhlryfbdk5c4nhmeuxxovrkj' );
define( 'AUTH_SALT',        'b4henfwxst6ztaae4fdwd72pgdzxlfz8etmtnbfijuruocck72djqwl6nmkvu1qi' );
define( 'SECURE_AUTH_SALT', 'xuax6xjdfcfqmuxv5nsfu02agpm4bhrckntypcv5iqtpeugsocldosj9ebiyxhc6' );
define( 'LOGGED_IN_SALT',   'bzltk48dxmr0zu04u6n7rlzwppzr4bunruing8nbllua2cm4ifsuia6kftcygser' );
define( 'NONCE_SALT',       'ifa1iqnybdcdd6bqtk0av3woxu7yi01f7jssteybcx67bvfwhyvnrdcuiunmzyim' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpoe_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
