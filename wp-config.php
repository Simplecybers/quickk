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
define( 'DB_NAME', 'id19385596_wp_bad23ba41a290aaf990ef6d8a2e696bd' );

/** MySQL database username */
define( 'DB_USER', 'id19385596_wp_bad23ba41a290aaf990ef6d8a2e696bd' );

/** MySQL database password */
define( 'DB_PASSWORD', '461ed093b25bee6efbbf11dea1092a15e2804359' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'J_d5zwysM9g:?8<:+)2IEo}+]}u$(CN!]V[XyW0SXR[wF@4NGErIcVL|WgiB__4O' );
define( 'SECURE_AUTH_KEY',   'th}hd@m.0HOO[/egK^0q*h#]l(8L>t)C;&zbI%PM]lW?lg@z$OJeE &r)M6%!B[)' );
define( 'LOGGED_IN_KEY',     'c)!B<%wy+=1k%Q N|zb=vpaTW,7rr Df0~/M-YpQv/82s5B +oxs37t(w>p65JV:' );
define( 'NONCE_KEY',         'cc6?4Xe~L,7&4kh9&e8<@e{Wd].gIf)CcFN$ScCu+h9w_Z-Ybv7;NJav{b_4|Y;C' );
define( 'AUTH_SALT',         '07W>w8x/[XJ{h~ZKzsql5U{jvIK~;BvRR(Bc&=9LDY+uaOKq=QT=;.ZBFpP>X*rL' );
define( 'SECURE_AUTH_SALT',  '=rjuJTo<6x!m>H j9}}O^qCSkHm`Crc)pewaA8n~iD}[YR$|Gjp YMnt/pI9*5uS' );
define( 'LOGGED_IN_SALT',    '7n+u2npfGaM7uax1C||#t=gjN1>qXsbK6q/vU*G)/ 6kV,2O92q,4R0.IauM]VHR' );
define( 'NONCE_SALT',        '18.z=LLWd**&lq9Cz/@CrGOFhe{)ztS ZM`>s<NGxM`wCIGkU0EmS/>3SM%d>p].' );
define( 'WP_CACHE_KEY_SALT', '#9zcvmvQUDm>tmNHwdge0.IPTL$o&W_uhz3aD#<b[07kGNst4fS_|8pq*LtaDPX7' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
