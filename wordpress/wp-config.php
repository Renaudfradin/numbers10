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
define('DB_NAME', 'Numbers10Data');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'password');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '&]|b$x06)KT>AANi!)_b$7|0:yR/ULYw@Z(go:7*_$ c^rrq4}!?nxo$fy;}j0,@');
define('SECURE_AUTH_KEY', 'lItyeU*D-3B3}i_~Ceb&K|f Ew]nd$3ElPdmz}u:DX ^i|7}4o?ci+hz69l@FHIJ');
define('LOGGED_IN_KEY', '00.W>~~1LX<J8I^iq>!e*<i3|EOm:fXPEpA>&rAMY,cWC9zp!/W=+jzvPuhRQh7`');
define('NONCE_KEY', '9:@#bAce_?-{~/(b4).S/q^j^2S)^_/:5<A0BhsOh)?VhhR~5!T Kv>Lj-eR+}K)');
define('AUTH_SALT', 'Ize.-p.uOS+?;^^kIstn`Z)6UvU`]{K:PK$#s~L:MsQQgF5%x+q@;*Iq,zHq`XKZ');
define('SECURE_AUTH_SALT', 'FetdANoZ|c9YE3U$ M} +/Sq!CRu35 !t+m=]I{N(jW--1u8CtT94Q:J++tv%|c}');
define('LOGGED_IN_SALT', '{(^1F/f5Tr/0+|# s|s?Q5<_c&|=2*Tf}p[Z={ZN+Hz{5~og:mdp6t_1+uM7|A!C');
define('NONCE_SALT', '4ha9jdvnm_pr-Na!>7w3T[FwR%tw^$7Ti`juYpLT*9XbTGLBuXRnl[WVWT~G*Y?P');
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


 /** Désactivation des révisions d'articles */
define('WP_POST_REVISIONS', 0);

 /** Désactivation de l'éditeur de thème et d'extension */
define('DISALLOW_FILE_EDIT', true);

 /** Intervalle des sauvegardes automatique */
define('AUTOSAVE_INTERVAL', 7200);

 /** On augmente la mémoire limite */
define('WP_MEMORY_LIMIT', '96M');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
