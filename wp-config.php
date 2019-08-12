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
define( 'DB_NAME', 'projet3' );

/** MySQL database username */
define( 'DB_USER', 'katinda' );

/** MySQL database password */
define( 'DB_PASSWORD', 'katinda' );

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
define( 'AUTH_KEY',         'z&ELs:Z>eA0Ww=.,6#pc32Nw?6;0VOB82$R=[RG](NJ1]}h1s0rO)mQ)y87kK-Ik' );
define( 'SECURE_AUTH_KEY',  'h^2@oewEC0we.`$n`c i8ANtYI5qj@PK&tY*mD)|zVTm&Fy_sna%j|E>d$/c{vr`' );
define( 'LOGGED_IN_KEY',    '.GeV0-r48t tLN+=C(z]xD6~p.X5h@:DsR{ &M~R$9<AAww,vm>7VK70K**y*O&|' );
define( 'NONCE_KEY',        '2l67)[aMkO1f&,r!%}sJDDkb_g&bO^rzxB4HGBfI:Gg[<#d:0Y%k >$upJ%51QJs' );
define( 'AUTH_SALT',        '9>u/-=CaFdn6Ly93m`XaI>[l?F,EN*6-zp0^3c?+`#RUZ[RV-c=H&N*pcTnKQt08' );
define( 'SECURE_AUTH_SALT', 'nf`qV5$>j7#*1%0bKRVK}3bm{ilMY_701({!bw,5Z.%lWjzOXplE`L5hnR)yJo=r' );
define( 'LOGGED_IN_SALT',   '9m.kAlX;^v(-vD?o/iE9=)y6B%>eeL3J h1&(= &y +8k;j|Hek4x2K=!1u,EZZN' );
define( 'NONCE_SALT',       '(Q_nbA.FMO4XA5Lol,I6UF..i!Wk_P5)#>J<!VF/bqZ51q*1YZ]|CL0=QGHTFQh[' );

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
