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
					<div class="col-xs-12 col-md-8">
						<p class="lead">
							FEDORA.OR.ID adalah komunitas Fedora Indonesia pertama yang didirikan tahun 2006. Website ini dibangun untuk menyajikan tutorial, tips & trik, dan berita seputar Fedora Linux dalam bahasa Indonesia. Tulisan pada website ini adalah kontribusi dari komunitas. <a href="http://fedora.or.id/tentang-fedora-indonesia/">Lebih jauh tentang kami...</a>
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
									<div class="col-xs-12 col-md-7">
										<div class="fd-post-title">
											<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
										</div>
									</div>
									<div class="col-xs-12 col-md-3 hidden-xs">
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
					<div class="col-xs-12 col-md-4">
						<div class="fd-sidebar-box-0">
							<a href="http://fedora.or.id/gabung/" target="_blank">
								<div class="fd-btn-tulis">
									<i class="fa fa-cloud-upload fa-lg"></i> Tulis Artikel
								</div>
							</a>
						</div>
						<div class="fd-sidebar-box-1">
							<h3>Top Author</h3>
							<?php
								$blogusers = get_users_of_blog();
								 if ($blogusers) {
										 $au = array();
										 foreach ($blogusers as $bloguser) {
												$user = get_userdata($bloguser->user_id);
												$post_count = count_user_posts($user->ID);
												$au[] = array('user_id' => $user->ID , 'nicename' => $user->user_nicename, 'display_name' => $user->display_name, 'email' => $user->user_email ,'post_count' => $post_count);
										 }

										 //Sort array
										 $au = authors_orderBy($au, 'post_count');

										//then loop through the authors
										foreach ($au as $aut){
											if ($aut['post_count'] > 0) {
												 echo '<li>';
												 echo '<a href="'.get_bloginfo('url').'/author/' . $aut['nicename'] . '">'.get_avatar($aut['email'], '36').'</a>';
												 echo '<a href="'.get_bloginfo('url').'/author/' . $aut['nicename'] . '">'.$aut['display_name'] .' ('.$aut['post_count'].')</a><li>';
											}
										}
								 }
							 ?>
						</div>
						<div class="fd-search-form-box">
							<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
							  <label>
							    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
							    <input type="search" class="search-field"
							      placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
							      value="<?php echo get_search_query() ?>" name="s"
							      title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
							  </label>
							  <input type="submit" class="fd-btn-search" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
							</form>
						</div>
						<div class="fd-sidebar-box-2">
							<p><h3 style="margin-top: 10px;">I do open source because it's <strong>fun</strong> and it <strong>works</strong>…</h3></p>
							<small>- Linus Torvalds -</small>
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
