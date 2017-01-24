<?php
/*
Template Name: Contact Us
*/
get_header(); ?>


<div id="pageContactUs" role="main">
	<section class="contact-page-form">
		<div class="row">
			<div class="small-12 columns">
				<h2>We're Here For You</h2>
				<p>Send us your e-mail and, if you wish, a word or two about your company and its challenges. There’s no cost, no obligation, and a world of possibility.</p>
				<?php echo do_shortcode( '[contact-form-7 id="124" title="Contact Us"]' ); ?>
			</div>
		</div>
	</section>
	
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

<?php get_footer();
