<?php
/*
Template Name: BAM
*/
get_header(); ?>

<header id="aboutHero" class="page-hero" role="banner" style="background-image: url(<?php echo (wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' )[0]); ?>)">
	<div class="row align-center">
		<div class="small-12 columns">
			<h1>Software Solutions As Unique As You Are.</h1>

			<h5><span>We help clients reduce inefficiencies through custom solutions that bring</span> <span>new content, operations and communications possibilities to bear. We boost efficiencies,</span> <span>bottom lines and esprit de corps for industry leading brands.</span></h5>
		</div>
	</div>
</header>

<nav class="software-breadcrumbs">
	<ul>
		<li><a href="/">Home</a></li>
		<li><a href="/software">Software</a></li>
		<li>BAM!</li>
	</ul>
</nav>

<div id="pageBAM" role="main">
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
	
	<section class="bam-dam">
		<h2>Data Asset Managment. Ease is the new state-of-the-art.</h2>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/dam-overview.jpg" alt="DAM">
		<h4>Content humanly organized, readily accessed.</h4>
		<p><span>BAM combines the best of DAM technologies to corral today’s influx of digital content. Employing intuitive</span> <span>hierarchies and user-friendly interfaces, it organizes images, photos, video, documents, files, presentations, whatever,</span> <span>in common-sense ways stakeholders actually use. Everything, for everyone, in one place.</span> <span>Aligned. Secure. Locally. Globally. At the desk. In the field.</span></p>
		<a href="#" class="button secondary">Start Demo</a>
	</section>
	
	<section class="bam-benefits">
		<div class="row align-justify">
			<div class="small-12 columns">
				<h2>BAM Benefits</h2>
			</div>
			
			<div class="small-12 medium-5 large-4 columns">
				<div class="bam-benefit">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/amplify.png" alt="Amplify">
					<div class="copy">
						<span>Amplify the voice of your best customers.</span>
						<small>Incentivize finding and using user-generated content.</small>
					</div>
				</div>
				
				<div class="bam-benefit">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/assets.png" alt="Assets">
					<div class="copy">
						<span>All assets up to date and easy to find.</span>
						<small>Save time, money and end the frustration.</small>
					</div>
				</div>
				
				<div class="bam-benefit">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/sales.png" alt="Sales">
					<div class="copy">
						<span>Close more sales.</span>
						<small>Give sales teams anywhere, anytime access to up-to-date assets, even offline.</small>
					</div>
				</div>
			</div>
			
			<div class="small-12 medium-5 large-4 columns">
				<div class="bam-benefit">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/align.png" alt="Align">
					<div class="copy">
						<span>Align in real-time.</span>
						<small>Get everyone on the same, secure, up-to-date, cloud based asset page.</small>
					</div>
				</div>
				
				<div class="bam-benefit">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/employees.png" alt="Employees">
					<div class="copy">
						<span>Engage and retain employees.</span>
						<small>Leverage the credibility of employee generated content.</small>
					</div>
				</div>
				
				<div class="bam-benefit">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/socail.png" alt="Social">
					<div class="copy">
						<span>Turn social fans into ambassadors.</span>
						<small>Curate and re-publish social media posts.</small>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="bam-testimonial">
		<div class="row">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial_icon.png" alt="Testimonial">
			<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<cite>First Last<br>Title<br>Company</cite></blockquote>
		</div>
	</section>
	
	<section class="bam-endorsement">
		<div class="">
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
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/page.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/about.js"></script>

<?php get_footer();
