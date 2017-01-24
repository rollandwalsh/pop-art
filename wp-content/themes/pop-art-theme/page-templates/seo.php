<?php
/*
Template Name: SEO
*/
get_header(); ?>

<header id="seoHero" class="page-hero no-fade" role="banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
	<div class="row align-center">
		<div class="small-12 columns">
			<h1><?php echo the_title(); ?></h1>

			<h6><?php echo get_post_meta(get_the_ID(), 'subtitle', true); ?></h6>
		</div>
	</div>
</header>

<nav class="software-breadcrumbs" style="margin-bottom: 4rem">
	<div class="small-12 columns">
		<ul>
			<li><a href="/">Home <i class="fa fa-angle-right"></i></a></li>
			<li><a href="/">Software <i class="fa fa-angle-right"></i></a></li>
			<li><?php echo the_title(); ?></li>
		</ul>
	</div>
</nav>

<div id="pageSeo" role="main">
	<section class="seo-content">
		<div class="small-12 columns">
			<?php do_action( 'foundationpress_before_content' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
					<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile;?>
			<?php do_action( 'foundationpress_after_content' ); ?>
		</div>
	</section>
	
	<section class="solutions-contact">
		<div class="row">
			<div class="small-12 columns">
				<h2>Contact Us Today</h2>
				<h5><span>Send us your email and, if you wish, a word or two about your company</span> <span>and challenges. There's no cost, no obligations, and a world of possibilities.</span></h5>
				<a href="<?php echo get_permalink( get_page_by_title( 'Contact Us' ) ); ?>" class="button white">Get in Touch</a>
			</div>
		</div>
	</section>
</div>

<?php get_footer();
