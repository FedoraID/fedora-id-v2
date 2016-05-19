<?php
/**
* Template part for displaying posts.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Fedora_Indonesia_V2
*/

?>

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-content">
            <div class="row">
              <div class="col-xs-12 col-md-2 hidden-xs" style="padding-left: 0px;">
                <div class="fd-category">
                  <?php
                  $cats = wp_get_post_categories($post->ID);
                  if(isset($cats[0])){
                    $cat = get_category($cats[0]);
                    echo '<a class="fd-category-'.$cat->slug.'" href="'.get_category_link($cat->term_id).'">'.$cat->name.'</a>';
                  }
                  ?>
                </div>
              </div>
              <div class="col-xs-12 col-md-8">
                <div class="fd-post-title">
                  <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                </div>
              </div>
              <div class="col-xs-12 col-md-2 hidden-xs">
                <div class="fd-posted-on">
                  <?php fedora_id_v2_posted_on(); ?>
                </div>
              </div>
            </div>
          </header><!-- .entry-content -->
        </article><!-- #post-## -->
        <hr style="border-top: 1px dashed rgb(238, 238, 238);" />
      </div>
    </div>
  </div>
