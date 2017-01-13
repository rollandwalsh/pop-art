<?php
/*
Template Name: Solutions
*/
get_header(); ?>

<header id="solutionsHero" class="page-hero" role="banner" style="background-image: url(<?php echo (wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' )[0]); ?>)">
	<div class="row align-center">
		<div class="small-12 columns">
			<h1>Solutions to a wide range of business problems.</h1>

			<h5><span>No two challenges are alike. But maybe some of the following will</span> <span>ring familiar. Or, maybe, bring us a new one to solve.</span></h5>
		</div>
	</div>
</header>

<div id="pageSolutions" role="main">
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
	
	<section class="solutions-contact">
		<div class="row">
			<div class="small-12 columns">
				<h2>Contact Us Today</h2>
				<h5><span>Send us your email and, if you wish, a word or two about your company</span> <span>and challenges. There's no cost, no obligations, and a world of possibilities.</span></h5>
				<a href="<?php echo get_permalink( get_page_by_title( 'Work' ) ); ?>" class="button white">Get in Touch</a>
			</div>
		</div>
	</section>
</div>

<script>
	$(function() {
		$('#issueInput1').typed({
			strings: ['Something typed', 'Something else typed', 'Words'],
			typeSpeed: 0
		})
		$('#issueInput2').typed({
			strings: ['Something typed', 'Something else typed', 'Words'],
			typeSpeed: 0
		})
	});
</script>

<?php get_footer();
