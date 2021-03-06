<?php
/*
Template Name: BAM
*/
get_header(); ?>

<header id="aboutHero" class="page-hero" role="banner" style="background-image: url(<?php echo (wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' )[0]); ?>)">
	<div class="row align-center">
		<div class="small-12 columns">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/bam_logo_white.png" alt="BAM" style="margin-bottom: 1rem">
			
			<h1>BAM!&trade; Assets Managed. Assets Mobilized.</h1>

			<h6><span>Introducing BAM!. A powerful, proprietary, content organization and</span> <span>mobilization platform that streamlines your path to digital agility and efficacy.</span></h6>
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
	<section class="bam-overview">
		<div class="row">
			<?php do_action( 'foundationpress_before_content' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
					<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
					<div class="entry-content" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile;?>
			<?php do_action( 'foundationpress_after_content' ); ?>
		</div>
	</section>
	
	<div class="row">
		<div class="small-12 columns">
			<section class="bam-dam" id="DAM">
				<h2>Digital Asset Management. Ease is the new state-of-the-art.</h2>
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
					<li data-bddemo="1">Upload</li>
					<li data-bddemo="2">Search</li>
					<li data-bddemo="3">Filter</li>
					<li data-bddemo="4">Publish</li>
					<li data-bddemo="5">Workflow</li>
					<li data-bddemo="6">Permissions</li>
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
					<p data-bddemo="4"><span>Create endpoints that publish instantly to your website, mobile app, social media and other digital platforms.</span> <span>Drag and drop functionality is intuitive and requires no experience.</span> <span>View version history and publish to multiple locations.</span></p>
					<p data-bddemo="5"><span>Assign user roles, involving the right people at the right time.</span> <span>Customizable workflow builder to fit your unique process.</span> <span>Set alerts and notifications to expedite approvals.</span></p>
					<p data-bddemo="6"><span>System admins act as gatekeepers to ensure total control.</span> <span>Set permissions based on department or business level.</span> <span>Add, edit, and delete users with admin approval.</span></p>
				</div>
				<a id="bamDamDemoStart" class="button secondary">Start Demo</a>
				<nav class="bam-dam-demo-buttons">
					<a id="bamDamDemoPrev"><i class="fa fa-angle-left"></i> Back</a> <a id="bamDamDemoNext">Next <i class="fa fa-angle-right"></i></a>
				</nav>
			</section>
		</div>
	</div>
	
	<section class="bam-benefits">
		<div class="row align-justify">
			<div class="small-12 columns">
				<h2 data-aos="fade-up" data-aos-anchor-placement="top-bottom">BAM! Benefits</h2>
			</div>
			
			<div class="small-12 medium-5 columns">
				<div class="bam-benefit" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/amplify.png" alt="Amplify">
					<div class="copy">
						<span>Amplify the voice of your best customers.</span>
						<small>Incentivize finding and using user-generated content.</small>
					</div>
				</div>
				
				<div class="bam-benefit" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/assets.png" alt="Assets">
					<div class="copy">
						<span>All assets up to date and easy to find.</span>
						<small>Save time, money and end the frustration.</small>
					</div>
				</div>
				
				<div class="bam-benefit" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/sales.png" alt="Sales">
					<div class="copy">
						<span>Close more sales.</span>
						<small>Give sales teams anywhere, anytime access to up-to-date assets, even offline.</small>
					</div>
				</div>
			</div>
			
			<div class="small-12 medium-5 columns">
				<div class="bam-benefit" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/align.png" alt="Align">
					<div class="copy">
						<span>Align in real-time.</span>
						<small>Get everyone on the same, secure, up-to-date, cloud based asset page.</small>
					</div>
				</div>
				
				<div class="bam-benefit" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/employees.png" alt="Employees">
					<div class="copy">
						<span>Engage and retain employees.</span>
						<small>Leverage the credibility of employee generated content.</small>
					</div>
				</div>
				
				<div class="bam-benefit" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/benefits/socail.png" alt="Social">
					<div class="copy">
						<span>Turn social fans into ambassadors.</span>
						<small>Curate and re-publish social media posts.</small>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="bam-endorsement align-justify" id="UGC">
		<div class="small-12 columns"><h2>The Future is 3rd Party Endorsement</h2></div>
		<div class="bam-endorsement-image small-12 medium-8 large-6 columns">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/user-generated-content.png" alt="User Generated Content" data-bedemo="0" class="current">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/endorsement/create.png" alt="Campaigns" data-bedemo="1">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/endorsement/network.png" alt="Network" data-bedemo="2">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/endorsement/upload.png" alt="Upload" data-bedemo="3">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/endorsement/curate.png" alt="Curate" data-bedemo="4">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/endorsement/search.png" alt="Search" data-bedemo="5">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bam/endorsement/publish.png" alt="Publish" data-bedemo="6">
			
			<ul class="bam-endorsement-nav">
				<li data-bedemo="1">Campaigns</li>
				<li data-bedemo="2">Network</li>
				<li data-bedemo="3">Upload</li>
				<li data-bedemo="4">Curate</li>
				<li data-bedemo="5">Search</li>
				<li data-bedemo="6">Publish</li>
			</ul>
		</div>
		<div class="bam-endorsement-content small-12 medium-4 large-5 columns">
			<div class="current"  data-bedemo="0">
				<h4>Harnessing user-generated content.</h4>
				<p>The hard truth: your users are more credible than you. It’s why top brands are collecting and curating brand-related consumer generated content - tweets, images, comments, videos, reviews, etc.</p>
				<p>BAM! not only gathers, organizes and pushes that activity but, uniquely, incentives and rewards staff and customers for adding new posts to your library.</p>
			</div>
			<div data-bedemo="1">
				<h4>Campaigns</h4>
				<p>Launch a campaign for specific content you want to collect.</p>
				<p>Set an expiration date, or you can leave it open-ended.</p>
				<p>Add incentives to encourage higher participation.</p>
			</div>
			<div data-bedemo="2">
				<h4>Network</h4>
				<p>Build a network starting with passionate employees most active on social media.</p>
				<p>Add authenticity by inviting brand ambassadors from outside your company.</p>
				<p>Manage, notify, and collaborate with any user at any level.</p>
			</div>
			<div data-bedemo="3">
				<h4>Upload</h4>
				<p>Upload a wide variety of content, from photos and videos to tweets and blog posts.</p>
				<p>Receive points and incentives for continued content submissions.</p>
				<p>Assign content to a single campaign or multiple campaigns.</p>
			</div>
			<div data-bedemo="4">
				<h4>Curate</h4>
				<p>Promote, archive, or flag each piece of content so the best rises to the top.</p>
				<p>Set alerts and notifications when new content has been added.</p>
				<p>All content is automatically saved in the Asset Library.</p>
			</div>
			<div data-bedemo="5">
				<h4>Search</h4>
				<p>Intuitive search functions help you find exactly what you need.</p>
				<p>Predictive search engine saves you time and effort.</p>
				<p>Results can be easily categorized and filtered.</p>
			</div>
			<div data-bedemo="6">
				<h4>Publish</h4>
				<p>Create endpoints that publish instantly to your website, mobile app, social media and other digital platforms.</p>
				<p>Drag and drop functionality is intuitive and requires no experience.</p>
				<p>View version history and publish to multiple locations.</p>
			</div>
			<a id="bamEndorsementStart" class="button secondary">Watch Demo</a>
			<nav class="bam-endorsement-buttons">
				<a id="bamEndorsementPrev"><i class="fa fa-angle-left"></i> Back</a> <a id="bamEndorsementNext">Next <i class="fa fa-angle-right"></i></a>
			</nav>
		</div>
	</section>
	
	<?php
		$posts = get_post_meta(get_the_ID(), 'you_might_like', false);
		$postIDs = array();
		foreach($posts as $post) {
			if (is_numeric($post)) {
				array_push($postIDs, $post);
			} else {
				array_push($postIDs, get_page_by_title($post, OBJECT, 'post')->ID);
			}
		}
				
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

<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/hero-text.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/bam.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/aos/aos.js"></script>
<script>AOS.init();</script>

<?php get_footer();
