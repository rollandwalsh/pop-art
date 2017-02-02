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
				<?php dynamic_sidebar( 'single-sidebar-widgets' ); ?>

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
		foreach($posts as $post) {
			if (is_numeric($post)) {
				array_push($postIDs, $post);
			} else {
				array_push($postIDs, get_page_by_title($post, OBJECT, 'post')->ID);
			}
		}
		
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
			<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup">
				<form action="//popart.us14.list-manage.com/subscribe/post?u=13499979ff8372f1fd7000922&amp;id=f4bc239e8f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						<div class="mc-field-group">
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email*" style="margin-bottom: .5rem">
						</div>
						<div class="mc-field-group">
							<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name" style="margin-bottom: .5rem">
						</div>
						<div class="mc-field-group">
							<input type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder="Last Name" style="margin-bottom: .5rem">
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none; margin-bottom: .5rem"></div>
							<div class="response" id="mce-success-response" style="display:none; margin-bottom: .5rem"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_13499979ff8372f1fd7000922_f4bc239e8f" tabindex="-1" value=""></div>
						<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</div>
				</form>
			</div>
			<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
			<!--End mc_embed_signup-->
			</div>
		</div>
	</section>
</div>

<?php get_footer();
