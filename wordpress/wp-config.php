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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', '10.0.0.211');

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
define('AUTH_KEY',         '@W02cI$>cijoI0v:m?l;uYNmT$O-&ttX;rX3yNuT#&5Ku%P6uuE^Qxi`rKSN0$Mt');
define('SECURE_AUTH_KEY',  'ZUF$KwuYaB oBGd$ K7H#{I610dlfZ!/qJ!?5.$,!<`1:_GYG?ci5H{OzRK<B_]n');
define('LOGGED_IN_KEY',    ':YUREvBpv*$LAxcsr=vlMN)l+GNX,yeLu`;M8RP2mx@@h]L%26h-@@ukop{:LW. ');
define('NONCE_KEY',        '7@md48t`QdE^q{lB^Bv?5*bx)=feI7}HJ/}g%dv,M(I{gT5?;G>c*+(;cTT6|GD=');
define('AUTH_SALT',        '[gxk.}9vPsOEmfaroHlDfeY1iyxC^rHjf|v^XST 6G$OD/p^[q}~TX>++f+jvJnJ');
define('SECURE_AUTH_SALT', 'JeTuU].pGx./+Ls9J9;h.&Q)i[gzP _u2%-=;E5Ogg*Ci-(an/8AO{_<BD(V#plI');
define('LOGGED_IN_SALT',   'Ne%AIA=c{5OceOoutBiev=-;Zg)hJR:mz*,=ACOQKWBn9w$@3cgRqZR)JNysE=2R');
define('NONCE_SALT',       '1u]FHvP=NXlu#);M|,}>O0@A7AYhf#6KQ7ya&*|4r$ WGmit{N|qZ%k5B*bqh`ei');

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
