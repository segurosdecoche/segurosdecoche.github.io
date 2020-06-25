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

define( 'DB_NAME', 'wordpress' );



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

define( 'AUTH_KEY',         'xt9>Buq0J77}<u$0e.]w}$WV]b59)D#+(lTsr|gNK~nod[,58RF.mLQswNh>v:Iy' );

define( 'SECURE_AUTH_KEY',  '[R$crOb22ZK=A<F:6TRx90/=nOXXD9@>c/B5c>H.Recigb3-,6X&]-u<Qw(fmC<4' );

define( 'LOGGED_IN_KEY',    'Kx?sd&AKUe`0{6(v~UH Ar0(Hlb0,tPpG7jDq %@_$WTZ6nlF4c?3K_{uh/6,08u' );

define( 'NONCE_KEY',        '*6}MVS;{CLyz-j@=b3Tvu}$5/FalHtw]}gelyP/8c4!!I6m_7Sdfb*~rRxt(`!2x' );

define( 'AUTH_SALT',        'E$|9Uyf=:I?@JAX[aOkNlX!c8wY3YUUK+]ae` //XvUlI2|FD84_N39F*xp2/bdQ' );

define( 'SECURE_AUTH_SALT', 'T[#miD>;[pHQ>@p/?ShC%<%g+GuV7quF|^-SE~SBPT22<$KaUN&SSzno:Z-mkjl{' );

define( 'LOGGED_IN_SALT',   'W{h8T5FX&F?gkT{1y@<&:xJ`yx5/3&~]M|.K?q5Ul<]Lw6C{@*^C|sR9pziFXhmr' );

define( 'NONCE_SALT',       'p=a!K1w5L&6BD8u<d9}8$*!n|s,SY+BMD$*wjRxzD,MqfRJV$S}sPK@Bl42z#Z;&' );



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

