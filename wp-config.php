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
define( 'DB_NAME', 'td-wordpress-s3' );

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
define( 'AUTH_KEY',         '[_hSIqzI1<(6].FK4*g_kB9vG(LeQdY@3_@~F0N{i31f2d.vaz$5(C}ePAH$L#uI' );
define( 'SECURE_AUTH_KEY',  's 0 @=ADT[!>|k;%=Hy3Al9mI- PV~!G@:H47<WYR,pWLbYj!n6m=Cb:>4 k*f?B' );
define( 'LOGGED_IN_KEY',    '$zu@S=xS#tc^>~j Z0soH(*p0kp>}RJmaL<AO]H:FIxh`@27]Ynzh(f&CP%fVp3k' );
define( 'NONCE_KEY',        '$q {fx:*C-FEtWtRsP;O{rR^>M|8VSdQ)!3{=KZ.)SYzya|HE2Fc>i1vS^J^w45%' );
define( 'AUTH_SALT',        '3F2{`nA9Nilo}1EJxiXuQNkfsvD)c>4v#q(4ntQ$2rtbr(?G+!a6c3wteWp5y8f)' );
define( 'SECURE_AUTH_SALT', '>5 [G<-{~M#/[G<>;lBiAroTMg$,DFOz&y*v>VM]Lt,<Y4de/%*nAn>V*Dj!XBSm' );
define( 'LOGGED_IN_SALT',   'l,~_|JV^$23?;|XdO@(8cE7zU^R)GO6D@#Y}|3;|Z_)D<#fJ/WZq&(Q}opm0cHmj' );
define( 'NONCE_SALT',       '-}-x.J#4JFa.[qaoSz5 qG<G-3Oj`:]<(vTS[YSrZ4Hz^<L}I}XO);GJDpCD+&qE' );
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
