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

			<div class="site-info">
				<div class="container">



<!--sns挿入箇所-->
					<?php do_action('fooding_footer_site_info'); ?>
					<div clss="sns">
						<ul class="clearfix">
							<li class="flt_l width_25p">facebook</li>
							<li class="flt_l width_25p">ツイッター</li>
							<li class="flt_l width_25p">instg</li>
						</ul>
					</div>
<!--sns挿入箇所-->

				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div> <!-- end .site-pusher -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
