<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Fedora_Indonesia_V2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<section class="error-404 not-found">
							<h1 style="font-size: 6em; color: rgb(51, 51, 51);"><b>#ERROR 404</b></h1>
							<br  />
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/fedora-id-v2/assets/img/error_message.jpg" />
						</section><!-- .error-404 -->
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
