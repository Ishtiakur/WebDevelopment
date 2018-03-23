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
define('DB_NAME', 'project_1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '[O~8LD+l7q05u@BIfq<ol}ce|N.o<BB K%G}_Ri);irqah?`v`{z<~}!bwq_)j>t');
define('SECURE_AUTH_KEY',  'nkxWBN2^i7>_v*xdbAi~;#+P%@wZ&}uG%b%rRTG;ju2S!?;|wx&BSwMuGo1RVyJU');
define('LOGGED_IN_KEY',    '44-xw-B<>>.Nz<+j]R3trt!#@JBkf`1yEDu.2oJf:W$Fs)q7iU3[.Tm!7>0c#2<h');
define('NONCE_KEY',        '[Sx]tTSVHM$kQAx,Z:lF}lOm}lOJvj3;kM&J|ZKxxk1VitGra7TK@JT%c_kyDV>+');
define('AUTH_SALT',        'I$<I_g.n:yOMQMBy|hh*b|yYI.vehwVO0!R-+AVX59|DuHvW)qyngAZj&E7C7dP4');
define('SECURE_AUTH_SALT', '6kVHh-o-zLB1:VhqmGmBNyYZfw,K<F36`|^0#,$q;~tm4%6g{KFw|&$r),-Zdd,p');
define('LOGGED_IN_SALT',   'Drh_;N,4$7oLT~-Y+N1t`Lv#!XGVo-G1FK;Q#kS{tY[%]9MC-D6uWGVO>v!zN4-<');
define('NONCE_SALT',       '4/4p/pEsCm6M{T/L=R(/ew:?U9<kN2(P|+P<j;=X%9L(.XE+Ok34-m@W~4TM7FB?');

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
