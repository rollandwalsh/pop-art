<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="single-post" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="row align-center">
				<header class="small-10 columns">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php foundationpress_entry_meta(); ?>
				</header>
			</div>
			
			<?php get_template_part( 'template-parts/featured-image' ); ?>
			
			<div class="row align-center">
				<div class="entry-content small-10 columns">
					<?php the_content(); ?>
					<?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
				</div>
				<footer class="small-10 columns">
					<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
					<p><?php the_tags(); ?></p>
				</footer>
			</div>
	
			<div class="blog-comment">
				<div class="row">
					<div class="small-12 columns">
						<?php do_action( 'foundationpress_post_before_comments' ); ?>
						<?php comments_template(); ?>
						<?php do_action( 'foundationpress_post_after_comments' ); ?>
					</div>
				</div>
			</div>
		</article>
	<?php endwhile;?>
	
	<?php do_action( 'foundationpress_after_content' ); ?>

	<section class="blog-might-like">
		<h3>You Might Like</h3>
		<div class="row align-center">
			<div class="small-9 medium-4 columns">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/user-generated-content.png" alt="User Generated Content">
					<p>Case Study<span>Title</span></p>
				</a>
			</div>
			
			<div class="small-9 medium-4 columns">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/user-generated-content.png" alt="User Generated Content">
					<p>Case Study<span>Title</span></p>
				</a>
			</div>
			
			<div class="small-9 medium-4 columns">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/user-generated-content.png" alt="User Generated Content">
					<p>Case Study<span>Title</span></p>
				</a>
			</div>
		</div>
	</section>
	
	<section class="blog-subscribe">
		<div class="row">
			<div class="small-12 medium-6 large-7 columns">
				<h4>Subscribe to our Newsletter</h4>
				<p>Sign up to receive a monthly update from Pop Art, featuring articles, events, and news relevant to our business and the communities we serve. Your information is private and will not be sold to third parties. </p>
			</div>
			
			<div class="small-12 medium-6 large-5 columns">
				<input type="text" placeholder="Your Name">
				<input type="email" placeholder="Email">
				<a href="#" class="button">Subscribe Now</a>
			</div>
		</div>
	</section>
</div>

<!-- <?php get_sidebar(); ?> -->
<?php get_footer();
