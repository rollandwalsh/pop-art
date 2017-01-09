<?php
/*
Template Name: Work
*/
get_header(); ?>

<div id="pageWork" role="main">
	<section class="row">
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
	</section>
	
	<section class="work-examples">
		<?php
		$args = array(
		    'post_parent' => $post->ID,
		    'post_type' => 'page',
		    'orderby' => 'menu_order'
		);
		
		$child_query = new WP_Query( $args );
		?>
		
		<?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
			<?php $categories = get_the_category(); ?>
			<?php $hero = get_the_post_thumbnail(); ?>
			<article id="parent-<?php the_ID(); ?>" class="work-example">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php if (! empty($hero)) {
						echo $hero;
					} ?>	
					<h2><?php the_title(); ?></h2>
					<?php if (! empty($categories)) { ?>
						<p><?php echo esc_html($categories[0]->name); ?></p>
					<?php }?>
				</a>
			</article>
		<?php endwhile; ?>
		
		<?php wp_reset_postdata(); ?>
	</section>
</div>

<?php get_footer();
