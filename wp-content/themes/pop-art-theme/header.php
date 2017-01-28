<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<script src="https://use.typekit.net/lbt6qag.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/node_modules/aos/dist/aos.css">
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<div data-sticky-container>
		<div data-sticky data-options="marginTop:0;" style="width:100%; background-color: #fff; padding: 1rem 0;">
			<div class="row">
				<header id="masthead" class="site-header" role="banner">
					<div class="title-bar" data-responsive-toggle="site-navigation" data-hide-for="large">
						<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
						<div class="title-bar-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>"></a>
						</div>
					</div>
			
					<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
						<div class="top-bar-left">
							<ul class="menu">
								<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>"></a></li>
							</ul>
						</div>
						<div class="top-bar-right">
							<?php foundationpress_top_bar_r(); ?>
			
							<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
								<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
							<?php endif; ?>
						</div>
						<div class="social-nav">
							<ul class="menu">
								<li><a href="https://twitter.com/popart"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/popartpdx"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/popartpdx/"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://www.linkedin.com/company/pop-art-inc-"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</nav>
				</header>
			</div>
		</div>
	</div>

	<section class="container">
		
		<?php do_action( 'foundationpress_after_header' );
