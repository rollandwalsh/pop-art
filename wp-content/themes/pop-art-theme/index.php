<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<header id="blogHero" class="page-hero no-fade" role="banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/heroes/blog_hero.jpg)">
	<div class="row align-center">
		<div class="large-12 columns">
			<h1>Trends and Topics</h1>
			<h6>Things that spark our interest. Check back. It's always evolving.</h6>
		</div>
	</div>
</header>

<div class="blog-search align-right">
	<div class="small-8 medium-5 large-4 columns">
		<?php get_search_form( true ); ?>
	</div>
</div>

<div class="blog-filter align-center">
	<div class="small-12 columns">
		<ul id="blogFilterList">
			<li class="active"><a href="#">All</a></li>
			<?php 
			$args = array(
				'title_li'		=> '',
				'hide_empty'	=> 0,
			);
			
			echo wp_list_categories($args);
			?>
		</ul>
	</div>
</div>

<div id="pageBlog" role="main">
	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>

	</article>
</div>
	
<section class="blog-subscribe">
	<div class="row">
		<div class="small-12 medium-6 large-7 columns">
			<h4>Subscribe to our Newsletter</h4>
			<p>Sign up to receive a monthly update from Pop Art, featuring articles, events, and news relevant to our business and the communities we serve. Your information is private and will not be sold to third parties. </p>
		</div>
		
		<div class="small-12 medium-6 large-5 columns">
			[contact-form-7 id="662" title="Subscribe to our Newsletter"]
		</div>
	</div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/blog.js"></script>

<?php get_footer();
