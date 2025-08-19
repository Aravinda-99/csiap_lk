<?php

















/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the installation.

 * You don't have to use the website, you can copy this file to "wp-config.php"

 * and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * Database settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://wordpress.org/documentation/article/editing-wp-config-php/

 *

 * @package WordPress

 */



// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'sltdigit_boolet' );



/** Database username */

define( 'DB_USER', 'sltdigit_boolet' );



/** Database password */

define( 'DB_PASSWORD', 'l6I9Gbyl+p7A' );



/** Database hostname */

define( 'DB_HOST', 'localhost' );



/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );



/** The database collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );



/**#@+

 * Authentication unique keys and salts.

 *

 * Change these to different unique phrases! You can generate these using

 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.

 *

 * You can change these at any point in time to invalidate all existing cookies.

 * This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'nN<tZympfUiwmFU{[vUwhpWUC4rTn9LdhW<w/7j=c-u0(pY~4$S!-$5--2n%xEXq' );

define( 'SECURE_AUTH_KEY',  '2XTW ;,!)vF$tL V,NZ(kkHDT-*}:tGHQ1ME>8-dGG~p<$ r$|`Il`>-.}nttg0N' );

define( 'LOGGED_IN_KEY',    'gfB8(J2kpCsb[u1s0uSIK.pZ>V!hMBP/Oq{U&*>6eM4hUEvbR4a1W:#hCvB#6$}&' );

define( 'NONCE_KEY',        '^<o5Yh+.7n?vo*Zf8k|~%KKjV11+}e<3&D:YY}=_v->>p5d$?jrV1*~^NV&+! <r' );

define( 'AUTH_SALT',        '*DaivdO,=E|i{20MBN8byE#X1zQ.@2=U[m%R[xGJk^SliO7Yow+`JxT*<2eVO-/f' );

define( 'SECURE_AUTH_SALT', 'f1)/P;Lml_V9dW%WKnmwue6!Jk;&1FYH#r(8|gb=!$8$.Aa|}% ##!QcfBb`p>ar' );

define( 'LOGGED_IN_SALT',   'e$~n&=cT/!VmIC/oxNnF1U3)b^##&?CIF0NGb4dixc8kWX,pjU;y0Ut~Rt~>qf+Q' );

define( 'NONCE_SALT',       'nE;:(z.,4%vX~k&~tbbj?(xMbp!;;Mc>0*VW6)!X.t1?JD!hh2nhuI_S)M6>/mKQ' );



/**#@-*/



/**

 * WordPress database table prefix.

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

 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );



/* Add any custom values between this line and the "stop editing" line. */







/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

