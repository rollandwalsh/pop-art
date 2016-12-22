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
					<div class="large-12 columns" style="padding: 0 6px; margin-bottom: 2rem">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.svg" alt="Pop Art" class="logo">
					</div>
					<div class="medium-6 large-3 columns">
						<p>123 NE 3rd Ave<br>Suite 309<br>Portland, OR 97232</p>
						
						<p><a href="#">+1 (503) 242 4292</a><br>hello@popart.com</p>
					</div>
					<div class="medium-6 large-3 columns">
						<h6>Our Company</h6>
						<ul>
							<li><a href="#">Solutions</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">BAM</a></li>
							<li><a href="#">Customer Software</a></li>
							<li><a href="#">Our Work</a></li>
						</ul>
					</div>
					<div class="medium-6 large-3 columns">
						<h6>Resources</h6>
						<ul>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Case Studies</a></li>
							<li><a href="#">White Pages</a></li>
							<li><a href="#">Sell Sheet</a></li>
						</ul>
					</div>
					<div class="medium-6 large-3 columns">
						<h6>Get In Touch</h6>
						<a href="#" style="padding-right: .5rem"><i class="fa fa-lg fa-twitter"></i></a> <a href="#" style="padding-right: .5rem"><i class="fa fa-lg fa-facebook"></i> <a href="#" style="padding-right: .5rem"><i class="fa fa-lg fa-instagram"></i></a> <a href="#" style="padding-right: .5rem"><i class="fa fa-lg fa-linkedin"></i></a>
					</div>
					<?php do_action( 'foundationpress_before_footer' ); ?>
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
					<?php do_action( 'foundationpress_after_footer' ); ?>
					<div class="large-12 columns f-privacy">
						<span class="left">&copy;2017 Pop Art. All Rights Reserved</span>
						<span class="right"><a href="#">Terms</a> <a href="#">Privacy Policy</a></span>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
	</body>
</html>
