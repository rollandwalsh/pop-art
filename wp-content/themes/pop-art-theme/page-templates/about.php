<?php
/*
Template Name: About
*/
get_header(); ?>

<header id="aboutHero" class="page-hero" role="banner" style="background-image: url(<?php echo (wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' )[0]); ?>)">
	<div class="row align-center">
		<div class="small-12 columns">
			<h1>Partners in Technological Innovation.</h1>

			<h5><span>We help clients reduce inefficiencies through custom solutions that bring</span> <span>new content, operations and communications possibilities to bear. We boost efficiencies,</span> <span>bottom lines and esprit de corps for industry leading brands.</span></h5>
		</div>
	</div>
</header>

<div id="pageAbout" role="main">
	<section class="about-capabilities">
		<div class="align-justify">
			<div id="aboutCapabilitiesContent" class="small-12 medium-7 large-5 small-order-2 medium-order-1 columns">
				<div class="active" data-section="strategyContent">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/capabilities/strategy.png" alt="Strategy">
					<h3>Strategy</h3>
					<p>We partner with our clients to help them solve their toughest problems and capitalize on opportunities. We leverage the latest technologies and our own proven platforms as building blocks for custom solutions. Correct problem identification comes first. Then, we are able to deliver the solution that best meets the need and yields the greatest business value.</p>
				</div>
				
				<div data-section="iterativePrototypingContent">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/capabilities/iterative-prototyping.png" alt="Iterative Prototyping">
					<h3>Iterative Prototyping</h3>
					<p>We design our tools and systems, from the beginning, using an iterative design process involving the end users. We build interactive prototypes, conduct user testing, analyze results and refine the solution. We repeat this process until we have a solution that is intuitive to use, meets the functional requirements and provides optimal value for client and user alike.</p>
				</div>
				
				<div data-section="requirementsDefinitionContent">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/capabilities/requirements-definition.png" alt="Requirements Definition">
					<h3>Requirements Definition</h3>
					<p>We help our clients define the problem at hand and define the highest value solution. It starts with stakeholder interviews and review of current tools and systems. From there, we produce robust requirements documentation that defines business, functional and technical specifications in terms that avoid unnecessary complication. Prototypes are developed in concert so our clients have a complete blue-print for executing the solution.</p>
				</div>
				
				<div data-section="responsiveWebsitesContent">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/capabilities/responsive-websites.png" alt="Responsive Websites">
					<h3>Responsive Websites</h3>
					<p>We employ best practices in responsive design to ensure all web pages can be viewed and navigated on the size of the screen being used. We ensure our designs adapt to the chosen device from a visual design and usability perspective. Easily used to access information, our designs improve adoption and repeat visits, ensuring high SEO rankings for mobility.</p>
				</div>
				
				<div data-section="userExperienceDesignContent">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/capabilities/user-experience-design.png" alt="User Experience Design">
					<h3>User Experience Design</h3>
					<p>We live for simple, beautiful, intuitive user design. Using prototypes, working software and ongoing customer trial, we hone our interfaces throughout design and development. Through thoughtful information architecture and advanced search integration, we make information easy to find. And ensure everything scales for optimum performance on every device.</p>
				</div>
				
				<div data-section="crossPlatformMobileAppsContent">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/capabilities/cross-platform-mobile-apps.png" alt="Cross Platform Mobile Apps">
					<h3>Cross Platform Mobile Apps</h3>
					<p>We specialize in cross-platform mobile development optimizing for the most widely used iOS and Android platforms and devices.  It’s both faster and easier to maintain than leveraging a single codebase.  We then customize for specific platforms to optimize the user experience and adoption rates.  Ionic , HTML5, CSS3, Javascript, Objective-C Swift, Java, C#, .NET, and more.</p>
				</div>
				
				<div data-section="customSoftwareContent">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/capabilities/custom-software.png" alt="Custom Software">
					<h3>Custom Software</h3>
					<p>No two businesses are alike, and no single off-the-shelf tool generally suffices. We specialize in custom development for business and communication. Employing proven technology stacks, and leveraging building blocks in our library, we design and develop tools for specific challenges.  Requirements definition, iterative prototyping and agile development ensure highly usable, predictable and scalable software solutions.</p>
				</div>
				
				<div data-section="digitalAssetManagementContent">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/capabilities/digital-asset-management.png" alt="Digital Asset Management">
					<h3>Digital Asset Management</h3>
					<p>With the influx of digital assets, organizations can get lost in the wealth of content.  We’ve seen it ourselves, and through our customer’s eyes.  We designed an intuitive, easy to use digital asset management system that lets you easily upload, organize and publish digital assets. It uses familiar drag-and-drop functionality and intuitive searchable folders.  Paired with our cross-platform mobile apps, it delivers up-to-date assets anywhere, anytime to anyone.</p>
				</div>
			</div>
			
			<div class="small-12 medium-5 large-4 small-order-1 medium-order-2 columns">
				<h2>Capabilities</h2>
				<ol id="aboutCapabilitiesList">
					<li class="active" data-section="strategy">Strategy</li>
					<li data-section="iterativePrototyping">Iterative Prototyping</li>
					<li data-section="requirementsDefinition">Requirements Definition</li>
					<li data-section="responsiveWebsites">Responsive Websites</li>
					<li data-section="userExperienceDesign">User Experience Design</li>
					<li data-section="crossPlatformMobileApps">Cross Platform Mobile Apps</li>
					<li data-section="customSoftware">Custom Software</li>
					<li data-section="digitalAssetManagement">Digital Asset Management</li>
				</ol>
			</div>
		</div>
	</section>
	
	<section class="solutions-form">
		<div class="row">
			<div class="small-12 columns">
				<h2>What's Bogging You Down?</h2>
				<h5>Toss us an issue. An inefficiency. (We all have them). It'll start a discussion.<br>That could lead to a solution. Besides, venting feels good.</h5>		
				
				<form>
					<div class="row">
						<div class="small-12 columns" id="issueFormContent">
							<span>Help! My</span>
							<input type="text" placeholder="something typed here">
							<span>is driving me</span><input type="text" placeholder="something typed here">
							<span>.</span>
						</div>
						<div class="small-12 columns" id="issueFormSubmit">
							<input type="text" placeholder="Your Name">
							<input type="email" placeholder="Email">
							<a class="button secondary">Submit</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	
	<section class="solutions-contact">
		<div class="row">
			<div class="small-12 columns">
				<h2>Contact Us Today</h2>
				<h5><span>Send us your email and, if you wish, a word or two about your company</span> <span>and challenges. There's no cost, no obligations, and a world of possibilities.</span></h5>
				<a href="#" class="button white">Get in Touch</a>
			</div>
		</div>
	</section>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/page.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/about.js"></script>

<?php get_footer();
