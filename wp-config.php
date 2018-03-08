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
define('DB_NAME', 'wp101dk');

/** MySQL database username */
define('DB_USER', 'wp101dk');

/** MySQL database password */
define('DB_PASSWORD', 'wp101dk!');

/** MySQL hostname */
define('DB_HOST', '10.100.51.14');

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

define('AUTH_KEY',         'K.$+;DC^neSOu8Tu$aY7VEm-` dHe-Y]d].7(j]|p^W*n2o*sh;TJq(.,,&t$%Hi');
define('SECURE_AUTH_KEY',  '52ovj>[Z7n`/NcNp;|+U}J:uKDey.P-[rzlp.TYq9uRH4=<tQ#bB~qHnhl?z6S-L');
define('LOGGED_IN_KEY',    '654NbuJQ8kBtxT!yftpGwxg]vXQh$!w-q^Slw##>:PD_gN:~mU4nsGn|$;XGaIBr');
define('NONCE_KEY',        '3]5v7:FFUeV9+MqHyts7 R&E#c(p3sHp^@,Jvo&Z8.S.G)JvHF{[BUh|.DQd_^hl');
define('AUTH_SALT',        'L%$f[(5l;?)Y/mTKxMjjd{}dT3XL!>V~wvW+V13,w3:W<-C[Wnh.,5w~%1f#!`qO');
define('SECURE_AUTH_SALT', 'N|MLUw]nC1rWkXbZFFcB4vS1F}rwO?Fpv(Usiz(c@?wq/VR|]`)#-[V<urbD])Fg');
define('LOGGED_IN_SALT',   'JuGqt+)A:Nr}XYj4Z|bkvsqtxEX~S~Vp)PoZ8qXKm~:3+eo-[w!|uITxbu]|l-i^');
define('NONCE_SALT',       '9-,pn(N-oBJ^o7+^=}wO|;yW{z pim>zBesH!Vw6]&fmWmC8b.vbfJ^W+jOK>|&!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
