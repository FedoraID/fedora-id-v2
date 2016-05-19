<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fedora_Indonesia_V2
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'fedora-id-v2' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<div class="site-branding">
						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="secondary">Fedora</span><span class="primary">ID</span></a></a></h1>
						<?php else : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="secondary">Fedora</span><span class="primary">ID</span></a></a></h1>
						<?php
						endif;?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="header-download-button">
						<a href="https://getfedora.org/" class="btn fd-btn-download" target="_blank"><i class="fl-fedora" style="padding-right: 5px;"></i> Download Fedora</a>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<hr style="margin-top: 0px;" />

	<div id="content" class="site-content">
