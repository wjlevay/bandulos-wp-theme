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
			<p>&copy;2006&ndash;<?php echo date('Y'); ?> Bandulos Entertainment</p>
			<address>99 Moffett Street<br />
			Staten Island, NY 10312</address>
			<p><a href="tel:+13479349607">347.934.9607</a><br />
			<a href="mailto:info@bandulos.com">info@bandulos.com</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>