<?php
/*
  Plugin Name: modif-page-log-backoffice
  Plugin URI: https://wp-groupe10.azurewebsites.net/
  Description: C'est un plungins qui modifie la page de connexion au backoffice wordpress
  Author: Groupe10
  Author URI: https://wp-groupe10.azurewebsites.net/
  Version: 1.0
*/
/** 
 * Cette condition sert a la securité
 * Il sert a que l'extension ne soit accesible que depuis wordpress
 *  */
if ( !defined('ABSPATH') ) {
    die;
}
/**
 * Cette fonction va ajouter le fichier css au chargement de la page
 * callback : nom de notre fonction 
 * on va utiliser un add_action on lui donne "login_enqueue_scripts" comme hook et "custom_login" comme nom de callback
 * wp_enqueue_style : sert a charger une feuille de style
 */

add_action( 'login_enqueue_scripts' , 'custom_login_css');
function custom_login_css() {
    wp_enqueue_style( 'custom_login_page', plugin_dir_url( __FILE__ ).'css/style_custom_login_css.css');
}

add_filter('login_headerurl','custom_login_url_redirection');
function custom_login_url_redirection( $login_url ){
    $login_url = "http://wordpressgroupe10.azurewebsites.net";
    return $login_url;
}

add_filter('login_errors','custom_login_modif_error');
function custom_login_modif_error( $error ){
    $error = "Tu dois rentrer les bons identifiants !!!!!!";
    return $error;
}