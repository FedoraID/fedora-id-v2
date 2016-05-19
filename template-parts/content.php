<?php
/**
* Template part for displaying posts.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Fedora_Indonesia_V2
*/

?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.6&appId=271149826605832";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container-narrow">
	<div class="row">
		<div class="col-xs-12">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php
						if ( is_single() ) {
							the_title( '<h1 class="fd-entry-title">', '</h1>' );
						} else {
							the_title( '<h2 class="fd-entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						}

					if ( 'post' === get_post_type() ) : ?>
					<div class="fd-entry-meta">
						<?php fedora_id_v2_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php
					endif; ?>
				</header><!-- .entry-header -->

				<div class="fd-entry-content">
					<?php
						the_content( sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'fedora-id-v2' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fedora-id-v2' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

				<footer class="fd-entry-footer">
					<!-- Your share button code -->
						<div class="fb-share-button"
							data-href="<?php echo get_permalink(); ?>"
							data-layout="button_count">
						</div>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->
		</div>
	</div>
</div>
