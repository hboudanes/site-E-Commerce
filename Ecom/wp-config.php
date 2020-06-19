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
define( 'DB_NAME', 'ecomwr' );

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
define( 'AUTH_KEY',         'cZ1=]?<5g!B1R41pZ`y}_(oDvhdXS0_`I46T&ta/c};P@edU3lhxePQ}r=%KxW8V' );
define( 'SECURE_AUTH_KEY',  '(ko8a XYU]OQ BRYp7O_5*1L0>U sZQ=#o_%VHH8T(Y}hU=,zN7)FiPxlbD;Gdev' );
define( 'LOGGED_IN_KEY',    'XRud|_,O7m[/&[#fQLRs#VkY<SY-! 73.*,&v1{i6~}rp-9t3*ZCAOa-!Tqhn}1L' );
define( 'NONCE_KEY',        '_k/HU/}/Rfm+`G4oAlulve,c(m.T#bVu-tacrrgA)oe]XVNACBF(Ig~/e@,z-Hfz' );
define( 'AUTH_SALT',        ')%g5O)n5rJCHz-<7*5+R/EQYz PH:D<bq9VCUwiu9A?rINWd)SS8TUd&Vqu0HAz8' );
define( 'SECURE_AUTH_SALT', '!]BxEB$M{lX9=mO[+XDHrabfZ.nfc>6R[Q+}wO Rtv9FHS+kC~>Y:EckGzr)}L1J' );
define( 'LOGGED_IN_SALT',   '=mLM@-S!|O3Mac;5S#b9KTIL:%Ji>%l2COmI~JzGF.[,yBct]vGR=T02^drz[pb>' );
define( 'NONCE_SALT',       ')%_bXG|WS.pihU5IPT3&9?HUBtrw;-=fy#}e #HG<EATc d>gpB:}/7[M^#.$n|O' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
