<?php

/*
  Template Name: Tentang Kami
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
            <div class="fd-about">
  						<?php
  						while ( have_posts() ) : the_post();

  							get_template_part( 'template-parts/content', 'page' );

  							// If comments are open or we have at least one comment, load up the comment template.
  							if ( comments_open() || get_comments_number() ) :
  								comments_template();
  							endif;

  						endwhile; // End of the loop.
  						?>
            </div>
					</div>
				</div>
        <div class="fd-team-wrapper">
          <div class="row">
            <div class="col-xs-12">
              <div class="strike">
                <span><h3>OUR HEROES</h3></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-2">
              <div class="fd-team">
                <p>
                  <img src="<?php echo get_site_url(); ?>/wp-content/themes/fedora-id-v2/assets/img/zea.jpg" />
                </p>
                <h4>Alzea Arafat</h4>
                <p>Ketua & Web Developer</p>
              </div>
            </div>
            <div class="col-xs-12 col-md-2">
              <div class="fd-team">
                <p>
                  <img src="<?php echo get_site_url(); ?>/wp-content/themes/fedora-id-v2/assets/img/bonny.jpg" />
                </p>
                <h4>Bonny W. Nugraha</h4>
                <p>Wakil Ketua & Web Admin</p>
              </div>
            </div>
            <div class="col-xs-12 col-md-2">
              <div class="fd-team">
                <p>
                  <img src="<?php echo get_site_url(); ?>/wp-content/themes/fedora-id-v2/assets/img/gunawan.jpg" />
                </p>
                <h4>Gunawan Wijaya</h4>
                <p>Staff & Kontributor</p>
              </div>
            </div>
            <div class="col-xs-12 col-md-2">
              <div class="fd-team">
                <p>
                  <img src="<?php echo get_site_url(); ?>/wp-content/themes/fedora-id-v2/assets/img/bagus.jpg" />
                </p>
                <h4>Bagus Aji</h4>
                <p>Staff & Kontributor</p>
              </div>
            </div>
            <div class="col-xs-12 col-md-2">
              <div class="fd-team">
                <p>
                  <img src="<?php echo get_site_url(); ?>/wp-content/themes/fedora-id-v2/assets/img/mandala.jpg" style="height: 162px;" />
                </p>
								<h4>Mandala Rizky Arinanta</h4>
								<p>Staff & Kontributor</p>
              </div>
            </div>
						<div class="col-xs-12 col-md-2">
							<div class="fd-team">
								<p>
									<img src="<?php echo get_site_url(); ?>/wp-content/themes/fedora-id-v2/assets/img/you-face.gif" />
								</p>
								<h4>Kamu!</h4>
							</div>
						</div>
          </div>
					<div class="row">
						<div class="col-xs-12">
							<div align="center">
								<a href="http://fedora.or.id/gabung" target="_blank">
									<div class="fd-btn-gabung">
										<i class="fl-fedora" style="padding-right: 5px;"></i> Yuk gabung <strong>Fedora Indonesia</strong> Heroes!
									</div>
								</a>
							</div>
						</div>
        </div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
