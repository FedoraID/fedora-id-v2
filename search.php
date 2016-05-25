<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Fedora_Indonesia_V2
 */

 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">
 			<div class="container">
 				<div class="row">
 					<div class="col-xs-12">
 						<?php
 						if ( have_posts() ) : ?>

 							<header class="page-header">
								<h1 class="page-title"><?php printf( esc_html__( 'Hasil pencarian untuk: %s', 'fedora-id-v2' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
 							</header><!-- .page-header -->

 							<?php
 							/* Start the Loop */
 							while ( have_posts() ) : the_post();

 								/*
 								 * Include the Post-Format-specific template for the content.
 								 * If you want to override this in a child theme, then include a file
 								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
 								 */
 								get_template_part( 'template-parts/content-archives', get_post_format() );

 							endwhile;

 							the_posts_navigation();

 						else :

 							get_template_part( 'template-parts/content', 'none' );

 						endif; ?>
 					</div>
 				</div>
 			</div>
 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 // get_sidebar();
 get_footer();
