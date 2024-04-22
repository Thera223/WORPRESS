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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(2H]K`27DUAgopRM^X3jf>%lkM:.is]f>H8w,]7Oy#5w5Zqc=4_@|(N9G&SBxp$.' );
define( 'SECURE_AUTH_KEY',  'W$M.?,8acpJ]sJj8dvqAbX_6+M1T5V))8Fl9%{~y,HZx:tO oosGtkTC[aC&%.t*' );
define( 'LOGGED_IN_KEY',    ':|4R<L;pz622j8?v<mg,nL3DS pzqL!-_]w;)N)W1k%@T~pH4D[V#`PFcKs=H?l?' );
define( 'NONCE_KEY',        '(2[pCi2(D&)+qa0OX.?m<.h.[#d2*;{:D]x XXyu_H,9?9XF%6rt5bT-]oy99]o<' );
define( 'AUTH_SALT',        '.Ntt.b8@)ch, 8O=Snxs&y1yFjIlBG^Cc-m#M&)Z<DKTiGU6h5|>FOEgww-p(6C&' );
define( 'SECURE_AUTH_SALT', 'NwDk~_#S]g0,qGwVMozB8w#0li:rzVu@;fbD;$y2`,_YV2h#6%,zd^dM4*Oz(E`/' );
define( 'LOGGED_IN_SALT',   'rS;N2><|=O|uGBj7#H3{AQrm8.^t{`f`S~PqdpKw@OX4[8wmD<h;r=x;qE8Vv#&%' );
define( 'NONCE_SALT',       '`qLmntmwKa#Ko>[V,`])B|2} 1Yh#!q 5rv0OH;Q3sjT {,o>#1ZpTLcLav5QYSr' );
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
