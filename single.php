<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fedora_Indonesia_V2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container-narrow">
				<div class="row">
					<div class="col-xs-12">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

						echo "<div class='fd-another-post'>";
						echo "<h3 class='fd-another-post-heading'><b>Baca Juga</b></h3>";
						the_post_navigation();
						echo "</div>";
						echo "<div class='panel-footer text-center'>";
						echo "<small class='text-muted'>atau</small> <a href='/'>lihat tutorial menarik lainnya <i class='fa fa-long-arrow-right'></i></a></div>";

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
	</div>

<?php
// get_sidebar();
get_footer();
