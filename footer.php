<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/circle-logo.png" />
			<p><?php echo date('Y'); ?> Bandulos, LLC</p>
			<address>22 Crescent Ave<br />
			Staten Island, NY 10301</address>
			<p><a href="tel:+13479349607">347.934.9607</a><br />
			<a href="mailto:info@bandulos.com">info@bandulos.com</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>