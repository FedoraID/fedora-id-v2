<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fedora_Indonesia_V2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-9">
						<p class="lead">
							FEDORA.OR.ID adalah komunitas Fedora Indonesia pertama yang didirikan tahun 2006. Website ini dibangun untuk menyajikan tutorial, tips & trik, dan berita seputar Fedora Linux dalam bahasa Indonesia. Tulisan pada website ini adalah kontribusi komunitas.
						</p>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>">
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
						<?php endwhile; else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</div>
					<div class="col-xs-12 col-md-3">
						xxx
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
