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

<!--最近の記事-->
<div class="footer_nav col-xs-12 col-sm-12 col-md-4 clearfix pa_lr0p">

<h2 class="text-center font_sz18">RECENT POSTS<br><span class="font_sz12 color_cd">最近の投稿</span></h2>

<div class="line_b"></div>

<?php $loop = new WP_Query(array("post_type" => "post", "posts_per_page" => 3 ));

while($loop->have_posts()): $loop->the_post(); ?>


<div id=”post-<?php the_ID(); ?>” class="col-xs-12 col-sm-12 col-md-12 pa_10p"<?php post_class(); ?>>

	<ul class="position_re blog_link">

		<li class="col-xs-6 col-sm-6 col-md-6 sp_width_200p"><p class="sp_width_100p"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p></li>

		<li class="col-xs-6 col-sm-6 col-md-6"><?php the_time('Y/m/d'); ?></li>

		<li class="col-xs-6 col-sm-6 col-md-6">
			<h3 class="sp_font_16p"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		</li>

		<li class="position_ab top_0p left_0p back_cred pa_5p_20p"><?php the_category(); ?></li>

	</ul>

</div>


<?php endwhile; ?>

</div>
<!--最近の記事-->


<!--facebook-->
<div class="footer_nav col-xs-12 col-sm-12 col-md-4 clearfix">

<h2 class="text-center font_sz18">FACEBOOK<br><span class="font_sz12 color_cd">フェイスブック</span></h2>

<div class="line_b"></div>

<div class="footer-block-in foot_menu_b text-left">
<?php dynamic_sidebar('フッターウィジェット2'); ?>
</div>

<div class="footer-block-in foot_menu">
<?php dynamic_sidebar('フッターウィジェット4'); ?>
</div>

</div>
<!--facebook-->


<!--コンテンツメニュー-->
<div class="footer_nav col-xs-12 col-sm-12 col-md-4">

<h2 class="text-center font_sz18">CONTENTS MENU<br><span class="font_sz12 color_cd">コンテンツメニュー</span></h2>

<div class="line_b"></div>

<div class="footer-block-in foot_menu">
<?php dynamic_sidebar('フッターウィジェット3'); ?>
</div>

</div>
<!--コンテンツメニュー-->

</div>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="site-info">




	<!--戻るボタン-->
	<div id="page-top" class="page-top width_100p text_c">
		<ul>
			<li class="width_100p ma_auto back_mizublue"><a href="#page" hid="move-page-top" class="move-page-top" rel="m_PageScroll2id"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a></li>
	  </ul>
	</div>
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
