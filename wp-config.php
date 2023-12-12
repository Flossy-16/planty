<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'x>D[*lp[vm{:TJp[N;Azcjtu^_{{yfz$`.d2yk?:7O#C;X#}o9}.kLNHpRrE*w2v' );
define( 'SECURE_AUTH_KEY',  'vdeEmUH^NY[qN3@hVPGmha!#anmhL+w5o-wv1QC6o$,ej0rOg3Y>`s9dK 7ok[|@' );
define( 'LOGGED_IN_KEY',    'ORMKU5p &89 UZ/vOtEvgdKVTpNUB~-g%,awcX,,aVenG,z7 g kjAVJkEMrq6Ut' );
define( 'NONCE_KEY',        'um{?R&4UCrUR*nbQux$g$d5>knw><oC@[^d1Bzliw}B]]Z}M?vZDv<baEQT(24<D' );
define( 'AUTH_SALT',        '_lk8IalBBCPhYa_ri^z:#w&$I<J1jzE%;}j^IhsS?Sv|v {1`aA96><#+xWQQ?$N' );
define( 'SECURE_AUTH_SALT', 'wa8p4Ufi#2N&x=n/v7[Y2dyW%y!{!7Bh?Hr*kAAd,4U8{(>z*&C.apcy9_1bWqQ<' );
define( 'LOGGED_IN_SALT',   '8ptYdppU(SA wj/Bj]H{7#4,,*%!m-[5F})=Ni[3#+H0G1ZQ{y8Jz9`HTm7sk*Wa' );
define( 'NONCE_SALT',       'xN~^C ImMaZD%g=0;2CeluNMG<5KN A/o4sH~e&EkB6fM{q-Y#&TAx+cU<Oom`v|' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
