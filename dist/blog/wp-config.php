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

define('WP_HOME','http://localhost:3050/blog');
define('WP_SITEURL','http://localhost:3050/blog');

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'findmydi_wp' );

/** MySQL database username */
define( 'DB_USER', 'connor' );

/** MySQL database password */
define( 'DB_PASSWORD', '1x49zA01@Mk1' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#S]z2b/t,az]<>|5b{++Qsaq3:Nd<jx[OPrGzeH]AvN?4M?>54m}pOuz<d/UA2;h' );
define( 'SECURE_AUTH_KEY',  '&JL?ULmV9bfp4a1,.9J#>y 3g8)?iZ3%s?Zm&T  =PY@|3V5/_dB{|-m0>51Z*Br' );
define( 'LOGGED_IN_KEY',    '!GCC{nc._iIe0*)PBLAG(ku.]w.j%8vr}SGNu3hq0D{i<T2BMc8.4tH6*9q}z{Mb' );
define( 'NONCE_KEY',        '(>tk-@LJ9M#tSDee7kj8#Q5ZDM$[TQi$)Zg6%ji~*Hw,n&z>8Ms6VP(1rlWF)#`b' );
define( 'AUTH_SALT',        '@5S4Fn=~b[-S0j3lm#/$ihR8dZ WqTTnEX#s[5RB)h{>#}Q<~,7r2$(dX)>CA{S7' );
define( 'SECURE_AUTH_SALT', 'Zu.`b8-BJklB)XM#oNk|(Q{Y$B3li5!HA3yshBNZ?13Vb@Y.k-d+9(s$**$sO&e:' );
define( 'LOGGED_IN_SALT',   'q6,LDyDys6^47q8xK+g/50^U/G&UQ|YHXdN2pCRH~4v(83T{p$[/m-$e<l9p@MqT' );
define( 'NONCE_SALT',       'gXbA%8InS)veE}Jn/qYBU~VXE3y]:H>#LT=k>fnV~POf/yP-EinA3XEo,3gndv74' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
