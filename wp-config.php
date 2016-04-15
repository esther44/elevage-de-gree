<?php
/** Enable W3 Total Cache Edge Mode */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\UwAmp\www\elevage-de-gree\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache


/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'elevage_de_gree');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vq]z/zi>8ZVfY;n)+NG/mm.g<X,?K5LpW7]KQyr0QmhFc)u$ x$[ODI0nC#^E&Cj');
define('SECURE_AUTH_KEY',  'N5r06{@dRWxb,RW_EpZmj:|Sj|jT*I,*LJ0^Pa_Ec5+>q^U1nVw[jH%aU|C#IFq$');
define('LOGGED_IN_KEY',    '-k<r<v,C3WFt_3s)|>u@ly_G}%aC7d{lbS;Zk,am,?:T U~-]AF_<CH|~OHf8mOn');
define('NONCE_KEY',        'h2OT6>zAptw+AA+@OgPGF8,;Wl(bEocxNNKbCr?&OO<`B!CCIV>I&:p} C:$D&Mp');
define('AUTH_SALT',        'b91TiaVnI 5)0|FIMUvFnRNy&r_^#-(426x.kkRbP|TAVt7/bAANOw/*o]=Ab5iA');
define('SECURE_AUTH_SALT', 'B)8du<;9}zi|/6*5eeL#_E,L^]-CoODmd=`|:1J)YRJ|j9+8^/EU-GA^zIEdQ0Q%');
define('LOGGED_IN_SALT',   '?({;wid?/U(Sq&$f))$>P- =qrX`bBH*3.i[^j-V% >oJ|6%E*N!^`dk(X;9J3NK');
define('NONCE_SALT',       'DSU*((q3kcE>B+H#w_ARjte:Sfjn{~I~wwRY1QvvfOr5N0avtV,a]?cli,&7_`ik');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');