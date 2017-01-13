<?php
/*
Template Name: Home
*/
get_header(); ?>

<a href="<?php echo get_permalink( get_page_by_title( 'Contact Us' ) ); ?>" class="cta" id="homeCTA">Get In Touch</a>

<header id="homeHero" class="page-hero" role="banner">
	<div class="home-hero-color">
		<div class="row align-center">
			<div class="large-12 columns">
				<h1>Behind Every Inefficiency, Opportunity.</h1>
				<h5><span>At today's pace, even the most celebrated companies struggle to optimize</span> <span>efficiencies. Assets may be in chaos. Legacy technology outdated.</span> <span>New hire onboarding laborious and slow. That's where we come in.</span></h5>
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
			<div class="large-8 medium-11 columns">
				<i class="fa fa-2x fa-twitter parallax grow-element"></i>
				
				<div id="homeTwitterSlider"></div>
			</div>
		</div>
	</section>
	
	<section class="home-lwt parallax slide-element">
		<div class="row align-center">
			<div class="large-8 columns">
				<h2>Let's Work Together</h2>
				<p>Let's talk. Better yet, meet. Tell us your pain points. Show us your wish lists. It's likely we've wrestled with challenges similar enough to give us both a running start. Collaboration conquers all.</p>
			</div>
		</div>
			
		<div class="row align-center">
			<div class="large-4 medium-6 columns">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rocket_icon.svg" alt="New Business" class="parallax grow-element" style="height: 2.25rem">
				<h4>New Business</h4>
				<span class="home-lwt-phone">+1 (503) 347 4700</span>
				<a href="mailto:hello@popart.com">hello@popart.com</a>
			</div>
			
			<div class="large-4 medium-6 columns">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/star_icon.svg" alt="Join Our Team" class="parallax grow-element" style="height: 2rem">
				<h4>Join Our Team</h4>
				<span class="home-lwt-phone">+1 (503) 242 4292</span>
				<a href="mailto:career@popart.com">career@popart.com</a>
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

<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/page.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/home.js"></script>

<?php get_footer();
