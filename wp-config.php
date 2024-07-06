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
define( 'DB_NAME', 'Planty' );

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
define( 'AUTH_KEY',         'j$(B{bC:R#lE#efS$]&tuhkzlSq~Ac)Vj3f/+Qi#NwO.2)CY:W[X1}DPyy;qSrqv' );
define( 'SECURE_AUTH_KEY',  '^W==8Is4.nBX|(V[HWT%/AshSL82:!oZWp]$o:fYk O~$o<&aBIIMYtQQ|V3)/kj' );
define( 'LOGGED_IN_KEY',    'jTl?W8YAbjS%@s{Zqfu9lGE,H*(FmM6Acz!uX^Rm@!U*,!3uajJj@wYDZHMd8p8-' );
define( 'NONCE_KEY',        '&9v1P%^-_8,ZcS9kpBE(NkZod7-&4TY5>,V<da cWM*%phnkEq,F|X3uJb,DEIdy' );
define( 'AUTH_SALT',        'EA40Hw4iuR#S+r9)QI?)XU.e?B/yk>1hkhhz!`SkHw+jse6?rnK_o@4cltL(9 Au' );
define( 'SECURE_AUTH_SALT', 'Hm+F%!GQ/&]I/r(K4,MKU/;k6DsspkE?+5eq~</suNC<?~{<MDQ(_c1y}guc<pHc' );
define( 'LOGGED_IN_SALT',   '[TDXvHg !9*>kA70/0CjN3R/.Yb?Qq:Pm2yc]5l+N/^&IxViVUWC+&YHt:GpJRyV' );
define( 'NONCE_SALT',       '&VtM+]TaOt+M](Fk[`~.f7KJ3`P32D8NK}OX_nqxNC$:*Nk%8qXj#Y$$RwZ$0|6l' );
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
