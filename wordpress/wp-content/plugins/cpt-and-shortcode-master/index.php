<?php
/*
  Plugin Name: cpt-and-shortcode
  Plugin URI: https://wp-groupe10.azurewebsites.net/
  Description:L'extension Advanced Custom Fields est obligatoire C'est un plungins qui regroupe les custompost type et les shortcode shortcode : [les_mentors],[les_articles_design_ui_ux],[article_illustration],[articles_photography],[article_typography],[les_articles],[[les_articles_last]]. 
  Author: Groupe10
  Author URI: https://wp-groupe10.azurewebsites.net/
  Version: 1.0
*/
if ( !defined('ABSPATH') ) {
    die;
}

add_action( 'wp_enqueue_scripts' , 'custom_shortcode_css');
function custom_shortcode_css() {
  wp_enqueue_style( 'custom_login_page', plugin_dir_url( __FILE__ ).'css/style.css');
}
/**
 * les custom post types
 */
include("custom-post-type/index.php");

/**
 * les shortcode
 */
include("shortcode/index.php");
/**
 * les articles
 */
include("article/index.php");
function mytheme_post_thumbnails() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

define( 'WP_POST_REVISIONS', false );