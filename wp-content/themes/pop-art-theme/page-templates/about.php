<?php
/*
Template Name: About
*/
get_header(); ?>

<header id="aboutHero" class="page-hero" role="banner" style="background-image: url(<?php echo (wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' )[0]); ?>)">
	<div class="row align-center">
		<div class="small-12 columns">
			<h1>Partners in Technological Innovation.</h1>
			<h6><span>We help clients reduce inefficiencies through custom solutions that bring</span> <span>new content, operations and communications possibilities to bear. We boost efficiencies,</span> <span>bottom lines and esprit de corps for industry leading brands.</span></h6>
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
					<p>We specialize in cross-platform mobile development optimizing for the most widely used iOS and Android platforms and devices. It’s both faster and easier to maintain than leveraging a single codebase. We then customize for specific platforms to optimize the user experience and adoption rates.  </p>
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
	
	<section class="row">
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
				<header>
					<h2 class="entry-title">Our Approach</h2>
				</header>
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile;?>
		<?php do_action( 'foundationpress_after_content' ); ?>
	</section>
	
	<section class="about-management-team">
		<div class="row">
			<div class="large-12 columns">
				<h2>Management Team</h2>
				<h5><span>To our thinking, deep and engaged beats wide and remote. We seek long resumes</span> <span>and unique skill sets. And upper management doesn't up and disappear.</span> <span>Pop Art is a pretty personal experience, starting here.</span></h5>
			</div>
		</div>
		
		<div class="about-management-team-members align-spaced">
			<div class="about-management-team-member" data-name="tom">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/management-team/tom-paul-portrait.png" alt="Tom Paul">
				<h4>Tom Paul</h4>
				<h6>CEO</h6>
			</div>
			
			<div class="about-management-team-bio" data-name="tom">
				<p>Tom has a corner office. That’s pretty much where the formality ends. He’s deeply involved in asking, listening and shaping long-term vision and strategy. Tom brings diverse experience with results-driven technology and marketing solutions to bear. He’s around, deeply connected with all active projects and the primary contact for new partnerships and opportunities.</p>
				<p>Tom was Chief Operating Officer at Pop Art from 2008 until 2015, forging the agency’s vision while guiding Pop Art to a variety of industry awards. We proudly remain on the “best places to work in Oregon” roster. In 2015 he completed the purchase of a majority of the company’s stock to become its sole director. He continues to solidify client relationships while strengthening Pop Art’s across the board systems: project management, human resources, finance and operations.</p>
				<p>Tom has a B.A. in Arts & Letters from Portland State University. He also graduated from the Stanford Executive Institute. Before Pop Art, Tom served in the Army and worked in the translation industry, with degrees from the Defense Language Institute at the Presidio of Monterey and Ft. Bragg’s John F. Kennedy Special Warfare Center and School. He’s a Portland native and Wilson High grad.</p>
				<p><a href="mailto:"><i class="fa fa-envelope"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a></p>
			</div>
			
			<div class="about-management-team-member" data-name="ethan">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/management-team/ethan-brown-portrait.png" alt="Ethan Brown">
				<h4>Ethan Brown</h4>
				<h6>Director of Engineering</h6>
			</div>
			
			<div class="about-management-team-bio" data-name="ethan">
				<p>Ethan Brown joined Pop Art as a Software Engineer in 2011 and quickly fell in love with the pace of innovation. Starting with Freightliner, Pacific Natural Foods, Skedco and the RoseyAwards, he began engineering client websites and web applications.</p>
				<p>In 2014 his book “Web Development with Node and Express” was published, earning high ratings on both O’Reilly and Amazon websites. Thanks to its success, a second book, “Learning JavaScript, 3 rd edition” was commissioned and published in 2016.</p>
				<p>Amidst these banner years, Pop Art recognized Ethan’s unique skills and commitment by promoting him to Director of Engineering. Meanwhile, he’s scheduled to complete an MBA program later this year, adding a business framework to his engineering acumen.</p>
				<p>Prior to Pop Art, Ethan gained deep engineering experience working at IBM, Oracle, Informix, as well as defense contractors Computer Sciences Corporation and Xybion. He holds undergraduate degrees in Mathematics and Computer Science from Virginia Commonwealth University.</p>
				<p><a href="mailto:"><i class="fa fa-envelope"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a></p>
			</div>
			
			<div class="about-management-team-member" data-name="noah">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/management-team/noah-oken-berg-portrait.png" alt="Noah Oken-Berg">
				<h4>Noah Oken-Berg</h4>
				<h6>Director of Business Development</h6>
			</div>
			
			<div class="about-management-team-bio" data-name="noah">
				<p>Noah serves as liaison and ambassador for Pop Art’s expanding client, supplier and collaborator networks to bridge gaps and drive efficiency. He has a proven record of aligning multiple stakeholders on complex issues toward high yield, happy outcomes. He strives, in a nutshell, to make relationships and software hum.</p>
				<p>He brings an innate passion for both technology and business, starting with programming games on the family Apple and sweeping raffle sales prizes in elementary school. He’s been guided through a string of entrepreneurial successes by one driving principal: “help technology connect the natural world in ways previously impossible, then get the heck out the way.”</p>
				<p>Noah orchestrated and operated an independent B2B wireless agency for most of the 2000’s, helping to bring the then-emerging smart phone technologies and “high-speed” wireless laptop cards into the market. Since then, Noah has directed rapid-growth, global business development efforts in the custom and licensed software space. He graduated from Whitman College with a BA in Sociology and Studio Art, including abroad studies in Russia and Zimbabwe.</p>
				<p><a href="mailto:"><i class="fa fa-envelope"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a></p>
			</div>
		</div>
	</section>
	
	<section class="about-history align-justify">
		<div class="small-12 columns">
			<h2 class="text-center">Our History</h2>
		</div>
		
		<div class="small-12 medium-5 large-5 columns">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/history/office.png" alt="Pop Art History">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/history/tom-ethan.png" alt="Pop Art History">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/history/dev.png" alt="Pop Art History">
		</div>
		
		<div class="small-12 medium-6 large-5 columns">
			<p>The name Pop Art isn’t random. Pop Art, as a movement, is about fast. And forward. About embracing the new.</p>
			<p>Mission wise, it pretty much nails us. Even back when we started, at the dawn of digital, social and mobile, it’s what fueled our fire.</p>
			<p class="blue">Our goal:  to keep clients on the crest of the wave. To ensure they harness the technologies required to stay new, modern and relevant.</p>
			<p>Technology, we’re convinced, is today’s modern art. The canvas has been replaced by a dizzying array of new tools and channels with which to communicate, excite and empower.</p>
			<p>Every day, we wake up eager to see what’s next.</p>
			<p>Over the years, we’ve morphed from digital marketers to a team of technology service partners and innovators. We create software, apps, mobile tools, asset management platforms, whatever the moment calls for to keep our clients digitally agile, nimble and vital.</p>
			<p>And those clients are often the kind who need us most:  industry leaders faced with daunting digital challenges and opportunities.</p>
			<p>Today’s digital content can swamp you. Or set you free. Likewise, social networks can define you. Or you can write your own story. That’s where we come in.</p>
			<p>We help you author your own brand. On a global canvas.</p>
			<p>At digital speed.</p>
		</div>
	</section>
	
	<section class="about-blog-strip">
		<div class="row align-center">
			<div class="small-12 medium-10 large-8 columns">
				<div class="row align-middle">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pop-art-spark_icon.png" alt="Pop Art">
					<p>Looking for more great content? <a href="/blog">Check out our blog</a>.</p>
				</div>
			</div>
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

<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/hero-text.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/about.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/aos/aos.js"></script>
<script>AOS.init();</script>

<?php get_footer();
