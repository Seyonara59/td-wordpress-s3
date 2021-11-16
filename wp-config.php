<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpressdb' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[b]-<gJ|ys`l<;iGn+V]Z_(B3* q2}Uo$X)wiZss&.#nLxhFhy YUA9>Wfk0~|Gs' );
define( 'SECURE_AUTH_KEY',  '-f1Oag[(>HA#fjC. C|PVc26cK5eTU=zc9[&$XYb&b:kExbvNiU|(McAcs$DWE5H' );
define( 'LOGGED_IN_KEY',    ')< Xt FScjE``Ov1>7qyRcD(Nw9Z5nD]AT+,Mx3tyLK)w98UZ3P8:|Hfeo&>.i]7' );
define( 'NONCE_KEY',        'Li(y+xB 72IWj$Hz3)S|h@.y`a>K{~]fw*Jz{A#>FE5.y0Svo]d?oL+sjhKlmI; ' );
define( 'AUTH_SALT',        '=e<2O{Dpm-!7B~oZ @:.F&8}R,B^Fa$#{d&_^0@M$&VeGit{U``8+/PO;>+oNAdM' );
define( 'SECURE_AUTH_SALT', 'qLJ&8Kb/}:G}x3o.?p.-hpQ#VpxT=&>C[1w!.fzVO#TF}pFg=@GFx!,UR3L|yE-1' );
define( 'LOGGED_IN_SALT',   '!HHXcc7o1p`XRE9LgHoR>EZHUF.>W$S6rZ#/yok}iw|dG)b~{`xLFq1P/rwa<]v,' );
define( 'NONCE_SALT',       'I93zV:ka}94V,z&bJrp/7o&5l0)sa]C9L 5HHIkj3euP0Ki3^rbPOAr14M~^^|O?' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
