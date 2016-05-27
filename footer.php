<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fedora_Indonesia_V2
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<br  />
		<br  />
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3">
					<p><strong><h4 class="title">Mengenal Fedora</strong></h4></p>
					<ul class="list-unstyled">
						<li><a href="https://docs.fedoraproject.org/en-US/index.html"><small class="footer-link">Fedora Project</small></a> <small>~ Website Resmi</small></li>
						<li><a href="http://fedoramagazine.org/"><small class="footer-link">Fedora Magazine</small></a> <small>~ Artikel Pilihan</small></li>
						<li><a href="http://fedora.or.id/tentang-fedora-indonesia/"><small class="footer-link">Tentang Fedora.or.id</small></a> <small>~ Kenalan Yuk!</small></li>
					</ul>
				</div>
				<div class="col-xs-12 col-md-3">
					<p><strong><h4 class="title">Jadi Kontributor</h4></strong></p>
					<small>Semua boleh nyumbang ilmu, semua boleh sharing link yang menarik tentang Fedora Linux. <a href="http://fedora.or.id/gabung">Cara berkontribusi.</a></small>
				</div>
				<div class="col-xs-12 col-md-3">
					<p><strong><h4 class="title">Kerja Sama</h4></strong></p>
					<small>Saran, dan tawaran kerja sama atau kolaborasi bisa dikirimkan ke alamat email <strong>id.fedora@gmail.com</strong></small>
				</div>
				<div class="col-xs-12 col-md-3">
					<p><strong><h4 class="title">Di Sponsori Oleh</h4></strong></p>
					<a href="http://iixmedia.com" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/fedora-id-v2/assets/img/iixmedia.png" /></a>
				</div>
			</div>
		</div>
		<br  / />
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<hr  />
					<div class="site-info">
						<p><small>Website ini ditenagai <a href="https://wordpress.org">WordPress</a> | Tema dibuat oleh <a href="http://github.com/alzearafat/">Zea</a>, ter-inspirasi dari <a href="http://id-laravel.com">ID-Laravel</a></small></p>
					</div><!-- .site-info -->
					<div align="center">
						<a href="https://www.facebook.com/groups/id.fedora/" target="_blank">
							<div class="fd-btn-facebook">
								<i class="fa fa-facebook-official fa-lg"></i> <strong>Diskusi</strong> Bareng di <strong>Facebook</strong>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
