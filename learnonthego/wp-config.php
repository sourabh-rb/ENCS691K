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
define( 'DB_NAME', 'learnonthego' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'g!uT7t7ISNPvz2u]8+1w~&tl=MHu&c9vHC^$V@v{m{%wdAe,D}}^=GT(7%Yy/~Zp' );
define( 'SECURE_AUTH_KEY',  'd&v%-;i6s`#p6K7f,JTSN,rXTDS#*RihbF9LjO rtlgDR4Nncb1{,/ej<Wf]?HjR' );
define( 'LOGGED_IN_KEY',    ']wM@h*H8XQD6cd.O+H~:ln:`cu-F/.=_1E(52@A,k3_E43QX(WF*H-//I<RkM<W$' );
define( 'NONCE_KEY',        '8F0M&0O&1FiznO8/ehe^8:YKK/@)38&+,D;`o27YF(dC,i3e9f-(6[%(+Pq=T$g`' );
define( 'AUTH_SALT',        '5E~jUF~F@/[bk2*cjC>77?2bX*/XbB9?6UiPt!E|ewr%?X+;WrgSepE9}~Bo=13C' );
define( 'SECURE_AUTH_SALT', 'tfxR_HDX1_C6>Jy9TBgqp*,${e0_X5UzaaI%[@/CPEj.:tKIyd89:H46cB2GR9<a' );
define( 'LOGGED_IN_SALT',   'b3h#4A>72LzesvrOo>/P`-UD [CMbF+k6~N&X,4z)v|z,8oDKOe+rD{a0RzJ4s=v' );
define( 'NONCE_SALT',       'zhm~.1yL,<*$JmK5_tp7%FdRj|[/_Zu1:X=#b-p`Hv4/))wi-oxJ6.yZ{_@5L_R,' );

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
