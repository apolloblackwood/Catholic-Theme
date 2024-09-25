<div class="sixth-section flex center">
	<div class="footer-logo">
	<img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/header_logo.png" />
	<img class="footer-logo-title" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_title.png" />
	</div>
	<div class="flex footer-content">
	<div class="footer-content-first">
		<p>Contact Us</p>
		<p>3500 Fairfield Ave
		Shreveport, LA 71104</p>
		<p>Tel: 318-868-4441</p>
		<p>Monday - Friday: 8AM - 4:30PM
		Saturday & Sunday: Closed</p>
		<div class="flex">
			<a class="social-links-facebook" href="#">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" />
			</a>
			<a class="social-links-instagram" href="#">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" />
			</a>
			<a class="social-links-youtube" href="#">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png" />
			</a>
		</div>
	</div>
	<div class="footer-content-second">
		<p>Quick Links</p>
		<p>Priest Portal</p>
		<p>Outlook Portal</p>
		<p>Employment Opportunities</p>
		<p>Diocesan Directory</p>
	</div>
	<div class="footer-content-third">
		<p class="footer-form-label">Subscribe to The Catholic Connection for FREE!</p>
		<?php echo do_shortcode('	[wpforms id="14"] '); ?>
	</div>
	</div>
</div>
<?php
/**
 * The footer template part.
 *
 * @copyright  Copyright (c) 2020, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
		wp_footer(); ?>	
	</body>
</html>
