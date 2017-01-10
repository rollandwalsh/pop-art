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
		<div class="row">
			<div class="small-1 columns">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pop-art-spark_icon.png" alt="Pop Art">
			</div>
			<div class="blog-pop-art">
				<h4>Pop Art</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			
			<header class="small-12 columns">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php foundationpress_entry_meta(); ?>
			</header>
		</div>
		
		<?php get_template_part( 'template-parts/featured-image' ); ?>
		
		<div class="row">
			<div class="entry-content small-12 columns">
				<?php the_content(); ?>
				<?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
			</div>
			<footer class="small-12 columns">
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php the_post_navigation(); ?>
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

</div>
<!-- <?php get_sidebar(); ?> -->
<?php get_footer();
