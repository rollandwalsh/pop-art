<?php
/*
Template Name: BAM
*/
get_header(); ?>

<header id="aboutHero" class="page-hero" role="banner" style="background-image: url(<?php echo (wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' )[0]); ?>)">
	<div class="row align-center">
		<div class="small-12 columns">
			<h1>Software Solutions As Unique As You Are.</h1>

			<h6><span>We help clients reduce inefficiencies through custom solutions that bring</span> <span>new content, operations and communications possibilities to bear. We boost efficiencies,</span> <span>bottom lines and esprit de corps for industry leading brands.</span></h6>
		</div>
	</div>
</header>

<nav class="software-breadcrumbs">
	<div class="small-12 columns">
		<ul>
			<li><a href="/">Home <i class="fa fa-angle-right"></i></a></li>
			<li><a href="/">Software <i class="fa fa-angle-right"></i></a></li>
			<li>BAM!</li>
		</ul>
	</div>
</nav>

<div id="pageBAM" role="main">
	<section class="bam-overview parallax slide-grow-element">
		<div class="row">
			<?php do_action( 'foundationpress_before_content' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
					<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
					<div class="entry-content parallax slide-element">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile;?>
			<?php do_action( 'foundationpress_after_content' ); ?>
		</div>
	</section>
	
	<section class="bam-dam">
		<h2>Digital Asset Managment. Ease is the new state-of-the-art.</h2>
		<div class="bam-dam-demo-image">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/dam-overview.png" alt="DAM" data-bddemo="0" class="current">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/demo/upload.png" alt="Upload" data-bddemo="1">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/demo/search.png" alt="Search" data-bddemo="2">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/demo/filter.png" alt="Filter" data-bddemo="3">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/demo/publish.png" alt="Publish" data-bddemo="4">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/demo/workflow.png" alt="Workflow" data-bddemo="5">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/demo/permissions.png" alt="Permissions" data-bddemo="6">
		</div>
		<ul class="bam-dam-demo-nav">
			<li data-bddemo="1"><span>1.</span> Upload</li>
			<li data-bddemo="2"><span>2.</span> Search</li>
			<li data-bddemo="3"><span>3.</span> Filter</li>
			<li data-bddemo="4"><span>4.</span> Publish</li>
			<li data-bddemo="5"><span>5.</span> Workflow</li>
			<li data-bddemo="6"><span>6.</span> Permissions</li>
		</ul>
		<div class="bam-dam-demo-header">
			<h4 data-bddemo="0" class="current">Content humanly organized, readily accessed.</h4>
			<h4 data-bddemo="1">Upload</h4>
			<h4 data-bddemo="2">Search</h4>
			<h4 data-bddemo="3">Filter</h4>
			<h4 data-bddemo="4">Publish</h4>
			<h4 data-bddemo="5">Workflow</h4>
			<h4 data-bddemo="6">Permissions</h4>
		</div>
		<div class="bam-dam-demo-content">
			<p data-bddemo="0" class="current"><span>BAM! combines the best of DAM technologies to corral today’s influx of digital content. Employing intuitive</span> <span>hierarchies and user-friendly interfaces, it organizes images, photos, video, documents, files, presentations, whatever,</span> <span>in common-sense ways stakeholders actually use. Everything, for everyone, in one place.</span> <span>Aligned. Secure. Locally. Globally. At the desk. In the field.</span></p>
			<p data-bddemo="1"><span>Upload a wide variety of content, from photos and videos to tweets and blog posts.</span> <span>Add metadata to aid file categorization and search optimization.</span> <span>Create custom thumbnails and assign content owners.</span></p>
			<p data-bddemo="2"><span>Intuitive search functions help you find exactly what you need.</span> <span>Predictive search engine saves you time and effort.</span> <span>Results can be easily categorized and filtered.</span></p>
			<p data-bddemo="3"><span>Toggle between grid-view and list-view to best suit your device screen.</span> <span>Results refresh live, saving time and unnecessary mouse clicks.</span> <span>Easily filter results by file type, size, keywords, and dates.</span></p>
			<p data-bddemo="4"><span>Create endpoints that link to your website, mobile app, and other digital platforms.</span> <span>Drag and drop functionality is intuitive and requires no experience.</span> <span>View version history and publish to multiple locations.</span></p>
			<p data-bddemo="5"><span>Assign user roles, involving the right people at the right time.</span> <span>Customizable workflow builder to fit your unique process.</span> <span>Set alerts and notifications to expedite approvals.</span></p>
			<p data-bddemo="6"><span>System admins act as gatekeepers to ensure total control.</span> <span>Set permissions based on department or business level.</span> <span>Add, edit, and delete users with admin approval.</span></p>
		</div>
		<a id="bamDamDemoStart" class="button secondary">Start Demo</a>
		<nav class="bam-dam-demo-buttons">
			<a id="bamDamDemoPrev"><i class="fa fa-angle-left"></i> Back</a> <a id="bamDamDemoNext">Next <i class="fa fa-angle-right"></i></a>
		</nav>
	</section>
	
	<section class="bam-benefits parallax slide-grow-element">
		<div class="row align-justify">
			<div class="small-12 columns">
				<h2 class="parallax slide-element">BAM! Benefits</h2>
			</div>
			
			<div class="small-12 medium-5 large-4 columns">
				<div class="bam-benefit parallax slide-element">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/amplify.png" alt="Amplify">
					<div class="copy">
						<span>Amplify the voice of your best customers.</span>
						<small>Incentivize finding and using user-generated content.</small>
					</div>
				</div>
				
				<div class="bam-benefit parallax slide-element">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/assets.png" alt="Assets">
					<div class="copy">
						<span>All assets up to date and easy to find.</span>
						<small>Save time, money and end the frustration.</small>
					</div>
				</div>
				
				<div class="bam-benefit parallax slide-element">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/sales.png" alt="Sales">
					<div class="copy">
						<span>Close more sales.</span>
						<small>Give sales teams anywhere, anytime access to up-to-date assets, even offline.</small>
					</div>
				</div>
			</div>
			
			<div class="small-12 medium-5 large-4 columns">
				<div class="bam-benefit parallax slide-element">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/align.png" alt="Align">
					<div class="copy">
						<span>Align in real-time.</span>
						<small>Get everyone on the same, secure, up-to-date, cloud based asset page.</small>
					</div>
				</div>
				
				<div class="bam-benefit parallax slide-element">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/employees.png" alt="Employees">
					<div class="copy">
						<span>Engage and retain employees.</span>
						<small>Leverage the credibility of employee generated content.</small>
					</div>
				</div>
				
				<div class="bam-benefit parallax slide-element">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/socail.png" alt="Social">
					<div class="copy">
						<span>Turn social fans into ambassadors.</span>
						<small>Curate and re-publish social media posts.</small>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="bam-endorsement">
		<h2>The Future is 3rd Party Endorsement</h2>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/user-generated-content.png" alt="User Generated Content">
		<div class="bam-endorsement-content">
			<h4>Harnessing user-generated content.</h4>
			<p>The hard truth: your users are more credible than you. It’s why top brands are collecting and curating brand-related consumer generated content - tweets, images, comments, videos, reviews, etc.</p>
			<p>BAM! not only gathers, organizes and pushes that activity but, uniquely, incentives and rewards staff and customers for adding new posts to your library.</p>
			<a data-open="damDemo" class="button secondary">Watch Demo</a>
		</div>
	</section>
	
	<section class="blog-might-like parallax slide-grow-element">
		<h3>You Might Like</h3>
		<div class="row align-center">
			<div class="small-9 medium-4 columns parallax slide-element">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/user-generated-content.png" alt="User Generated Content">
					<p>Case Study<span>Title</span></p>
				</a>
			</div>
			
			<div class="small-9 medium-4 columns parallax slide-element">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/user-generated-content.png" alt="User Generated Content">
					<p>Case Study<span>Title</span></p>
				</a>
			</div>
			
			<div class="small-9 medium-4 columns parallax slide-element">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/user-generated-content.png" alt="User Generated Content">
					<p>Case Study<span>Title</span></p>
				</a>
			</div>
		</div>
	</section>
	
	<section class="solutions-contact parallax slide-grow-element">
		<div class="row">
			<div class="small-12 columns">
				<h2>Contact Us Today</h2>
				<h5><span>Send us your email and, if you wish, a word or two about your company</span> <span>and challenges. There's no cost, no obligations, and a world of possibilities.</span></h5>
				<a href="<?php echo get_permalink( get_page_by_title( 'Contact Us' ) ); ?>" class="button white">Get in Touch</a>
			</div>
		</div>
	</section>
</div>

<div class="reveal full" id="damDemo" data-reveal>
	<div class="row align-center">
		<div class="small-12 columns">
			<h1>Digital Asset Management. Ease is the new state-of-the-art.</h1>
			<div id="damDemoSlider" class="damDemoContent">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/demo/upload.png" alt="Upload">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/demo/search.png" alt="Search">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/demo/filter.png" alt="Filter">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/demo/publish.png" alt="Publish">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/demo/workflow.png" alt="Workflow">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/demo/permissions.png" alt="Permissions">
			</div>
		</div>
		
		<div class="small-12 large-10 columns">
			<ol id="damDemoSliderNav">
				<li><span>1.</span> Upload</li>
				<li><span>2.</span> Search</li>
				<li><span>3.</span> Filter</li>
				<li><span>4.</span> Publish</li>
				<li><span>5.</span> Workflow</li>
				<li><span>6.</span> Permissions</li>
			</ol>
			
			<div id="damDemoSliderInfo" class="damDemoContent">
				<div>
					<h4>Upload</h4>
					<p>Upload a wide variety of content, from photos and videos to tweets and blog posts.<br>Add metadata to aid file categorization and search optimization.<br>Create custom thumbnails and assign content owners.</p>
				</div>
				
				<div>
					<h4>Search</h4>
					<p>Intuitive search functions help you find exactly what you need.</span> <span>Predictive search engine saves you time and effort.</span> <span>Results can be easily categorized and filtered.</p>
				</div>
				
				<div>
					<h4>Filter</h4>
					<p>Toggle between grid-view and list-view to best suit your device screen.</span> <span>Results refresh live, saving time and unnecessary mouse clicks.</span> <span>Easily filter results by file type, size, keywords, and dates.</p>
				</div>
				
				<div>
					<h4>Publish</h4>
					<p>Create endpoints that link to your website, mobile app, and other digital platforms.</span> <span>Drag and drop functionality is intuitive and requires no experience.</span> <span>View version history and publish to multiple locations.</p>
				</div>
				
				<div>
					<h4>Workflow</h4>
					<p>Assign user roles, involving the right people at the right time.</span> <span>Customizable workflow builder to fit your unique process.</span> <span>Set alerts and notifications to expedite approvals.</p>
				</div>
				
				<div>
					<h4>Permissions</h4>
					<p>System admins act as gatekeepers to ensure total control.</span> <span>Set permissions based on department or business level.</span> <span>Add, edit, and delete users with admin approval.</p>
				</div>
			</div>
			
			<nav class="dam-demo-buttons">
				<a id="damDemoSliderBack"><i class="fa fa-angle-left"></i> Back</a> <a id="damDemoSliderRight">Next <i class="fa fa-angle-right"></i></a>
			</nav>
		</div>
	</div>
	
	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script>
	$('[data-reveal]').on('open.zf.reveal', function() {
	    $('#damDemoSlider').resize();
	    $('#damDemoSliderNav').resize();
	    $('#damDemoSliderInfo').resize();
	});
	
	$(document).ready(function(){
		$('#damDemoSlider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '#damDemoSliderNav',	
		});
		$('#damDemoSliderNav').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			asNavFor: '.damDemoContent',
			dots: false,
			focusOnSelect: true,
			variableWidth: true,
			arrows: false,
			responsive: [
				{
					breakpoint: 800,
					settings: {
						slidesToShow: 3,
						infitine: true,
						centerMode: true
					},
				},
				{
					breakpoint: 500,
					settings: {
						slidesToShow: 2
					}
				}
			],
		});
		
		$('#damDemoSliderInfo').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			asNavFor: '#damDemoSliderNav',
			fade: true
		});
	});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/hero-text.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/parallax.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/bam.js"></script>

<?php get_footer();
