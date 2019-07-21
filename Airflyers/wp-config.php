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
define( 'DB_NAME', 'airflyers_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '{(rM|,4f]rBG2>G^WL&{/Z*@J,a/ax8t9W!s_~+t(^P-(8TYUA!gfC};35+>*nHe' );
define( 'SECURE_AUTH_KEY',  'T0Zq~|oG.[$Ax(bT#:[4io<UWYERQYvrWA=97KEhaaC!>9Y(&!t!x7,xDgt~Qg!i' );
define( 'LOGGED_IN_KEY',    ',sG-IRN8[iU;w8WM}s>iu5U^</Tlh6.IcvO>*^!,[4`{MJBO_H7#V{j8gB}HZRpG' );
define( 'NONCE_KEY',        '~+`+.w)$ekJEws{B`oukmC!B:~?D9QXfrN%7_pTPM7aw6k9=9^n8Km<O.BBUqP^,' );
define( 'AUTH_SALT',        '^gs5_TWD@jpmd+$_T/4|M9/,)3GM;p/ccq+G/D+@YNf2B4b=G~*L8:J|+;a^?eI.' );
define( 'SECURE_AUTH_SALT', 'zj{}}(iRu+Y1>.yFXT7dHgG%wA![STt8b]gU`;Oe z}1<&5MqIWjmoH_ww=PrgvO' );
define( 'LOGGED_IN_SALT',   'CD/[4`}]p#HeMqR*Y46UkoRAa=kHgV3dP$g&d7&X}^^gh=twgqN8#*E6=wZK`z^b' );
define( 'NONCE_SALT',       'S%aM=I52wRPM0_F9AzddrC4Rj%*?okYDqsENUQuaX.LW|smkawSGgu5;.5 iZb2$' );

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
