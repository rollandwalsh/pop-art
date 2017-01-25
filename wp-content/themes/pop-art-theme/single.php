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
				<header class="small-10 medium-9 columns">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php foundationpress_entry_meta(); ?>
				</header>
			</div>
			
			<?php get_template_part( 'template-parts/featured-image' ); ?>
			
			<div class="row" id="singlePost">
				<ul class="entry-social">
					<li><h6>Share</h6></li>
					<li><i class="fa fa-heart-o"></i></li>
					<li><i class="fa fa-twitter"></i></li>
					<li><i class="fa fa-facebook"></i></li>
				</ul>
				<div class="entry-content small-10 medium-9 columns">
					<?php the_content(); ?>
					<?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
				</div>
				<footer class="small-10 medium-9 columns">
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
	
	<?php
		$posts = get_post_meta(get_the_ID(), 'you_might_like', false);
		$postIDs = array();
		foreach($posts as $post) {array_push($postIDs, get_page_by_title($post, OBJECT, 'post')->ID);}
		
		$args = array(
			'posts_per_page'	=> 3,
			'post__in'			=> $postIDs
		);
		
		$query = new WP_Query($args);
		
		if ( $query->have_posts() ) : ?>
		<section class="blog-might-like">
			<h3>You Might Like</h3>
			<div class="row align-center">
				<?php while( $query->have_posts() ) : $query->the_post(); ?>
					<div class="small-9 medium-4 columns">
						<?php get_template_part( 'template-parts/content-might-like', get_post_format() ); ?>
					</div>
				<?php endwhile ?>
			</div>
		</section>
	<?php 
		wp_reset_postdata();
		endif;
	?>
	
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

<script>
$elem = $('#singlePost .entry-social');
$elemHeight = $('#singlePost .entry-social').outerHeight();
$contentHeight = $('#singlePost .entry-content').outerHeight() - 250;

$(window).scroll(function(){
	if ($(window).scrollTop() <= ($contentHeight - $elemHeight)) {
		$elem.css('top', $(window).scrollTop());
	}
}).trigger('scroll');	
</script>

<?php get_footer();
