<?php
/*
Template Name: Solutions
*/
get_header(); ?>

<header id="solutionsHero" class="page-hero" role="banner" style="background-image: url(<?php echo (wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' )[0]); ?>)">
	<div class="row align-center">
		<div class="small-12 columns">
			<h1>Solutions to a wide range of business problems.</h1>

			<h5><span>No two challenges are alike. But maybe some of the following will</span> <span>ring familiar. Or, maybe, bring us a new one to solve.</span></h5>
		</div>
	</div>
</header>

<div id="pageSolutions" role="main">
	<section class="solutions-accordion">
		<ul class="accordion" data-accordion data-allow-all-closed="true">
			<li class="accordion-item" data-accordion-item>
				<a href="#" class="accordion-title"><span>My digital assets take too long to find.</span></a>
				<div class="accordion-content" data-tab-content>
					<div class="row align-justify">
						<div class="large-5 medium-6 small-12 columns">
							<p>It’s a common problem: you know just the file you’re looking for, but it’s hiding somewhere between your email, hard drive, and the cloud. <a href="https://smartsoftwareblogaus.wordpress.com/2014/08/15/an-average-of-8200-per-person-is-spent-on-asset-management-activities/">A study by GISTICS</a> found that the average employee spends 1 in 10 working hours searching for and managing digital assets, costing $8,200 in lost productivity per employee per year.</p>
							<h3>Our Solution</h3>
							<p>Our intuitive Digital Asset Management (DAM) tool gives you an easy way to store and organize all of your assets in one place. The user-friendly drag-and-drop interface with smart folders and advanced search options makes it easy to instantly add, locate and publish up-to-the-minute assets to all colleagues and customers, wherever and whenever. No more wondering whether the current materials are in the right person’s hands.</p>
							<h3>The Results</h3>
							<blockquote>
								“Having all of our assets managed through one location has created efficiencies across the organization. Sales teams have instant access to the most up-to-date assets, which helps them close sales. We use the DAM to update our sales tools and websites”
								<cite>Name<br>Title<br>Company</cite>
							</blockquote>
						</div>
						
						<div class="large-5 medium-6 small-12 columns">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pain-points/finding_digital_assets.png" alt="Finding digital assets">
							<h3>Benefits at a Glance</h3>
							<ul>
								<li>Centralized asset management reduces costs and frustration</li>
								<li>Protects brand credibility</li>
								<li>Save on printing and distribution costs</li>
								<li>Anytime, anywhere access to assets -- even offline</li>
								<li>No IT support required to implement Pop Art’s DAM</li>
								<li>Intuitive workflows and tagging structure</li>
								<li>User-friendly drag-and-drop interface</li>
							</ul>
							<hr>
							<h3>Links</h3>
							<a href="#"><i class="fa fa-angle-right"></i> BAM Portfolio piece</a><br><a href="#"><i class="fa fa-angle-right"></i> BAM/DAM Demo</a><br><br>
							<h3>Relevant Blog Articles</h3>
							<a href="https://www.popart.com/our-thinking/when-is-the-right-time-for-cloud-based-digital-asset-management-dam"><i class="fa fa-angle-right"></i> When is the Right Time for Cloud-Based Digital Asset Management (DAM)?</a>
						</div>
					</div>
				</div>
			</li>
			<li class="accordion-item" data-accordion-item>
				<a href="#" class="accordion-title"><span>We’ve tried out-of-the-box solutions. We really need something more custom to fit our business’ needs.</span></a>
				<div class="accordion-content" data-tab-content>
					<div class="row align-justify">
						<div class="large-5 medium-6 small-12 columns">
							<p>For complex businesses, packaged software solutions often come up short. Sometimes they don’t fully solve your specific problems. Sometimes customer support is lacking. Sometimes they’re too rigid, not integrating without unreasonable changes to your processes.</p>
							<h3>Our Solution</h3>
							<p>Software, we think, should be flexible enough to mesh seamlessly with your existing business processes. We have decades of experience crafting tailored solutions based on specific customer requirements. We leverage our proven systems and tools as building blocks to create high-performing custom software with user-friendly interfaces that spur rapid adoption and lasting results.</p>
							<h3>The Results</h3>
							<blockquote>"Iterative delivery of custom software paired with user-testing helps us develop highly usable tools that meet our very unique business needs. It allows us to integrate the highest value features to continue to evolve and improve usability of the tool which in turn improves our efficiency as a company."</blockquote>
						</div>
						
						<div class="large-5 medium-6 small-12 columns">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pain-points/custom_solutions.png" alt="Custom solutions">
							<h3>Benefits at a Glance</h3>
							<ul>
								<li>Solutions are are based on your use-cases</li>
								<li>State-of-the-art UX design focuses on ease of use</li>
								<li>Agile teams deliver working software early and often for predictable results</li>
								<li>Ongoing flexibility for changing needs and priorities</li>
								<li>Thorough user testing ensures ideal delivery and adoption</li>
							</ul>
							<hr>
							<h3>Links</h3>
							<a href="#"><i class="fa fa-angle-right"></i> VMS Portfolio piece</a><br><a href="#"><i class="fa fa-angle-right"></i> Custom Software section of website</a><br><a href="#"><i class="fa fa-angle-right"></i> Freightliner Sales Tool</a><br><a href="#"><i class="fa fa-angle-right"></i> DAM demo</a><br><a href="#"><i class="fa fa-angle-right"></i> Relevant Blog articles</a>
						</div>
					</div>
				</div>
			</li>
			<li class="accordion-item" data-accordion-item>
				<a href="#" class="accordion-title"><span>Our onboarding process is slow and inefficient.</span></a>
				<div class="accordion-content" data-tab-content>
					<div class="row align-justify">
						<div class="large-5 medium-6 small-12 columns">
							<p>Archaic onboarding processes have severe short and long-term consequences. A bad first impression affects everything from morale to productivity to turnover rates. If you lose trust on an employee’s first day, you may never get it back. It’s an under-the-radar issue many companies have too long ignored.</p>
							<h3>Our Solution</h3>
							<p>We create custom digital tools that streamline onboarding and make life easier for managers and new hires alike. Our solutions are custom-built around use cases and stakeholder interviews to ensure immediate improvements and lasting results. Studies confirm it, noting improved onboarding translates to a <a href="http://www.urbanbound.com/blog/onboarding-infographic-statistics">50% increase in new hire productivity</a>, <a href="http://www.urbanbound.com/blog/onboarding-infographic-statistics">20% increase in manager satisfaction</a>, and a 69% greater likelihood of staying 3 or more years with the company.</p>
							<h3>The Results</h3>
							<blockquote>
								“Onboarding employees effectively is absolutely critical. You don’t get a 2nd chance to make a good impression. Our onboarding assistant tool for managers guides them through the onboarding process with a simple, intuitive interface.. I’d rank it 10 out of 10 in importance to our employee retention strategy.”
								<cite>Meagan Phillips<br>DTNA HR Analyst<br>(need her permission yet)</cite>
							</blockquote>
						</div>
						
						<div class="large-5 medium-6 small-12 columns">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pain-points/difficult_onboarding.png" alt="Difficult onboarding">
							<h3>Benefits at a Glance</h3>
							<ul>
								<li>Better employee retention</li>
								<li>Increase in manager satisfaction</li>
								<li>Doubles new hire productivity.</li>
								<li>Reduce time to set up onboarding</li>
								<li>Notifications guide manages through the process</li>
								<li>Intuitive interface guides managers</li>
								<li>Analytics for continual process improvement</li>
							</ul>
							<hr>
							<h3>Relevant Blog Articles</h3>
							<a href="https://www.popart.com/our-thinking/5-benefits-of-better-onboarding"><i class="fa fa-angle-right"></i> 5 Benefits of Better Onboarding</a><br><a href="https://www.popart.com/our-thinking/how-to-revolutionize-onboarding-3-benefits-of-employee-generated-content"><i class="fa fa-angle-right"></i> How to Revolutionize Onboarding: 3 Benefits of Employee-Generated Content</a>
						</div>
					</div>
				</div>
			</li>
			<li class="accordion-item" data-accordion-item>
				<a href="#" class="accordion-title"><span>Our biggest sales always seem to stall on the one-yard line.</span></a>
				<div class="accordion-content" data-tab-content>
					<div class="row align-justify">
						<div class="large-5 medium-6 small-12 columns">
							<p>For high-value products, the sales process can be complex and time consuming . There’s high risk of losing a big customer at any step the process from consideration to purchase. The competition is tough. If my sales team can’t give 100% accurate, 100% confident answers and the right tools when the opportunity is in front of them, the sale is going to stall and potentially be lost.</p>
							<h3>Our Solution</h3>
							<p>Our sales enablement tools put all the facts, figures and tools to close sales in the hands of your sales team. Custom-built mobile applications are designed to engage and push the sale forward at any stage of the buyer’s journey. They provide instant mobile access to assets,  to product models and customizations, 3D product modeling, competitive comparison calculators, instant customer follow ups and sales presentation development. Customers cite their value as training tools, too, to onboard news salespeople faster.</p>
							<h3>Metrics / Quote / Added Value</h3>
							<ul>
								<li>30% of a sales person’s time is spent looking for or creating content</li>
								<li>70% of sales materials never get used because sales people can’t find them</li>
							</ul>
						</div>
						
						<div class="large-5 medium-6 small-12 columns">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pain-points/big_sale_stall.png" alt="Big Sale Stall">
							<h3>Benefits at a Glance</h3>
							<ul>
								<li>Close more sales at opportunity stage
								<li>Reduce the cost of doing business</li>
								<li>Have the most highly trained sales force in your industry</li>
								<li>Decrease onboarding costs and time</li>
								<li>Protect your marketing investment after the hand-off to sales</li>
								<li>Build and manage customer relationships</li>
								<li>Reduce time searching for assets</li>
								<li>Sales tools available on any mobile device</li>
								<li>Automatic asset updates powered by our DAM</li>
							</ul>
							<hr>
							<h3>Links</h3>
							<a href="#"><i class="fa fa-angle-right"></i> Freightiner Sales Tool portfolio</a><br><a href="#"><i class="fa fa-angle-right"></i> Smart Source Portfolio</a><br><a href="#"><i class="fa fa-angle-right"></i> BAM / DAM</a><br><br>
							<h3>Relevant Blog Articles</h3>
							<a href="https://www.popart.com/our-thinking/make-your-channel-sales-team-more-effective-4-benefits-of-sales-enablement-tools"><i class="fa fa-angle-right"></i> Make Your Channel Sales Team More Effective: 4 Benefits of Sales Enablement Tools</a>
						</div>
					</div>
				</div>
			</li>
			<li class="accordion-item" data-accordion-item>
				<a href="#" class="accordion-title"><span>It’s expensive and hard to create authentic marketing content.</span></a>
				<div class="accordion-content" data-tab-content>
					<div class="row align-justify">
						<div class="large-5 medium-6 small-12 columns">
							<p>Authenticity is one of the toughest things to capture in marketing content. As such, few things are more persuasive than real people advocating for brands and products of their own accord. But capturing it  can be elusive, time-consuming and costly, and trying to produce it internally can ring false.</p>
							<h3>Our Solution</h3>
							<p>BAM! by Pop Art was designed and built with this problem in mind. BAM! helps you collect, curate and publish user-generated content from real people. In a world where <a href="https://www.popart.com/our-thinking/4-characteristics-of-the-modern-digital-customer-and-what-it-means-for-your-business">Today’s audiences are wary</a> of branded messages and paid advertising, and are <a href="http://mashable.com/2014/04/09/millennials-user-generated-media/#vgVq_3Evlgqz">more receptive than ever to earned media</a>, its ability to gather online reviews, social media and 3rd party referrals builds real authenticity. Build your network of brand ambassadors, get the word out, run incentivized campaigns to find the exact content you need.</p>
						</div>
						
						<div class="large-5 medium-6 small-12 columns">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pain-points/authentic_marketing_content.png" alt="Authentic Marketing Content">
							<h3>Benefits at a Glance</h3>
							<ul>
								<li>Find the best content and leverage it</li>
								<li>Amplify the voice of your best customers</li>
								<li>Enhance credibility and trust</li>
								<li>Promote new products</li>
								<li>Improve employee engagement</li>
								<li>Improve social selling metrics</li>
								<li>Grow online presence</li>
							</ul>
							<hr>
							<h3>Links</h3>
							<a href="#"><i class="fa fa-angle-right"></i> Link to Yogi Portfolio</a><br><a href="#"><i class="fa fa-angle-right"></i> BAM demo for UGC</a><br><br>
							<h3>Relevant Blog Articles</h3>
							<a href="https://www.popart.com/our-thinking/6-more-great-examples-of-brands-leveraging-user-generated-content"><i class="fa fa-angle-right"></i> 6 More Great Examples of Brands Leveraging User-Generated Content</a><br><a href="https://www.popart.com/our-thinking/4-great-examples-of-how-brands-are-leveraging-user-generated-content-8295"><i class="fa fa-angle-right"></i> 4 Great Examples of Brands Leveraging User-Generated Content</a><br><a href=""><i class="fa fa-angle-right"></i> </a><br><a href="https://www.popart.com/our-thinking/3-keys-for-the-enterprise-realizing-the-promise-of-user-generated-content"><i class="fa fa-angle-right"></i> 3 Keys for the Enterprise: Realizing the Promise of User-Generated Content</a>
						</div>
					</div>
				</div>
			</li>
			<li class="accordion-item" data-accordion-item>
				<a href="#" class="accordion-title"><span>I have lots of social media followers, but few of them convert to sales.</span></a>
				<div class="accordion-content" data-tab-content>
					<div class="row align-justify">
						<div class="large-5 medium-6 small-12 columns">
							<p>We’ve heard it before: “I don’t get it; we have 500,000 followers. Why aren’t they actually buying anything?” Social presence -- even if it’s impressive -- doesn’t necessarily convert into sales. Connecting social media and commerce, two very different worlds, isn’t as seamless as one would think.</p>
							<h3>Our Solution</h3>
							<p>We see what people like, and make it easy and worthwhile to take the next step themselves. We create easy-flow highways between your aggregated social media feeds and your website and apps. You can create campaigns and promotions that reward fans and funnels them to retail outlet or e-commerce sites. Content is collected, organized and published by our BAM! system.</p>
							<h3>Meterics / Quote / Added Value</h3>
							<p>Statistics</p>
						</div>
						
						<div class="large-5 medium-6 small-12 columns">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pain-points/convert_social_sales.png" alt="Conver Social Media to Sales">
							<h3>Benefits at a Glance</h3>
							<ul>
								<li>Increased sales from social channels</li>
								<li>More social media followers</li>
								<li>Turn your best customer into ambassadors</li>
								<li>More positive buzz around your brand</li>
							</ul>
							<hr>
							<h3>Links</h3>
							<a href="#"><i class="fa fa-angle-right"></i> Yogi portfolio</a><br><a href="#"><i class="fa fa-angle-right"></i> BAM UGC Demo</a>
						</div>
					</div>
				</div>
			</li>
		</ul>
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
				<a href="<?php echo get_permalink( get_page_by_title( 'Work' ) ); ?>" class="button white">Get in Touch</a>
			</div>
		</div>
	</section>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/page.js"></script>

<?php get_footer();
