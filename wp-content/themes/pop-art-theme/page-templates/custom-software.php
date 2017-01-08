<?php
/*
Template Name: Custom Software
*/
get_header(); ?>

<header id="customSoftwareHero" class="page-hero" role="banner" style="background-image: url(<?php echo (wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' )[0]); ?>)">
	<div class="row align-center">
		<div class="small-12 columns">
			<h1>Software solutions as unique as you are.</h1>

			<h5><span>Our favorite challenges are the one’s we haven’t seen yet. Where</span> <span>you suspect something could be done better, faster, more intuitively,</span> <span>we apply our experience and ingenuity to the task.</span></h5>
		</div>
	</div>
</header>

<nav class="software-breadcrumbs">
	<div class="small-12 columns">
		<ul>
			<li><a href="/">Home <i class="fa fa-angle-right"></i></a></li>
			<li><a href="/software">Software <i class="fa fa-angle-right"></i></a></li>
			<li>BAM!</li>
		</ul>
	</div>
</nav>

<div id="pageBAM" role="main">
	<section class="software-testimonial">
		<div class="row">
			<div class="columns shrink">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial_icon.png" alt="Testimonial">
			</div>
			<div class="columns">
				<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”<cite>First Last<br>Title<br>Company</cite></blockquote>
			</div>
		</div>
	</section>
	
	<section class="custom-software-tiles">
		<div class="custom-software-tile-image">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/custom-software/built-to-work.png" alt="Built to Work">
		</div>
		
		<div class="custom-software-tile-content">
			<h4>Built to Work</h4>
			<p>No two businesses are alike, and no single off-the-shelf tool generally suffices. We specialize in custom development for business and communication. Employing proven technology stacks, and leveraging building blocks in our library, we design and develop tools for specific challenges. Requirements definition, iterative prototyping and agile development ensure highly usable, predictable and scalable software solutions.</p>
		</div>
	</section>
	
	<section class="custom-software-tiles">
		<div class="custom-software-tile-content">
			<h4>Designed for the User</h4>
			<p>Plain and simple, good UX design makes tools usable. Everything starts with a clear understanding of the specific needs of the customer. Research and rigorous testing together with interactive prototyping, help us evolve designs that are intuitive, pragmatic and fit for the job at hand resulting in high satisfaction and adoption by the end customer.</p>
		</div>
		
		<div class="custom-software-tile-image">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/custom-software/built-to-work.png" alt="Built to Work">
		</div>
	</section>
	
	<section class="custom-software-tiles">	
		<div class="custom-software-tile-image">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/custom-software/built-to-work.png" alt="Built to Work">
		</div>
		
		<div class="custom-software-tile-content">
			<h4>Iterative Prototyping</h4>
			<p>We deliver prototypes and working software early and often, incorporating user feedback at every stage to refine functionality and ease of use. This cost-effective approach ensures you get the right end-product, one fully embraced by customers, both within and outside the organization.</p>
		</div>
	</section>
	
	<section class="custom-software-tiles">
		<div class="custom-software-tile-content">
			<h4>Agile Development</h4>
			<p>For the highest degree of predictability and value, Pop Art develops software in an agile manner releasing working software at regular intervals integrating the highest features deemed highest value in each release. You will always be in control of how much you choose to invest in software using agile methodology. You have control over how much you spend on each phase. You can scale the team up or down, depending on what factors are most important to you feature sets, timelines and budgets.</p>
		</div>
		
		<div class="custom-software-tile-image">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/custom-software/built-to-work.png" alt="Built to Work">
		</div>
	</section>
	
	<section class="custom-software-projects">
		<h2>Custom Projects</h2>
		
		<article class="custom-software-vms-pro">
			<div class="custom-software-project-image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/custom-software/vms-pro.png" alt="VMS Pro">
			</div>
			
			<div class="custom-software-project-content">
				<h4>VMSPro. World Class Value Management Software</h4>
				<p>Pop Art worked with VMS Consulting to design and build a standardized platform for the management of value engineering programs and activities. It blends powerful analytic tools and state of the art functionality that allows team to collaborate to improve value. This software has been leveraged to guide the development of projects, product and processes helping organizations get the most out of limited resources. Developed based on use-cases and user testing, this platform includes a wide array of planning, analysis and reporting tools that are easy and intuitive for a businesses to incorporate into their planning processes.</p>
				<a href="#" class="button hollow white">Learn More</a>
			</div>
		</article>
		
		<article class="custom-software-fst">
			<div class="custom-software-project-content">
				<h4>FST App.</h4>
				<p>Freightliner deals in highly customizable configurations, involving hundreds of exterior, interior, and add-on choices. Together we created a leading-edge mobile app that puts real-time specs, comparison charts, even 3D renderings of over 6000 truck configurations at field rep’s fingertips, all linked to a data management hub.</p>
				<a href="#" class="button hollow gray">Learn More</a>
			</div>
			
			<div class="custom-software-project-image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/custom-software/fst.png" alt="FST">
			</div>
		</article>
		
		<article class="custom-software-onboarding-assistant">
			<div class="custom-software-project-image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/custom-software/onboarding-assistant.png" alt="Onboarding Assistant">
			</div>
			
			<div class="custom-software-project-content">
				<h4>Onboarding Assistant.</h4>
				<p>For Daimler North America, we created a simple checklist-style interface. Managers can run through an onboarding list of desk assignments, phones, computers, work buddies, first day agendas, etc in under 5 minutes, monitoring everything new hires need to succeed.</p>
				<a href="#" class="button hollow white">Learn More</a>
			</div>
		</article>
	</section>
	
	<section class="custom-software-blog-strip">
		<div class="row align-middle align-center">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pop-art-spark_icon.png" alt="Pop Art">
			<p>Looking for more great content? <a href="/blog">Check out our blog</a>.</p>
		</div>
	</section>
	
	<section class="about-contact">
		<div class="small-12 columns">
			<h2>Contact Us</h2>
			<p>Send us your email and, if you wish, a word or two about your company and challenges.<br>There's no cost, no obligation, and a world of possibility.</p>
			<a class="button hollow tertiary" href="/contact">Get in Touch</a>
		</div>
	</section>
	
	<section class="custom-software-overview">
		<div class="row">
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
		</div>
	</section>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/page.js"></script>

<?php get_footer();
