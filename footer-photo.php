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
			<li class="width_100p ma_auto back_mizublue"><a href="#page" hid="move-page-top" class="move-page-top" rel="m_PageScroll2id"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a></li>
	  </ul>
	</div>
	<!--戻るボタン-->

<!--フッターメニュー-->
<div id="footer-menu" class="pa_20p footer_back">
    <?php wp_nav_menu( array ( 'theme_location' => 'footer-menu' ) ); ?>
</div>
<!--フッターメニュー-->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="site-info">
				<div class="container">

					<div class="site-copyright">
						<?php printf( esc_html__( 'Copyright &copy; %1$s %2$s. All Rights Reserved.', 'fooding' ), date( 'Y' ), get_bloginfo( 'name' ) ); ?>
					</div>

					<?php do_action('fooding_footer_site_info'); ?>
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
