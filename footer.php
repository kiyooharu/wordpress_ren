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

	<!--戻るボタン-->
	<div id="page-top" class="page-top width_100p text_c">
		<ul>
			<li class="width_100p pa_20p ma_auto back_mizublue"><a href="#home" hid="move-page-top" class="move-page-top" rel="m_PageScroll2id"><img src="/wordpress_ren/wp-content/uploads/2017/05/back.png" style="width:5%;"></a></li>
	  </ul>
	</div>
	<!--戻るボタン-->

<!--フッターメニュー-->
<div id="footer-menu" class="pa_20p footer_back">
    <?php wp_nav_menu( array ( 'theme_location' => 'footer-menu' ) ); ?>
</div>
<!--フッターメニュー-->

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
