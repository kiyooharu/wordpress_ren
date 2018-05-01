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

			<?php $enable_staff_picks = esc_attr( get_theme_mod( 'fooding_staff_picks', true ) ) ;

			if ( $enable_staff_picks == true ) {
				get_template_part( 'template-parts/content', 'staff' );
			}

			?>

			<?php if ( is_active_sidebar( 'footer' ) ) {  ?>
			<div class="footer-widgets">
				<div class="container">
					<?php	dynamic_sidebar( 'footer' );	?>
				</div>
			</div>
			<?php } ?>


		</footer><!-- #colophon -->

<?php get_footer('blog'); ?>

<?php wp_footer(); ?>

</div>

</body>
</html>
