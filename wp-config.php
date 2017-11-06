<?php

define( 'DB_NAME', 'id3508721_wp_de53f614f42c0a84bb2d1b302936e3f3' );

/** MySQL database username */
define( 'DB_USER', 'id3508721_wp_de53f614f42c0a84bb2d1b302936e3f3' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Colm1990!!' );

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
define( 'AUTH_KEY',         'ies:u{iC%:#fCmACqU/&=G1J<d)UlMPx5OCPC`!B4<BNSt:Hpv}EhbJs/()!vFgF' );
define( 'SECURE_AUTH_KEY',  '>M~YA`@7GN=tw<oV37HiIrhzp<l7N5yqE7]H~DmQzDA+R^oBQtmJz>(+YBNO-qS?' );
define( 'LOGGED_IN_KEY',    'v-u@p.x-IGP;[YsznM_ &bSn2Pyp2Ns.y`rWupAOs?^x2NU1FI)80If,xg^=>T!K' );
define( 'NONCE_KEY',        's;:g:t*H%~KLs3x;*|wcF $YO~LU&XIsYIP(N+cSO.v4&NOql!QeMFp>`dEwad6j' );
define( 'AUTH_SALT',        '3Qk(RC5$UIOi]^~0t=tK}g@@=#pw*_NL-#Lb}-e|PvO/4e`7|]uR-^~aWijm+GAb' );
define( 'SECURE_AUTH_SALT', 'ZPLT!Q`k$gr&Ps~>hu _bZ#YX@I#D!{ihxCx3}fC~wtW9/$iG9XR}DfVK=?miFn}' );
define( 'LOGGED_IN_SALT',   'x*,G/%oOKq0(n5L~a5u#^`*tJ(X!J!|01xOE<f=^2Uv8Q{+-elh$gXI^7NFYDD:1' );
define( 'NONCE_SALT',       '<=)&$|]0v 0u{Te:jd]c>]-BD#PwAyrP&q[9;Z 7iq3dPsBjYJh{78i+Pzpyn?}3' );

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
