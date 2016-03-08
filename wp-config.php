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
define('DB_NAME', 'home-work20');

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
define('AUTH_KEY',         'GF$@-W2i3z`khAawAI>*!}kfXOUxRik26-6$}[[p*Pa-ad5I,yR}|M6jYC}Uc<#2');
define('SECURE_AUTH_KEY',  'o-O+bgTy6:9_-&3b=jK9FZS[rPXykC2<45:pmpZ+,@Oz`Wig9&8E0 k4FZsq&?n8');
define('LOGGED_IN_KEY',    '-N^R=04`OdIs|5-f%*n|ZW,!i^_;n<|U~ai6;U~L3+JaZFpYck)eF^]`Qig$X1wx');
define('NONCE_KEY',        '6kDAg?UmOC_QkZA`2-6SQ9tu(#`/j# `rDq.Y D?qs 1;w_AyG-7<)w>:^>Xd)+%');
define('AUTH_SALT',        '^`vJyO$`y8|hx|w4As`[)IznO`#SX;a;:|jTM`+kjTJPNA8-2ovpl@Z,<`l~9R?@');
define('SECURE_AUTH_SALT', 'KJa!PqFo1K_h`XYx$=45{7KGuXz|W,WD9[S3DJ-vk^UN{#8,v3@~UB~Icw:IC+jy');
define('LOGGED_IN_SALT',   '],JG-[+I&BvR`eCcI?O|su:S O[D:u4nQL,tGx(0G,oA^dT:+@a`B|qa1mLNk]nd');
define('NONCE_SALT',       '_jTJ2?|7,/rX5,Pj:IwApkQ@>Tq mhfjooj>+.OE3 GBj8gH)$=MA;SHy/}K+tFF');

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
