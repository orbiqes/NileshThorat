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
define( 'DB_NAME', 'demoweb' );

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
define( 'AUTH_KEY',         'h4kv21:^OTbyr+$l&9uPl&W4j78y$#Ai?FK(R9[.gP=x-_V!bF )gs4O]bHVQeQg' );
define( 'SECURE_AUTH_KEY',  '5A{1=^,zg9U_w_A$RW]_e_OM58M $v5_hHrWBm(;[AdV>D^MLD]EFFW( R~l9F)(' );
define( 'LOGGED_IN_KEY',    'Ma*Bz;$mzv#cGk2,*Yn~?5m}5:BY&`U MQA&nXSMN~{Jvo(>^=P*jRV=f)=?]34_' );
define( 'NONCE_KEY',        'r]`kE==P}Q<)f7aw?20^TZt94ji|V/[*iF#Z18d30wDFy0jCD}.G</{U#W]d#=/=' );
define( 'AUTH_SALT',        '-6@gRr#^5C}1WcFfVO7Jf!geu]H[kxGD+o^dZ!oztLckcVjvQJ5<+l<pI.1MOwZQ' );
define( 'SECURE_AUTH_SALT', 'o!v*[^orR@2ul,- ~6Jp{ZX>;&}yRtF~JowgNO4sZzTzq^k(W=1a!J1Z~;RZ7~8=' );
define( 'LOGGED_IN_SALT',   '!O9cqIE?G`;Y1FX|L~ur?uuk,?V)$pk4AODPl)Eo8o&WbV^LsQJ8AgfpA^)@{lCP' );
define( 'NONCE_SALT',       'IC%KwcvUM@=7zYZy=ljt&lC?|$g-X-dM bPCN7t&cE=3 f%)u]4F(H_iYl4yZ|vq' );

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
