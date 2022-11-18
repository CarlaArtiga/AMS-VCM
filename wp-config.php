<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'amsprueba' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Rg?_&=+.ycJAJoG~L;%~p`[?N3E3k,) /Gka,l4jV/~uhWDBhwo$m*5.c+$]iJSK' );
define( 'SECURE_AUTH_KEY',  'v{{0G-!}_&UXIild^xh|=i]$Q6LdHY9<&it^brbv? vR?y]E%~SFnl0Q~4W=Z]-X' );
define( 'LOGGED_IN_KEY',    'K{b/JX6>M57%:JG30U=5U@1yHr2&.LAV1ph!#?A$Z.qp=qSRj;~M=HFnt[A]>jrZ' );
define( 'NONCE_KEY',        '+J|sd `8+1I~FD&a$1ZVt,fiTTl$,b=qr&UzW_1_b<h+o@[icW9t(IA})TNaX1<y' );
define( 'AUTH_SALT',        'Rw#FRva*yMB|7 ~hJc4F!aP8<N5pn`$t8 w!+>DQ)W>wG]g4n)PGY2f(x}.CQOpv' );
define( 'SECURE_AUTH_SALT', 'G7+hdFO;6%LX;Vy^YS-8F|!GLP;5Y{r-893I+VahJ}j)|.c2_Fk![(L$Vg=!**EB' );
define( 'LOGGED_IN_SALT',   '5;-&wH~wwcnxkJBu7FsqjSX;{?%zh|6%CtZBO~8YARtWOt]FP$h`0luVvvR(k24N' );
define( 'NONCE_SALT',       'IKB6]8KDy<BKFk|/cFHJ(d,*O|M /qxCkhK.C(j8wbP3NB)dEp~tqTH:Sjq[{TV:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvcm_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
