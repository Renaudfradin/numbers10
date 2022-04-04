<?php
/**
 * add shortcode "les_mentors" qui affiche les mentors
 */
function get_metors(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array( 
		'post_type' => 'nos_mentors',
		'posts_per_page' => 50,
		'post_status' => 'published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="liste_mentor">
				<img class="image_mentor" src="<?php the_post_thumbnail_url(); ?>">
				<h2 class="nom_mentor"><?php the_title(); ?></h2>
				<p class="category_mentor"><?php the_field( 'category' ); ?></p>
				<div class="description_mentor"><?php the_excerpt(); ?></div>
				<div class="liste_reseaux">
				<?php 
				if (!get_field( 'reseaux1ytb' ) == null) {
					?>
					<a href="<?php the_field( 'reseaux1ytb' );?>"><img class="icon_reseaux" src="http://localhost:8888/wordpress2/wp-content/uploads/2021/03/icon_youtube.png" alt="youtube"></a>
					<?php
				}
				if (!get_field( 'reseaux2insta' ) == null) {
					?>
					<a href="<?php the_field( 'reseaux2insta' );?>"><img class="icon_reseaux" src="http://localhost:8888/wordpress2/wp-content/uploads/2021/03/icon_instagram.png" alt="insta"></a>
					<?php
				}
				if (!get_field( 'reseaux3behance' ) == null) {
					?>
					<a href="<?php the_field( 'reseaux3behance' );?>"><img class="icon_reseaux" src="http://localhost:8888/wordpress2/wp-content/uploads/2021/03/icon_behance.png" alt="behance"></a>
					<?php
				}
				if (!get_field( 'reseaux4dribbble' ) == null) {
					?>
					<a href="<?php the_field( 'reseaux4dribbble' );?>"><img class="icon_reseaux" src="http://localhost:8888/wordpress2/wp-content/uploads/2021/03/icon_dribbble.png" alt="dribbble"></a>
					<?php
				}
				?>
				</div>
			</div>
			<?php
		}
		$total_pages = $custom_query->max_num_pages;
		if ($total_pages > 1){
			$current_page = max(1, get_query_var('paged'));
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => 'page/%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'prev_text'    => __('« prev'),
				'next_text'    => __('next »'),
			));
		} 
	}else {
		echo "il n'y a pa d article mentors :!!!!!!!!!";
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_mentors(){
	add_shortcode('les_mentors','get_metors');
}
add_action('init','addshortcode_mentors');

/**
 * add shortcode "les_articles_design_ui_ux" qui affiche les articles design_ui_ux
 */
function get_les_articles_design_ui_ux(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array( 
		'post_type' => 'article_design_ux_ui',
		'posts_per_page' => 8,
		'post_status' => ' published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="article-category">
				<div class="conteneur_image_last">
						<img src="<?php the_post_thumbnail_url(); ?>" class="image_last_article">
				</div>
				<div class="texte_last_article">
						<h2 class="titre_last_article"><?php the_title(); ?></h2>
						<p class="category_article category_pink"><?php the_field( 'category' ); ?></p>
						<div class="description_last_article"><?php the_excerpt(); ?></div>
						<a class="lien_last_article" href="<?php the_permalink(); ?>">Voir l'article</a>    
				</div>    
			</div>
			<?php
		}
		$total_pages = $custom_query->max_num_pages;
		if ($total_pages > 1){
			$current_page = max(1, get_query_var('paged'));
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => 'page/%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'prev_text'    => __('« prev'),
				'next_text'    => __('next »'),
			));
		} 
	}else{
		echo "il n'y a pa d article de ux ui :!!!!!!!!!";
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_les_articles_design_ui_ux(){
	add_shortcode('les_articles_design_ui_ux','get_les_articles_design_ui_ux');
}
add_action('init','addshortcode_les_articles_design_ui_ux');


/**
 * add shortcode "article_illustration" qui affiche les articles illustration
 */
function get_article_illustration(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array( 
		'post_type' => 'article_illustration',
		'posts_per_page' => 8,
		'post_status' => ' published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="article-category">
				<div class="conteneur_image_last">
						<img src="<?php the_post_thumbnail_url(); ?>" class="image_last_article">
				</div>
				<div class="texte_last_article">
						<h2 class="titre_last_article"><?php the_title(); ?></h2>
						<p class="category_article category_blue"><?php the_field( 'category' ); ?></p>
						<div class="description_last_article"><?php the_excerpt(); ?></div>
						<a class="lien_last_article" href="<?php the_permalink(); ?>">Voir l'article</a>    
				</div>    
			</div>
			<?php
		}
		$total_pages = $custom_query->max_num_pages;
		if ($total_pages > 1){
			$current_page = max(1, get_query_var('paged'));
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => 'page/%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'prev_text'    => __('« prev'),
				'next_text'    => __('next »'),
			));
		} 
	}else{
		echo "il n'y a pa d article de ilustration :!!!!!!!!!";
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_article_illustration(){
	add_shortcode('article_illustration','get_article_illustration');
}
add_action('init','addshortcode_article_illustration');

/**
 * add shortcode "articles_photography" qui affiche les articles de photography
 */
function get_articles_photography(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array( 
		'post_type' => 'articles_photography',
		'posts_per_page' => 8,
		'post_status' => ' published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="article-category">
				<div class="conteneur_image_last">
						<img src="<?php the_post_thumbnail_url(); ?>" class="image_last_article">
				</div>
				<div class="texte_last_article">
						<h2 class="titre_last_article"><?php the_title(); ?></h2>
						<p class="category_article category_yellow"><?php the_field( 'category' ); ?></p>
						<div class="description_last_article"><?php the_excerpt(); ?></div>
						<a class="lien_last_article" href="<?php the_permalink(); ?>">Voir l'article</a>    
				</div>    
			</div>
			<?php
		}
		$total_pages = $custom_query->max_num_pages;
		if ($total_pages > 1){
			$current_page = max(1, get_query_var('paged'));
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => 'page/%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'prev_text'    => __('« prev'),
				'next_text'    => __('next »'),
			));
		} 
	}else{
		echo "il n'y a pa d article de photo :!!!!!!!!!";
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_articles_photography(){
	add_shortcode('articles_photography','get_articles_photography');
}
add_action('init','addshortcode_articles_photography');

/**
 * add shortcode "article_typography" qui affiche les article de typography
 */
function get_article_typography(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array( 
		'post_type' => 'article_typography',
		'posts_per_page' => 8,
		'post_status' => ' published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="article-category">
				<div class="conteneur_image_last">
						<img src="<?php the_post_thumbnail_url(); ?>" class="image_last_article">
				</div>
				<div class="texte_last_article">
						<h2 class="titre_last_article"><?php the_title(); ?></h2>
						<p class="category_article category_purple"><?php the_field( 'category' ); ?></p>
						<div class="description_last_article"><?php the_excerpt(); ?></div>
						<a class="lien_last_article" href="<?php the_permalink(); ?>">Voir l'article</a>    
				</div>    
			</div>
			<?php
		}
		$total_pages = $custom_query->max_num_pages;
		if ($total_pages > 1){
			$current_page = max(1, get_query_var('paged'));
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => 'page/%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'prev_text'    => __('« prev'),
				'next_text'    => __('next »'),
			));
		} 
	}else{
		echo "il n'y a pa d article de typo :!!!!!!!!!";
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_article_typography(){
	add_shortcode('article_typography','get_article_typography');
}
add_action('init','addshortcode_article_typography');


/**
 * add shortcode "les_articles" qui affiche tous les articles
 */
function get_articles(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array(
		'post_type' => ['article_illustration','article_design_ux_ui','articles_photography','article_typography'],
		'posts_per_page' => 50,
		'post_status' => 'published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="all_article">
				<h2><?php the_title(); ?></h2>
				<p><?php the_excerpt(); ?></p>
				<img src="<?php the_post_thumbnail_url(); ?>" class="">
				<a href="<?php the_permalink(); ?>">Lire plus</a>		
			</div>
			<?php
		}
		$total_pages = $custom_query->max_num_pages;
		if ($total_pages > 1){
			$current_page = max(1, get_query_var('paged'));
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => 'page/%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'prev_text'    => __('« prev'),
				'next_text'    => __('next »'),
			));
		} 
	}else {
		echo "il n'y a pa d article !!!!!!!!!";
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_get_articles(){
	add_shortcode('les_articles','get_articles');
}
add_action('init','addshortcode_get_articles');

/**
 * add shortcode "les_articles_last" qui affiche les 5 dernier article publier
 */
function get_articles_last(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array(
		'post_type' => ['article_illustration','article_design_ux_ui','articles_photography','article_typography'],
		'posts_per_page' => 5,
		'post_status' => 'published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="article-extrait">
				<div class="conteneur_image_last">
					<img src="<?php the_post_thumbnail_url(); ?>" class="image_last_article">
				</div>
				<div class="texte_last_article">
					<h2 class="titre_last_article"><?php the_title(); ?></h2>
					<p class="category_article category_pink"><?php the_field( 'category' ); ?></p>
					<div class="description_last_article"><?php the_excerpt(); ?></div>
					<a class="lien_last_article" href="<?php the_permalink(); ?>">Voir l'article</a>	
				</div>	
			</div>
			<?php
		}
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_get_articles_last(){
	add_shortcode('les_articles_last','get_articles_last');
}
add_action('init','addshortcode_get_articles_last');


/**
 * add shortcode "3_articles_design" qui affiche les 3 derniers articles de design
 */
function get_3_articles_design(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array(
		'post_type' => ['article_design_ux_ui'],
		'posts_per_page' => 3,
		'post_status' => 'published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="article-extrait">
				<div class="conteneur_image_last">
					<img src="<?php the_post_thumbnail_url(); ?>" class="image_last_article">
				</div>
				<div class="texte_last_article">
					<h2 class="titre_last_article"><?php the_title(); ?></h2>
					<p class="category_article category_pink"><?php the_field( 'category' ); ?></p>
					<div class="description_last_article"><?php the_excerpt(); ?></div>
					<a class="lien_last_article" href="<?php the_permalink(); ?>">Voir l'article</a>	
				</div>	
			</div>
			<?php
		}
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_get_3_articles_design(){
	add_shortcode('3_articles_design','get_3_articles_design');
}
add_action('init','addshortcode_get_3_articles_design');

/**
 * add shortcode "3_articles_typography" qui affiche les 3 derniers articles de typography
 */
function get_3_articles_typography(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array(
		'post_type' => ['article_typography'],
		'posts_per_page' => 3,
		'post_status' => 'published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="article-extrait">
				<div class="conteneur_image_last">
					<img src="<?php the_post_thumbnail_url(); ?>" class="image_last_article">
				</div>
				<div class="texte_last_article">
					<h2 class="titre_last_article"><?php the_title(); ?></h2>
					<p class="category_article category_purple"><?php the_field( 'category' ); ?></p>
					<div class="description_last_article"><?php the_excerpt(); ?></div>
					<a class="lien_last_article" href="<?php the_permalink(); ?>">Voir l'article</a>	
				</div>	
			</div>
			<?php
		}
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_get_3_articles_typography(){
	add_shortcode('3_articles_typography','get_3_articles_typography');
}
add_action('init','addshortcode_get_3_articles_typography');

/**
 * add shortcode "3_articles_illustration" qui affiche les 3 derniers articles de illustration
 */
function get_3_articles_illustration(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array(
		'post_type' => ['article_illustration'],
		'posts_per_page' => 3,
		'post_status' => 'published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="article-extrait">
				<div class="conteneur_image_last">
					<img src="<?php the_post_thumbnail_url(); ?>" class="image_last_article">
				</div>
				<div class="texte_last_article">
					<h2 class="titre_last_article"><?php the_title(); ?></h2>
					<p class="category_article category_blue"><?php the_field( 'category' ); ?></p>
					<div class="description_last_article"><?php the_excerpt(); ?></div>
					<a class="lien_last_article" href="<?php the_permalink(); ?>">Voir l'article</a>	
				</div>	
			</div>
			<?php
		}
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_get_3_articles_illustration(){
	add_shortcode('3_articles_illustration','get_3_articles_illustration');
}
add_action('init','addshortcode_get_3_articles_illustration');

/**
 * add shortcode "3_articles_photography" qui affiche les 3 derniers articles de photography
 */
function get_3_articles_photography(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array(
		'post_type' => ['articles_photography'],
		'posts_per_page' => 3,
		'post_status' => 'published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="article-extrait">
				<div class="conteneur_image_last">
					<img src="<?php the_post_thumbnail_url(); ?>" class="image_last_article">
				</div>
				<div class="texte_last_article">
					<h2 class="titre_last_article"><?php the_title(); ?></h2>
					<p class="category_article category_yellow"><?php the_field( 'category' ); ?></p>
					<div class="description_last_article"><?php the_excerpt(); ?></div>
					<a class="lien_last_article" href="<?php the_permalink(); ?>">Voir l'article</a>	
				</div>	
			</div>
			<?php
		}
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_get_3_articles_photography(){
	add_shortcode('3_articles_photography','get_3_articles_photography');
}
add_action('init','addshortcode_get_3_articles_photography');



function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

add_filter( 'the_title', 'wpse_75691_trim_words' );

function wpse_75691_trim_words( $title )
{
    // limit to ten words
    return wp_trim_words( $title, 8, '...' );
}
