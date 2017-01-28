<?php
/*
Template Name: Home
*/
get_header(); ?>

<a href="<?php echo get_permalink( get_page_by_title( 'Contact Us' ) ); ?>" class="cta" id="homeCTA">Get In Touch</a>

<header id="homeHero" class="page-hero" role="banner">
	<div class="home-hero-color">
		<div class="row align-center">
			<div class="small-12 columns">
				<h1>Behind Every Inefficiency, Opportunity.</h1>
				<h5><?php echo get_post_meta(get_the_ID(), 'subtitle', true); ?></h5>
			</div>
		</div>
	</div>
</header>

<div id="pageHome" role="main">
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
	
	<section class="home-tw">
		<div class="row align-center">
			<div class="small-12 large-8 medium-11 columns">
				<i class="fa fa-2x fa-twitter" data-aos="zoom-in-up"></i>
				
				<div id="homeTwitterSlider" data-aos="fade-up" data-aos-anchor-placement="top-bottom"></div>
			</div>
		</div>
	</section>
	
	<section class="home-lwt">
		<div class="row align-center">
			<div class="small-12 large-8 columns">
				<h2>Let's Work Together</h2>
				<p>Let’s talk. Better yet, meet. Tell us your pain points. Show us your wish lists. It’s likely we’ve wrestled with challenges similar enough to give us both a running start. Collaboration, we’ve learned, conquers all.</p>
			</div>
		</div>
			
		<div class="row align-center">
			<div class="small-12 large-4 medium-6 columns">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rocket_icon.svg" alt="New Business" data-aos="zoom-in-up" data-aos-duration="1500" style="height: 2.75rem">
				<div>
					<h4>New Business</h4>
					<span class="home-lwt-phone">+1 (503) 347 4700</span>
					<a href="mailto:hello@popart.com">hello@popart.com</a>
				</div>
			</div>
			
			<div class="small-12 large-4 medium-6 columns">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/star_icon.svg" alt="Join Our Team" data-aos="zoom-in-up" data-aos-duration="1500" style="height: 2.5rem">
				<div>
					<h4>Join Our Team</h4>
					<span class="home-lwt-phone">+1 (503) 242 4292</span>
					<a href="mailto:careers@popart.com">careers@popart.com</a>
				</div>
		 	</div>
		</div>
	</section>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/tweets_json.php?count=5&screen_name=popart"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>

<script>
$.getJSON('<?php echo get_template_directory_uri(); ?>/assets/javascript/tweets_json.php?count=5&screen_name=popart', function(data){
	$.each(data, function(key, value){
		var tweet = document.createElement('div');
		
		var date = document.createElement('span');
		date.classList.add('home-tw-timestamp');
		date.appendChild(document.createTextNode(formatDate(value.created_at)));
		
		var rawText = value.text;
		rawText = rawText.replace(/[…]/g, ' …');
		rawText = rawText.replace(/https:\/\/(\S*)/g,'<a href="https://$1">https://$1</a>');
		rawText = rawText.replace(/#(\S*)/g,'<a href="http://twitter.com/#!/search/$1">#$1</a>');
		var text = document.createElement('span');
		text.classList.add('home-tw-content');
		text.innerHTML = rawText;
		
		tweet.appendChild(date);
		tweet.appendChild(text);
		
		document.getElementById('homeTwitterSlider').appendChild(tweet);
	});
}).done(function(){
	twitterSlide('homeTwitterSlider');
});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/hero-text.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/home.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/aos/aos.js"></script>
<script>AOS.init();</script>

<?php get_footer();
