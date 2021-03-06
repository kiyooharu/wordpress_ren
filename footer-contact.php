<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fooding
 */

?>

	</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="site-info">
				<div class="container">

					<div class="site-copyright">
						<?php printf( esc_html__( 'Copyright &copy; %1$s %2$s. All Rights Reserved.', 'fooding' ), date( 'Y' ), get_bloginfo( 'name' ) ); ?>
					</div>

					<?php do_action('fooding_footer_site_info'); ?>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div> <!-- end .site-pusher -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
