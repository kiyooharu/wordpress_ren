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

<div class="col-xs-12 col-sm-12 col-md-12 pa_20p">

<?php get_template_part( 'footer_widget'); ?>

</div>

<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="site-info">
				
<!--戻るボタン-->
<?php get_template_part( 'back_bt'); ?>
<!--戻るボタン-->
	
<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="site-info">
		<div class="container">

			<div class="site-copyright">
				<?php printf( esc_html__( 'Copyright &copy; %1$s %2$s. All Rights Reserved.', 'fooding' ), date( 'Y' ), get_bloginfo( 'name' ) ); ?>
			</div>

		</div>
	</div><!-- .site-info 

<!--sns-->
<div class="sns_position">
	<ul class="sns_position_inner">
		<a href="https://www.facebook.com/kiyokoharu"><li class="icon-facebook2 margin_bt50p color_cf"></li></a>
		<a href=""><li class="icon-instagram margin_bt50p color_cf"></li></a>
		<a href=""><li class="icon-github margin_bt50p color_cf"></li></a>
	</ul>
</div>
<!--sns-->


		</footer><!-- #colophon -->
	</div> <!-- end .site-pusher -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
