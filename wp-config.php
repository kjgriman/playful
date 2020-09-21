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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_playful' );

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
define( 'AUTH_KEY',         'q9@IB=M7hOiSz7T,w#N$p{ug9ja?PRAe[q^|`H3u+L+g`0TGXz>%N-|; 7k,@9Q-' );
define( 'SECURE_AUTH_KEY',  '+@O?3l`>[{ HNNnk=<px2gl ([iK(v;qGN:A^w)z-R?rLVmsl[~/m6wiRU<g.P;i' );
define( 'LOGGED_IN_KEY',    '~LK{uSN7@Z_t%Cr%^jSAQHRNH-lFXqS[r0Ng(SxTtspysv|>exZ%V5JhJncs>;@/' );
define( 'NONCE_KEY',        'vUJkk|(dK*;$.L#vT&?~o3j2vK/rp8Rocg7D/UTEV}tN9{)9;8/~IX_MF.KIO![M' );
define( 'AUTH_SALT',        'HbYVYE@^>zQ.Qt]F_.H{=uZzSogZw}{<tAFz6GS_5)!@Z[#FkTId6%*p+qfAI@.U' );
define( 'SECURE_AUTH_SALT', 's1P{].!N&(S$q)PC:^za.J_F>mu;lu)ZNknkS^(ihPab#n[=8{?mN|64/>Sgqfd.' );
define( 'LOGGED_IN_SALT',   'T%xpY$s3BX:<DDYobe-w+ g5-dU(T2UC98*e4}da|F:8iOP0aCO](#`vz:5RUN3@' );
define( 'NONCE_SALT',       'cjKB1z8_7odP%4qbtHzSew16+As?yUK7a3FU.ENXs:pp-Hb=1Sy.oi~,reCTG`G(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pf_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
