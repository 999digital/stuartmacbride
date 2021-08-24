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
define( 'DB_NAME', 'wp_astra' );

/** MySQL database username */
define( 'DB_USER', 'wp_grzegorz' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_grzegorz' );

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
define( 'AUTH_KEY',          '!+/MIR./*[?}`b3`vXp+vw=8JOW5.@zW.Uh_B<,=]9~;&=So:LcJ23dG$@Dp([>e' );
define( 'SECURE_AUTH_KEY',   '#jRoJxgZGg2gB|l?~/k3!UDXJo;tsV^Jq+zGYzpQE/iW`el;!j1bp4<aeIzBW$-`' );
define( 'LOGGED_IN_KEY',     'js,U0[G#C59QjR nf9QFb{qb[z,L&%?u+v./RmsV<tS0]GR,HM7}U_5WY<,q>`Ws' );
define( 'NONCE_KEY',         '_H.P@eK$ZWl1nBL-R8awrmdA+S1c/h4MB3mV0qYy08USFy !Fd+M,!,wGD7]8e8q' );
define( 'AUTH_SALT',         'G*t8yu15%DNCp{qyTxqgz]lt>cR.2T5-{}nHIG6J A @+frn~z 6!6xE5:oLnTet' );
define( 'SECURE_AUTH_SALT',  'JTvb/RBC!D]kDkn:I.hTo-{4x%ePN 5r9?G?_W.17J&t2{mwr%dv3bEbHuq:f;v+' );
define( 'LOGGED_IN_SALT',    'E.+j*~O} q<IV7WOaxele(O4|,^ mel%ggq3~0<nQQ@nT^dVAFQ*62li9w,M;c^d' );
define( 'NONCE_SALT',        '-5!@&PNT r^C{1unz|uL>cO6T6@u-G0WJ#__}0v,j<LYzJg|=N~TvkXlM,3/(!@D' );
define( 'WP_CACHE_KEY_SALT', ')pUCgPj|bh,_>,k^N?,[]DcVA~>}W09w%eDkI^z1i@YV%OS/V3gD25mMyBd;cq+0' );

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
