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
define('DB_NAME', 'willyweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ',-S:I-c}@LLJ~+F /$:XekFqMJ*C0ib:CNZ!tx7X6%6FdW, {gy7VaXU9=Es`.qE');
define('SECURE_AUTH_KEY',  'mt/Kdm<T#K*c%1</cVGu2 jDiQI+3VmL#s/uiLKrT&AK VScBYnrDcFxGKc0GyzX');
define('LOGGED_IN_KEY',    'SoBXASRSUX-Ffue05nmQO`G%:RKG}=M%(yzh4Qx^Jt<d8-FT@ttJZ4X7C@gu@sy ');
define('NONCE_KEY',        '%.f#<gMHl2k85DO5x=]37HQBunvS,W,%qj@<L-cA9YVtt~N&=Jei`L7HUqeDhw5x');
define('AUTH_SALT',        '+3&D*:DKb8{S!.%vKVjdIt>YJkf%Y|i8m+U0{dVUk=zMT3#1SD:zYVbvoRMtSz]C');
define('SECURE_AUTH_SALT', 'f!Uq_>kr<E!Xr*?w`.x+JPe@Fk}.PP2pgk#gXt5^-E4dcuVHW2E@cbBV |w-h^BN');
define('LOGGED_IN_SALT',   'iCq:kqSeyM%9yHAsoHf<]Koaoe_Wzu|`|41#03zFBuDDwg&}<^i6:m8^jN(*PrHH');
define('NONCE_SALT',       ';iDoh>JX1@a(}`L9fimQeUhvHvz[!15*9w%@,?#YIoS50NRWwAe}p/Ci=Z1#AI}1');

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
