<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fooding
 */

get_header(); ?>





<div id="content" class="site-content">

<!--インフォメーションここから-->

<div class="clearfix width_100p" id="start">

<section class="width_100p info_inner">

<?php $loop = new WP_Query(array("post_type" => "news", "posts_pesr_page" => 1 ));

while($loop->have_posts()): $loop->the_post(); ?>

<div class="clearfix width_100p ma_auto">

<div id=”post-<?php the_ID(); ?>” class="width_100p pull-left"<?php post_class(); ?>>

	<ul class="pa_30p_10p clearfix info_top">

		<li class="pull-left info_style"><?php the_title(); ?></li>

		<li class="pull-left lineh31"><?php the_time('Y/m/d'); ?></li>

		<li class="pull-left lineh31"><?php the_excerpt(); ?></li>

	</ul>
</div>

<?php endwhile; ?>

</div>

</section>

<!--インフォメーションここまで-->



<!--solution-->

<div class="clearfix width_100p pa_100_0" id="solution">

<section class="col-xs-12 col-sm-12 col-md-12">

<h2 class="font_sz80p text-center text_letter_sp">SOLUTION</h2>

<div class="line_a"></div>

<p class="text-center"><span class="glyphicon glyphicon-th-large" aria-hidden="true">ソリューション</span><br></p>

</section>

<div class="space_area">
	<p>&nbsp;</p>
</div>

<section class="col-xs-12 col-sm-12 col-md-12">

<div class="pa_0p_10p">

<div class="row">
	<ul class="col-xs-12">
		<li class="col-lg-4 col-md-6 col-xs-12 text-center back_cf pa_50p_20p">
			<h2 class="text_letter_sp">WEBサイト</h2>
				<span class="glyphicon glyphicon-list font_sz30 sol_icon" aria-hidden="true"></span>
			<p class="pa_20p_60p text-left">多種多様な規模や業種のWEBサイトを制作しており、WEBサイト構築を通じてお客様の課題解決に貢献いたします。</p>
		</li>
		<li class="col-lg-4 col-md-6 col-xs-12 text-center back_cf pa_50p_20p">
			<h2 class="text_letter_sp">運営支援</h2>
				<span class="glyphicon glyphicon-retweet font_sz30 sol_icon" aria-hidden="true"></span>
			<p class="pa_20p_60p text-left">システムやサーバ保守だけでなく、コンテンツの定期更新、クライアント様のデジタル戦略を支援、貢献いたします。</p>
		</li>
		<li class="col-lg-4 col-md-6 col-xs-12 text-center back_cf pa_50p_20p">
			<h2 class="text_letter_sp">WEBシステム</h2>
				<span class="glyphicon glyphicon-wrench font_sz30 sol_icon" aria-hidden="true"></span>
			<p class="pa_20p_60p text-left">CMS,クライアント毎に異なる様々な課題に対して、最新テクノロジーを合わせた効率的なシステムをご提供いたします。</p>
		</li>
	</ul>
</div>

</section>

</div>

<!--solution-->


<!--実績-->

<div class="clearfix width_100p pa_100_0" id="work">

<section class="col-xs-12 col-sm-12 col-md-6">

<h2 class="font_sz80p pa_top200p text-center text_letter_sp">WORK</h2>

<div class="line_a"></div>

<p class="text-center"><span class="glyphicon glyphicon-bookmark" aria-hidden="true">過去の実績</span></p>

</section>

<section class="col-xs-12 col-sm-12 col-md-6">

<div class="pa_0p_10p">

<?php $loop = new WP_Query(array("post_type" => "portforio", "posts_per_page" => 4 ));

while($loop->have_posts()): $loop->the_post(); ?>

<div class="clearfix width_100p ma_auto">

<div id=”post-<?php the_ID(); ?>” class="col-xs-12 col-sm-6 col-md-6 ma_pa0p work"<?php post_class(); ?>>
	<ul>

	<li class="position_re"><p class="col-xs12 col-sm-12 col-md-12 ma_pa0p"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
		<ul>
			<li class="position_ab top_0p right_0p z_in100 back_cred pa_5p_20p color_cf"><?php echo esc_html( $post->portforio_s ); ?></li>

			<li class="position_ab top_90p left_10p z_in100 font_web font_sz33"><?php echo esc_html( $post->syurui ); ?></li>

			<li class="width_100p text-left">
				<h3 class="font_20p text_dno">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h3>
			</li>
		</ul>
	</li>

	<li class="width_90p"><?php the_excerpt(); ?></li>

	</ul>
</div>

<?php endwhile; ?>

</div>

</div>

</section>

</div>

<!--more-->
<section>
	<div class="cl-effect-10 more">
		<a href="<?php echo get_permalink( get_page_by_path( 'portforio_all' )->ID ); ?>" data-hover="more"><span>more</span></a>
	</div>
</section>
<!--more-->

<!--実績-->

<div class="space_area">
	<p>&nbsp;</p>
</div>

<div class="back_color001 pa_100_0" id="profile">

<!--プロフィール-->

<h2 class="font_sz80p text-center text_letter_sp color_cf">PROFILE</h2>

<div class="line_b"></div>

<p class="text-center"><span class="glyphicon glyphicon-user" aria-hidden="true">自己紹介</span></p>

<div class="space_area_b">
	<p>&nbsp;</p>
</div>

<div class="width_100p">
	<ul class="clearfix">
		<li class="width_50p pull-right text-center"><img src="/wordpress_ren/wp-content/uploads/2017/11/myphoto.jpg" width="500px"></li>
		<li class="width_50p pull-right text-center line_h50"><p>きよはる</p></li>
		<li class="width_50p pull-right text-center line_h50"><p>大阪出身2007年から、4年間PCインストラクターに従事。<br>インストラクター時にオフィス関係の資格を多数取得その後、<br>通信関係の仕事に転機通信業に在職しながらDIGITAL HOLLYWOOD入学。<br>WEBおよび、GRAPHICを学び卒業後、デザイナー職へと転職。</p></li>
	</ul>
</div>

<!--プロフィール-->

</div>

<div class="space_area">
	<p>&nbsp;</p>
</div>

<!--写真-->
<div class="clearfix width_100p pa_100_0" id="photo">

<section class="col-xs-12 col-sm-12 col-md-6 pull-right">

<h2 class="font_sz80p pa_top200p text-center text_letter_sp">PHOTO</h2>

<div class="line_a"></div>

<p class="text-center"><span class="glyphicon glyphicon-camera" aria-hidden="true">趣味の写真</span><br></p>

</section>

<section class="col-xs-12 col-sm-12 col-md-6">

<div class="pa_0p_10p">

<?php $loop = new WP_Query(array("post_type" => "photo", "posts_per_page" => 4 ));

while($loop->have_posts()): $loop->the_post(); ?>

<div class="clearfix width_100p ma_auto">

<div id=”post-<?php the_ID(); ?>” class="col-xs12 col-sm-6 col-md-6 ma_pa0p work"<?php post_class(); ?>>
	<ul>

	<li class="position_re"><p class="col-xs12 col-sm-12 col-md-12 ma_pa0p"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
		<ul>
			<li class="width_100p text-left">
				<h3 class="font_20p text_dno"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			</li>
		</ul>
	</li>

	<li class="width_90p"><?php the_excerpt(); ?></li>

	</ul>
</div>

<?php endwhile; ?>

</div>

</div>

</section>

</div>
<!--写真-->

<!--more-->
<section>
	<div class="cl-effect-10 more">
		<a href="<?php echo get_permalink( get_page_by_path( 'portforio_all' )->ID ); ?>" data-hover="more"><span>more</span></a>
	</div>
</section>
<!--more-->

<div class="space_area">
	<p>&nbsp;</p>
</div>

<div class="back_color001 pa_100_0" id="blog">

<div class="clearfix width_100p">

<section class="pull-left width_50p">

<h2 class="text-center font_sz80p pa_top200p text_letter_sp">BLOG</h2>

<div class="line_b"></div>

<p class="text-center pa_25_10p"><span class="glyphicon glyphicon-book" aria-hidden="true">ブログ</span></p>

</section>

<section class="pull-left width_50p">

<?php $loop = new WP_Query(array("post_type" => "post", "posts_per_page" => 4 ));

while($loop->have_posts()): $loop->the_post(); ?>

<div class="clearfix width_100p ma_auto">

<div id=”post-<?php the_ID(); ?>” class="width_50p flt_l"<?php post_class(); ?>>

	<ul class="pa_10_5p position_re blog_link">

	<li><p class="width_100p"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p></li>

	<li class="position_ab top_0p right_0p back_cred pa_5p_20p"><?php the_category(); ?></li>

	<li><h3 class="font_20p"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></li>

	</ul>

<div class="width_100p clearfix">
<!--カスタムフィールド画像出力-->
<?php
	$attachment_id = get_field('post_photo');
	$size = "thumbnail"; // (thumbnail, medium, large, full or custom size)
	$image = wp_get_attachment_image_src( $attachment_id, $size );
	$attachment = get_post( get_field('post_photo') );
	$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
	$image_title = $attachment->post_title;
?>
<li class="pull-left width_15p"><p class="width_80p"><img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $alt; ?>" title="<?php echo $image_title; ?>" / class="border_ra50"></p></li>
<!--カスタムフィールド画像出力-->

	<li class="pull-left line_h50 ma_l10p"><?php the_time('Y/m/d'); ?></li>
</div>

	<li><?php the_excerpt(); ?></li>
	</ul>
</div>

<?php endwhile; ?>

</div>

<div class="space_area">
	<p>&nbsp;</p>
</div>

</section>

</div>

</div>

<section class="pull-left width_100p back_grade_green pa_t50p" id="contact">

<h2 class="text-center font_sz80p color_cf text_letter_sp">CONTACT</h2>

<div class="line_a"></div>

<p class="text-center pa_25_10p color_cf">皆様からのお問い合わせ、WEBサイト制作の依頼をお待ちしております。</p>

<!--more-->
<section class="pa_bt2050p">
	<div class="cl-effect-10 more">
		<a href="<?php echo get_permalink( get_page_by_path( 'portforio_all' )->ID ); ?>" data-hover="more"><span>more</span></a>
	</div>
</section>
<!--more-->

<!--
<div class="tag pa_20p">
	<ul>
	<li class="width_50p text-center ma_auto pa_20p"><br><?php wp_tag_cloud( $args ); ?></li>
	</ul>
</div>
-->

</div>

</div>

</section>

</div>


<?php get_footer('front');
