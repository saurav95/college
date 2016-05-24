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
define('DB_NAME', 'aarheho_colleges');

/** MySQL database username */
define('DB_USER', 'aarheho_colleges');

/** MySQL database password */
define('DB_PASSWORD', 'colleges@123');

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
define('AUTH_KEY',         'Lt8&[D{PtH;Nv*_Kf|S?:]&0*U:P^u6e2/c=#OH=j6Ob-|:H:]2PlTm)amOAh+fA');
define('SECURE_AUTH_KEY',  'YVZzg-;Pc.oQok)WV;,!7z2c%YeM(;D#0:0YMi>I>|dAqWkMLzz lV Ge SBHbth');
define('LOGGED_IN_KEY',    'Ze*wv7kFb;b{&Ys}-XpeG`_r$?b?=Y=w9j/|29R6jcqp70%sF^C;ko*ikTB4KdnF');
define('NONCE_KEY',        '4Hwx~F$+m!L*tG>Hed=Oi4HXFtCE8B6zjb/dFpw.cn;P@S,LnYHKy`dP^q:LWkQA');
define('AUTH_SALT',        'Ne,RIJ<k$z~81WO<Fr}Mx6>grQx|MREC(T*fyw:mN ,@4=@t0ho;_v3R,K0+u)!D');
define('SECURE_AUTH_SALT', '=l$CNZ<=c6yq=#BypQ(zs|N}o1;e~-w?v^GYWq+=iRv!B?.]7[-||2P5z(rf0wJA');
define('LOGGED_IN_SALT',   'P!nUA+7E!b 6wZ;Y6d&?&_h-#Nid40=7!*t442>=G`)bu-EOt}Ad+ylMZx1:P1yB');
define('NONCE_SALT',       '7*fda8{tSqC.XVp-{#u0dxxm  ol9gW[OinE8y]HMndJ|Ix WHjiXaklo-+(0mq!');

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

error_reporting(0);
