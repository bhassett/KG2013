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
define('DB_NAME', 'bhknight_wpkg');

/** MySQL database username */
define('DB_USER', 'bhknight_admin');

/** MySQL database password */
define('DB_PASSWORD', 'kn1ght5gat3');

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
define('AUTH_KEY',         '>tB ;&,,WZk,]EB<]-JB~$<T{AXPqp_yfU%$B Z2,o{xfpDa4r7iTIpxe<$c<}Q1');
define('SECURE_AUTH_KEY',  'I~#|+:No]I@Y^OgzhvZ>|ZI9gK W~M;~K}3Ot(;{>Nl8c#uN|Mplpd+2wE!3+i|n');
define('LOGGED_IN_KEY',    '`zfLQ:RrCyprD=d ]O?XV5BPWVTing$Rp![?r8ZNfK9kY}tmWLq]oyXbvAU`0*H{');
define('NONCE_KEY',        'm#n|UGmLTQ +w*:@xrSz*$zE{71ancWV:5i^D;.J,*IP=Cg%G^3[:SpmaXqkaT#:');
define('AUTH_SALT',        '0|)>D`Gc7. MM(CG1^auTnY=j2@?!wf=NI/*FVFqv1A-&D}s~lMdz|u%uNkp|Wd-');
define('SECURE_AUTH_SALT', 'C&0d00A!z pd$igPsd8+qFe:d/p=FSS1A:1:K~wy{[~+`$4#,G!.C@A`-$GP=V=k');
define('LOGGED_IN_SALT',   '=gX(gfe`-!:+%=Dy)]I]$^ijV=IZYsaJSf(~[w_/x||jC0;q+UgV|qHGrW;g1fi3');
define('NONCE_SALT',       '0n$f$4?o^{q;yza7/h$ziR=Pf-lT$T,@_{Lf0?S~^%^C286Q9Km@^UfVL;VV^J%|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
