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
define('DB_NAME', 'retailexpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '~ow$8[X+yg|2+17QMwv6q28uLlm2@`laUMlMgwO4zMHR[.$.j+hasA)=[N32|Whn');
define('SECURE_AUTH_KEY',  't^ |T[,Yx-RwbX< ,R7sT&]+6,`cPeKai$L#sQA`g|+#adyEcA$G_v(24DM-LceR');
define('LOGGED_IN_KEY',    '()@5^@ln])L1=i(`T]%*,2Ui_?|WP.0A3ZtTCIGj++?$uIeb_0rE+v-8Cfq3R-ae');
define('NONCE_KEY',        'Lj]*S5d5luUP~Z.r[?Jjnq9yE5a(Fa*{ojuI|+?X+)qE!ucB)DQm[^pp^]Qz1y%i');
define('AUTH_SALT',        'xpzQuXP=mnb-nj+6IhX{O [p17RZ90T1`Cg9uCI|n1463z+fng)!lsZ9Vm)r?BAv');
define('SECURE_AUTH_SALT', 'g;$)QjwbJM#% &MuXgpue@du!c?gn6$Fd0,P8 ]ifmYTO|CQh/%#05#+C-74Iq`k');
define('LOGGED_IN_SALT',   'F/{H}XT<?e-ri>pyvm1,mP41PK(HH4TO1+o ME?  v0|43<Z41{w+?^Kb+Vk:fJP');
define('NONCE_SALT',       '-@FbccB&BwB-,^_Rr1_L@Prw@gYm?U[HsF+~7FW=u+ u!]@@-xy3MnJT<^nH/{Y/');

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
