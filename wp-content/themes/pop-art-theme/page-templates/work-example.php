<?php
/*
Template Name: Work Example
*/
get_header(); ?>

<a href="<?php echo get_permalink( get_page_by_title( 'Contact Us' ) ); ?>" class="cta" id="homeCTA">Get In Touch</a>

<header class="work-example-hero <?php echo $post->post_name; ?>" role="banner">
	<a href="<?php echo get_permalink( get_page_by_title( 'Work' ) ); ?>"><i class="fa fa-angle-left"></i></a>
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/work/heroes/<?php echo $post->post_name; ?>.png" alt="<?php the_title(); ?>">
	</div>
</header>

<div id="pageWorkExample" class="<?php echo $post->post_name; ?>" role="main">
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
					<div class="small-9 medium-4 columns" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
						<?php get_template_part( 'template-parts/content-might-like', get_post_format() ); ?>
					</div>
				<?php endwhile ?>
			</div>
		</section>
	<?php 
		wp_reset_postdata();
		endif;
	?>
	
	<section class="work-blog-strip">
		<div class="row align-middle align-center">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pop-art-spark_icon.png" alt="Pop Art">
			<p>Looking for more great content? <a href="/blog">Check out our blog</a>.</p>
		</div>
	</section>
	
	<section class="solutions-contact">
		<div class="row">
			<div class="small-12 columns">
				<h2>Contact Us Today</h2>
				<h5><span>Send us your email and, if you wish, a word or two about your company</span> <span>and challenges. There's no cost, no obligations, and a world of possibilities.</span></h5>
				<a href="<?php echo get_permalink( get_page_by_title( 'Contact Us' ) ); ?>" class="button white">Get in Touch</a>
			</div>
		</div>
	</section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script>
	var slickInit = function() {
		$('.work-example-slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			autoplay: false,
			adaptiveHeight: true,
			infinite: true,
			nextArrow: '<i class="fa fa-angle-right"></i>',
			prevArrow: '<i class="fa fa-angle-left"></i>'
		});
	}
	
	$(document).ready(function(){
		$.when(slickInit()).done(function() {
			AOS.init();
		})
	});
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/aos/aos.js"></script>
	
<?php get_footer();
