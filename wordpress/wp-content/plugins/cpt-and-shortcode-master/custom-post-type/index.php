<?php
/**
* Post Type: mentors.
*/
function cptui_register_my_cpts_nos_mentors() {
	$labels = [
		"name" => "Mentors",
        "singular_name" => "Mentor",
        "add_new" => "Ajouter",
        "add_new_item" => "Ajouter un Mentors",
        "edit_item" => "Editer la Mentors",
        "new_item" => "Nouveaux Mentors",
        "all_items" => "Touts les Mentors",
        "view_item" => "Voir le Mentors",
        "search_items" => "Recherche Mentors",
        "not_found" => "Aucune Mentors trouvée",
        "not_found_in_trash" => "Aucune Mentors dans la corbeille",
        "parent_item_colon" => "",
        "menu_name" => "Mentors"
	];
	$args = [
		"label" => __( "mentors", "astra" ),
		"labels" => $labels,
		"description" => "Les mentors",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "nos_mentors", "with_front" => false ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields"],
		"taxonomies" => [ "category", "post_tag" ],
	];

	register_post_type( "nos_mentors", $args );
}
add_action( "init", "cptui_register_my_cpts_nos_mentors" );

/**
* Post Type: articles_design_ux_ui.
*/
function cptui_register_my_cpts_article_design_ux_ui() {
	$labels = [
        "name" => "Articles_design_ux_ui",
        "singular_name" => "Article_design_ux_ui",
        "add_new" => "Ajouter",
        "add_new_item" => "Ajouter un Articles_design_ux_ui",
        "edit_item" => "Editer la Articles_design_ux_ui",
        "new_item" => "Nouveaux Articles_design_ux_ui",
        "all_items" => "Touts les Articles_design_ux_ui",
        "view_item" => "Voir le Articles_design_ux_ui",
        "search_items" => "Recherche Articles_design_ux_ui",
        "not_found" => "Aucune Articles_design_ux_ui trouvée",
        "not_found_in_trash" => "Aucune Articles_design_ux_ui dans la corbeille",
        "parent_item_colon" => "",
        "menu_name" => "Articles_design_ux_ui"
	];
	$args = [
		"label" => __( "articles_design_ux_ui", "astra" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "article_design_ux_ui", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
        "taxonomies" => [ "category", "post_tag" ],
	];
	register_post_type( "article_design_ux_ui", $args );
}
add_action( "init", "cptui_register_my_cpts_article_design_ux_ui" );

/**
* Post Type: article_illustrations.
*/
function cptui_register_my_cpts_article_illustration() {
	$labels = [
        "name" => "Article_illustrations",
        "singular_name" => "Article_illustration",
        "add_new" => "Ajouter",
        "add_new_item" => "Ajouter un article_illustrations",
        "edit_item" => "Editer la article_illustrations",
        "new_item" => "Nouveaux article_illustrations",
        "all_items" => "Touts les article_illustrations",
        "view_item" => "Voir le article_illustrations",
        "search_items" => "Recherche article_illustrations",
        "not_found" => "Aucune article_illustrations trouvée",
        "not_found_in_trash" => "Aucune article_illustrations dans la corbeille",
        "parent_item_colon" => "",
        "menu_name" => "Article_illustrations"
	];
	$args = [
		"label" => __( "article_illustrations", "astra" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "article_illustration", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
        "taxonomies" => [ "category", "post_tag" ],
	];
	register_post_type( "article_illustration", $args );
}
add_action( "init", "cptui_register_my_cpts_article_illustration" );

/**
* Post Type: articles_photographys.
*/
function cptui_register_my_cpts_articles_photography() {
	$labels = [
        "name" => "Articles_photographys",
        "singular_name" => "Articles_photography",
        "add_new" => "Ajouter",
        "add_new_item" => "Ajouter un articles_photographys",
        "edit_item" => "Editer la articles_photographys",
        "new_item" => "Nouveaux articles_photographys",
        "all_items" => "Touts les articles_photographys",
        "view_item" => "Voir le articles_photographys",
        "search_items" => "Recherche articles_photographys",
        "not_found" => "Aucune articles_photographys trouvée",
        "not_found_in_trash" => "Aucune articles_photographys dans la corbeille",
        "parent_item_colon" => "",
        "menu_name" => "Articles_photographys"
	];
	$args = [
		"label" => __( "articles_photographys", "astra" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "articles_photography", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
        "taxonomies" => [ "category", "post_tag" ],
	];
	register_post_type( "articles_photography", $args );
}
add_action( "init", "cptui_register_my_cpts_articles_photography" );


/**
* Post Type: articles_typographys.
*/
function cptui_register_my_cpts_article_typography() {
	$labels = [
        "name" => "Articles_typographys",
        "singular_name" => "Article_typography",
        "add_new" => "Ajouter",
        "add_new_item" => "Ajouter un articles_typographys",
        "edit_item" => "Editer la articles_typographys",
        "new_item" => "Nouveaux articles_typographys",
        "all_items" => "Touts les articles_typographys",
        "view_item" => "Voir le articles_typographys",
        "search_items" => "Recherche articles_typographys",
        "not_found" => "Aucune articles_typographys trouvée",
        "not_found_in_trash" => "Aucune articles_typographys dans la corbeille",
        "parent_item_colon" => "",
        "menu_name" => "Articles_typographys"
	];
	$args = [
		"label" => __( "articles_typographys", "astra" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "article_typography", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
        "taxonomies" => [ "category", "post_tag" ],
	];
	register_post_type( "article_typography", $args );
}
add_action( "init", "cptui_register_my_cpts_article_typography" );