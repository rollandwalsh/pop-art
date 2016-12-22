<?php
/*
Template Name: Home
*/
get_header(); ?>

<a class="cta" id="homeCTA">Get In Touch</a>

<header id="homeHero" role="banner">
	<div class="home-hero-color">
		<div class="row align-center">
			<div class="large-12 columns">
				<h1>Behind Every Inefficiency, Opportunity.</h1>
				<h5><span>At today's pace, even the most celebrated companies struggle to optimize</span> <span>efficiencies. Assets may be in chaos. Legacy technology outdated.</span> <span>New hire onboarding laborious and slow. That's where we come in.</span></h5>
			</div>
		</div>
	</div>
</header>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="pageHome" role="main">
	<section class="row parallax slide-element">
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
				<header>
					<h2 class="entry-title"><?php the_title(); ?></h2>
				</header>
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile;?>
		<?php do_action( 'foundationpress_after_content' ); ?>
	</section>
	
	
	<section class="home-rps">
		<h2>Recent Projects</h2>
		
		<article class="home-rp parallax slide-element">
			<div class="home-rp-main" style="background-image: url(http://198.199.108.211/wp-content/themes/popart/assets/images/Spotlight_599x598/PA_Yogi_a.png)">
				<span class="home-rp-category">Project Spotlight</span>
				<p class="home-rp-headline"><span>Marketing Zen. Yogi Tea converts</span> <span>social media love into ROI.</span></p>
			</div>
			
			<div class="home-rp-hover purple">
				<h3>Yogi Tea</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="#"><i class="fa fa-eye"></i> View Product</a>
			</div>
		</article>
		
		<article class="home-rp parallax slide-element">
			<div class="home-rp-main" style="background-image: url(http://198.199.108.211/wp-content/themes/popart/assets/images/Spotlight_599x598/PA_Onboarding_Assist_a.png)">
				<span class="home-rp-category">Project Spotlight</span>
				<p class="home-rp-headline"><span>An H.R. Story. New hires onboarded</span> <span>in less than 5 minutes.</span></p>
			</div>
			
			<div class="home-rp-hover green">
				<h3>Onboarding Assist</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="#"><i class="fa fa-eye"></i> View Product</a>
			</div>
		</article>
		
		<article class="home-rp parallax slide-element">
			<div class="home-rp-main" style="background-image: url(http://198.199.108.211/wp-content/themes/popart/assets/images/Spotlight_599x598/PA_SmartSource_a.png)">
				<span class="home-rp-category">Project Spotlight</span>
				<p class="home-rp-headline"><span>A Sales Tale. Freightliner</span> <span>mobilizes deal closing assets</span></p>
			</div>
			
			<div class="home-rp-hover blue">
				<h3>Smartsource</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="#"><i class="fa fa-eye"></i> View Product</a>
			</div>
		</article>
		
		<article class="home-rp parallax slide-element">
			<div class="home-rp-main" style="background-image: url(http://198.199.108.211/wp-content/themes/popart/assets/images/Spotlight_599x598/PA_BAM_a.png)">
				<span class="home-rp-category">Software Spotlight</span>
				<p class="home-rp-headline"><span>BAM Platform. From asset chaos</span> <span>to asset clout.</span></p>
			</div>
			
			<div class="home-rp-hover red">
				<h3>BAM</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="#"><i class="fa fa-eye"></i> View Product</a>
			</div>
		</article>
	</section>
	
	<section class="home-tw">
		<div class="row align-center">
			<div class="large-8 medium-11 columns">
				<i class="fa fa-2x fa-twitter parallax slide-element"></i>
				
				<div id="homeTwitterSlider">
					<div>
						<span class="home-tw-timestamp">1:27 pm - 10 Oct 2016</span>
						<span class="home-tw-content">Lorem ipsum dolor sit amet, <a href="#" tabindex="0">consectetur adipiscing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> 
					</div>
					<div>
						<span class="home-tw-timestamp">1:27 pm - 10 Oct 2016</span>
						<span class="home-tw-content">Lorem ipsum dolor sit amet, <a href="#" tabindex="0">consectetur adipiscing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> 
					</div>
					<div>
						<span class="home-tw-timestamp">1:27 pm - 10 Oct 2016</span>
						<span class="home-tw-content">Lorem ipsum dolor sit amet, <a href="#" tabindex="0">consectetur adipiscing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> 
					</div>
					<div>
						<span class="home-tw-timestamp">1:27 pm - 10 Oct 2016</span>
						<span class="home-tw-content">Lorem ipsum dolor sit amet, <a href="#" tabindex="0">consectetur adipiscing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> 
					</div>
					<div>
						<span class="home-tw-timestamp">1:27 pm - 10 Oct 2016</span>
						<span class="home-tw-content">Lorem ipsum dolor sit amet, <a href="#" tabindex="0">consectetur adipiscing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> 
					</div>
				</div>
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
				<img src="http://198.199.108.211/wp-content/themes/popart/assets/images/Rocket_icon.svg" alt="New Business" class="parallax grow-element active" style="height: 2.25rem">
				<h4>New Business</h4>
				<span class="home-lwt-phone">+1(503)347 4700</span>
				<a href="#">hello@popart.com</a>
			</div>
			
			<div class="large-4 medium-6 columns">
				<img src="http://198.199.108.211/wp-content/themes/popart/assets/images/Star_icon.svg" alt="Join Our Team" class="parallax grow-element active" style="height: 2rem">
				<h4>Join Our Team</h4>
				<span class="home-lwt-phone">+1(503)242 4292</span>
				<a href="#">career@popart.com</a>
		 	</div>
		</div>
	</section>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/home.js"></script>

<?php get_footer();
