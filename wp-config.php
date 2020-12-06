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

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


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

define( 'AUTH_KEY',         'nf.O2swZV293@wwFNZmyK{gXjV]>GD*;#*<jyc~M{`K*]#vXM6osk@2q;0Zbz[AN' );

define( 'SECURE_AUTH_KEY',  'ZVN7kRs:nrbK;uw/>>y/g,dhT_7-3 m!@&6:2aXPGid]/1(rn%YQ#X;VifT( ,8,' );

define( 'LOGGED_IN_KEY',    '<+3O4IuDBGAfXu0OMN]ga8P?eAc.44RB$(zySr)MLa9KwJ}fp!wc59tyh$Q&+@$j' );

define( 'NONCE_KEY',        'XTuD&oAYh)YX-#uQN|eUJA=#&te=v,H[>l3&gwR{F<($a pJ9noYIoK6SP)zi85a' );

define( 'AUTH_SALT',        '(FrUVLy_7Nx%UHxR!#/oA,i]C&L/LnIh+ZA^ys.dpB0m@Yg=9*^A(FB }~|J0UM3' );

define( 'SECURE_AUTH_SALT', '8A#gjb*t /5JxUG=jGO0l7}9=U4aBh55}saAUw:k1/GTGw{E-;&By7_cP{sOYTHn' );

define( 'LOGGED_IN_SALT',   ';igzcUnTjXs3yS7 (Q,`j+h>|>D{_, 8!#Po55`L;28Ue3L~/Qyb@B?;|zfj(0_T' );

define( 'NONCE_SALT',       'p|O:Jd>G89#!H;E}w77YGwm.:.B{w%A4zR9!=X&7a?8Ugti5 M]4G]{lXfX.;na-' );


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

