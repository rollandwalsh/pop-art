<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<?php $categories = get_the_category(); ?>
<?php $hero = get_the_post_thumbnail_url(); ?>
<?php $excerpt = substr(get_the_excerpt(), 0, 80); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<?php if (! empty($hero)) { ?>
		<a href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $hero; ?>)" class="blog-post-thumbnail"></a>
	<?php } ?>
	<header>
		<?php if (! empty($categories)) { ?>
			<p class="blog-category"><?php echo esc_html($categories[0]->name); ?></p>
		<?php }?>		
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<div class="entry-content">
		<?php echo $excerpt; ?>...
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</div>
