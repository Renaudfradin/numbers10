<?php

add_filter( 'the_post', 'html_article_illustration');
function html_article_illustration(  ){
  if ( is_singular( ['article_illustration'] ) && in_the_loop() && is_main_query()) {
    ?>
    <div class="article">
        <img class="article_image" src="<?php echo get_the_post_thumbnail_url();?>" alt="" srcset="">
        <?php echo get_avatar( get_the_author_meta( 'ID' ) , 80 ); ?>
        <div class="nom_auteur"><?php echo get_the_author();?></div>
        <div class="date_article"><?php echo get_the_date();?></div>
        <div class="categorie_article categorie_illustration">Illustration</div>
        <div class="article_contenu">
            <h2 class="article_titre"><?php echo get_the_title();?></h2>
            <div class="article_description"><?php echo get_the_content();?></div>
        </div>
    </div>
    <style>body{background-color: #E5FAF7 !important;}</style>
<?php
  }
}


add_filter( 'the_post', 'html_article_design_ux_ui');
function html_article_design_ux_ui(  ){
  if ( is_singular( ['article_design_ux_ui'] ) && in_the_loop() && is_main_query()) {
    ?>
    <div class="article">
        <img class="article_image" src="<?php echo get_the_post_thumbnail_url();?>" alt="" srcset="">
        <?php echo get_avatar( get_the_author_meta( 'ID' ) , 80 ); ?>
        <div class="nom_auteur"><?php echo get_the_author();?></div>
        <div class="date_article"><?php echo get_the_date();?></div>
        <div class="categorie_article categorie_design">Design UX/UI</div>
        <div class="article_contenu">
            <h2 class="article_titre"><?php echo get_the_title();?></h2>
            <div class="article_description"><?php echo get_the_content();?></div>
        </div>
    </div>
    <style>body{background-color: #FAE5EE !important;}</style>
<?php
  }
}
add_filter( 'the_post', 'html_article_photography');
function html_article_photography(  ){
  if ( is_singular( ['articles_photography'] ) && in_the_loop() && is_main_query()) {
    ?>
    <div class="article">
        <img class="article_image" src="<?php echo get_the_post_thumbnail_url();?>" alt="" srcset="">
        <?php echo get_avatar( get_the_author_meta( 'ID' ) , 80 ); ?>
        <div class="nom_auteur"><?php echo get_the_author();?></div>
        <div class="date_article"><?php echo get_the_date();?></div>
        <div class="categorie_article categorie_photography">Photography</div>
        <div class="article_contenu">
            <h2 class="article_titre"><?php echo get_the_title();?></h2>
            <div class="article_description"><?php echo get_the_content();?></div>
        </div>
    </div>
    <style>body{background-color: #FFF1D5 !important;}</style>
<?php
  }
}
add_filter( 'the_post', 'html_article_typography');
function html_article_typography(  ){
  if ( is_singular( ['article_typography'] ) && in_the_loop() && is_main_query()) {
    ?>
    <div class="article">
        <img class="article_image" src="<?php echo get_the_post_thumbnail_url();?>" alt="" srcset="">
        <?php echo get_avatar( get_the_author_meta( 'ID' ) , 80 ); ?>
        <div class="nom_auteur"><?php echo get_the_author();?></div>
        <div class="date_article"><?php echo get_the_date();?></div>
        <div class="categorie_article categorie_typography">Typography</div>
        <div class="article_contenu">
            <h2 class="article_titre"><?php echo get_the_title();?></h2>
            <div class="article_description"><?php echo get_the_content();?></div>
        </div>
    </div>
    <style>body{background-color: #EAE5FA !important;}</style>
<?php
  }
}