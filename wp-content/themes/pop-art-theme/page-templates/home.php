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
			<div class="home-rp-main" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/yogi.png)">
				<span class="home-rp-category">Project Spotlight</span>
				<p class="home-rp-headline"><span>Marketing Zen. Yogi Tea converts</span> <span>social media love into ROI.</span></p>
			</div>
			
			<div class="home-rp-hover purple">
				<h3>Yogi Tea</h3>
				<p>Yogi tea, having garnered an enviable social media following, was anxious to convert that enthusiasm into sales.   We developed a simple drag and drop tool called “Inspirations” that lets Yogi gather and curate fan photos and link them to purchasing menus on their e-commerce site.</p>
				<a href="#"><i class="fa fa-eye"></i> View Product</a>
			</div>
		</article>
		
		<article class="home-rp parallax slide-element">
			<div class="home-rp-main" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/onboarding_assist.png)">
				<span class="home-rp-category">Project Spotlight</span>
				<p class="home-rp-headline"><span>An H.R. Story. New hires onboarded</span> <span>in less than 5 minutes.</span></p>
			</div>
			
			<div class="home-rp-hover green">
				<h3>Onboarding Assist</h3>
				<p>We helped Daimler streamline onboarding with a custom checklist style interface that assigns work spaces, computers, phones, work buddies and first-day agendas, etc.  Managers can run through the checklist in less than 5 minutes, note and address outstanding requests, and launch new hires to a pivotal a great start.</p>
				<a href="#"><i class="fa fa-eye"></i> View Product</a>
			</div>
		</article>
		
		<article class="home-rp parallax slide-element">
			<div class="home-rp-main" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/smartsource.png)">
				<span class="home-rp-category">Project Spotlight</span>
				<p class="home-rp-headline"><span>A Sales Tale. Freightliner</span> <span>mobilizes deal closing assets</span></p>
			</div>
			
			<div class="home-rp-hover blue">
				<h3>Smartsource</h3>
				<p>Freightliner deals in highly customizable configurations, with hundreds of exterior, interior and drive-train decisions. Together we created a leading-edge mobile app that puts real-time specs, competitive charts, even 3D renderings of over 6000 configurations in field rep’s hands, updated in real time by an asset management system.</p>
				<a href="#"><i class="fa fa-eye"></i> View Product</a>
			</div>
		</article>
		
		<article class="home-rp parallax slide-element">
			<div class="home-rp-main" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bam.png)">
				<span class="home-rp-category">Software Spotlight</span>
				<p class="home-rp-headline"><span>BAM Platform. From asset chaos</span> <span>to asset clout.</span></p>
			</div>
			
			<div class="home-rp-hover red">
				<h3>BAM</h3>
				<p>BAM!, our proprietary shortcut to digital asset management, organizes and mobilizes your assets, ensuring the right content is where, and when, it’s needed.  Easy to use and intuitive, it’s readily adopted - saving time, money and aligning everyone on the same real-time page.</p>
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
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rocket_icon.svg" alt="New Business" class="parallax grow-element active" style="height: 2.25rem">
				<h4>New Business</h4>
				<span class="home-lwt-phone">+1(503)347 4700</span>
				<a href="#">hello@popart.com</a>
			</div>
			
			<div class="large-4 medium-6 columns">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/star_icon.svg" alt="Join Our Team" class="parallax grow-element active" style="height: 2rem">
				<h4>Join Our Team</h4>
				<span class="home-lwt-phone">+1(503)242 4292</span>
				<a href="#">career@popart.com</a>
		 	</div>
		</div>
	</section>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/home.js"></script>

<?php get_footer();
