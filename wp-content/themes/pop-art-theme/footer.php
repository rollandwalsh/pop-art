<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

			</section>
			<div id="footer-container">
				<footer id="footer">
					<?php do_action( 'foundationpress_before_footer' ); ?>
					<div class="small-12 columns" style="padding: 0 6px; margin-bottom: 2rem">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.svg" alt="Pop Art" class="logo">
					</div>
					<div class="footer-columns">
						<p>123 NE 3rd Ave<br>Suite 309<br>Portland, OR 97232</p>
						
						<p><a href="tel:1-503-242-4292">+1 (503) 242 4292</a><br>hello@popart.com</p>
					</div>
					<div class="footer-columns">
						<h6>Software</h6>
						<ul>
							<li><a href="<?php echo get_permalink( get_page_by_title( 'BAM' ) ); ?>">BAM! Platform</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_title( 'Custom Software' ) ); ?>">Custom Software</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_title( 'BAM' ) ); ?>">Digital Asset Management</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_title( 'BAM' ) ); ?>">User-Generated Content</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_title( 'BAM' ) ); ?>">Sales Enablement Tools</a></li>
						</ul>
					</div>
					<div class="footer-columns">
						<h6>Our Company</h6>
						<ul>
							<li><a href="<?php echo get_permalink( get_page_by_title( 'Solutions' ) ); ?>">Solutions</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>">About</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_title( 'Our Work' ) ); ?>">Our Work</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_title( 'BAM' ) ); ?>">Capabilities</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>">Management Team</a></li>
						</ul>
					</div>
					<div class="footer-columns">
						<h6>Resources</h6>
						<ul>
							<li><a href="<?php echo get_permalink( get_page_by_title( 'Blog' ) ); ?>">Blog</a></li>
							<li class="hide"><a href="<?php echo get_permalink( get_page_by_title( 'Work' ) ); ?>">Case Studies</a></li>
							<li class="hide"><a href="#">White Papers</a></li>
							<li class="hide"><a href="#">Sell Sheet</a></li>
						</ul>
					</div>
					<div class="footer-columns">
						<h6>Get In Touch</h6>
						<a href="https://twitter.com/popart" style="padding-right: .5rem"><i class="fa fa-twitter"></i></a> <a href="https://www.facebook.com/popartpdx" style="padding-right: .5rem"><i class="fa fa-facebook"></i></a> <a href="https://www.instagram.com/popartpdx/" style="padding-right: .5rem"><i class="fa fa-instagram"></i></a> <a href="https://www.linkedin.com/company/pop-art-inc-" style="padding-right: .5rem"><i class="fa fa-linkedin"></i></a>
					</div>
					<?php do_action( 'foundationpress_before_footer' ); ?>
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
					<?php do_action( 'foundationpress_after_footer' ); ?>
					<div class="large-12 columns f-privacy">
						<span class="left">&copy;2017 Pop Art. All Rights Reserved</span>
						<span class="right"><a href="<?php echo get_permalink( get_page_by_title( 'Privacy Policy' ) ); ?>">Privacy Policy</a></span>
					</div>
					<?php do_action( 'foundationpress_after_footer' ); ?>
				</footer>
			</div>
	
			<?php do_action( 'foundationpress_layout_end' ); ?>
	
	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
			</div><!-- Close off-canvas wrapper inner -->
		</div><!-- Close off-canvas wrapper -->
	</div><!-- Close off-canvas content wrapper -->
	<?php endif; ?>
	
	
	<?php wp_footer(); ?>
	<?php do_action( 'foundationpress_before_closing_body' ); ?>
	</body>
</html>
