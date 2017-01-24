<?php
/**
 * The default template for displaying might like content
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

<div id="post-<?php the_ID(); ?>" class="might-like">
	<?php if (! empty($hero)) { ?>
		<a href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $hero; ?>)" class="blog-post-thumbnail"></a>
	<?php } ?>
	<header>
		<a href="<?php the_permalink(); ?>">
			<p>
				<?php if (! empty($categories)) : echo esc_html($categories[0]->name); endif ?>
				<span><?php the_title(); ?></span>
			</p>
		</a>
	</header>
</div>
