<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Foodingwork
 */

get_header(); ?>

<div id="content" class="site-content">

<div class="text-center pa_100p back_dd main_sk">
	<img src="/wordpress_ren/wp-content/uploads/2017/03/first-text.png" alt="人の心に残るものを" id="img_ani">
	<p class="font_sz20 lineh31 pa_t30p ma_auto" id="img_text">サイトへようこそ！<br>制作実績・BLOG・写真等を掲載しております。<br>ゆっくりとご覧ください。</p>
	<p class="font_sz16" id="img_text">- welcome ladies and gentlemen -</p>
</div>

<!--インフォメーションここから-->
<div class="clearfix width_100p" id="start">
</div>

<section class="width_100p info_inner">

<?php $loop = new WP_Query(array("post_type" => "news", "posts_pesr_page" => 1 ));

while($loop->have_posts()): $loop->the_post(); ?>

<div class="clearfix width_100p ma_auto">

<div id=”post-<?php the_ID(); ?>” class="width_100p pull-left"<?php post_class(); ?>>

	<ul class="pa_30p_10p clearfix info_top">

		<li class="pull-left info_style col-xs-3 col-sm-1 col-md-1 text-center"><?php the_title(); ?></li>

		<li class="pull-left lineh31 col-xs-6 col-sm-1 col-md-1"><?php the_time('Y/m/d'); ?></li>

		<li class="pull-left lineh31 col-xs-12 col-sm-12 col-md-3"><?php the_excerpt(); ?></li>

	</ul>
</div>

<?php endwhile; ?>

</div>

</section>
<!--インフォメーションここまで-->







<!--solution-->

<div class="col-xs-12 col-sm-12 col-md-12 back_cf">

<div class="space_area">
	<p>&nbsp;</p>
</div>

<div class="clearfix width_100p" id="solution">

<section class="col-xs-12 col-sm-12 col-md-12">

<h2 class="font_sz80p text-center text_letter_sp" id="animation">SOLUTION</h2>

<div class="line_a"></div>

<p class="text-center" id="animation_b"><span class="glyphicon glyphicon-th-large" aria-hidden="true">ソリューション</span><br></p>

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
			<p class="pa_20p_60p text-left">コンテンツの定期更新、クライアント様のデジタル戦略を支援、貢献いたします。</p>
		</li>
		<li class="col-lg-4 col-md-6 col-xs-12 text-center back_cf pa_50p_20p">
			<h2 class="text_letter_sp">WEBシステム</h2>
				<span class="glyphicon glyphicon-wrench font_sz30 sol_icon" aria-hidden="true"></span>
			<p class="pa_20p_60p text-left">クライアント毎に異なる様々な課題に対して、最新テクノロジーを合わせ効率的なシステムをご提供いたします。</p>
		</li>
	</ul>
</div>

</div>

</div>

</section>

</div>

</div>

<!--solution-->

<!--実績-->

<div class="clearfix width_100p" id="work">

<div class="space_area">
	<p>&nbsp;</p>
</div>

<section class="col-xs-12 col-sm-12 col-md-12">

<h2 class="font_sz80p text-center text_letter_sp" id="animation_c">WORK</h2>

<div class="line_a"></div>

<p class="text-center" id="animation_d"><span class="glyphicon glyphicon-bookmark" aria-hidden="true">制作実績</span></p>

</section>

<div class="space_area">
	<p>&nbsp;</p>
</div>

<section class="col-xs-12 col-sm-12 col-md-12">

<div class="pa_0p_10p">

<?php $loop = new WP_Query(array("post_type" => "portforio", "posts_per_page" => 8 ));

while($loop->have_posts()): $loop->the_post(); ?>

<div class="clearfix width_100p ma_auto">

<div id=”post-<?php the_ID(); ?>” class="col-xs-6 col-sm-6 col-md-3 ma_pa0p work"<?php post_class(); ?>>
	<ul>

	<li class="position_re"><p class="col-xs12 col-sm-12 col-md-12 pa_10_0bp"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
		<ul>
			<li class="position_ab top_0p right_0p z_in100 back_cred pa_5p_20p color_cf"><?php echo esc_html( $post->portforio_s ); ?></li>

			<li class="position_ab top_90p left_10p z_in100 font_web font_sz33"><?php echo esc_html( $post->syurui ); ?></li>
<!--
			<li class="width_100p text-left">
				<h3 class="font_20p text_dno">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h3>
			</li>
-->
		</ul>
	</li>
<!--
	<li class="width_90p"><?php the_excerpt(); ?></li>
-->
	</ul>
</div>

<?php endwhile; ?>

</div>

</div>

</section>

</div>

<!--more-->
<section class="ma_tp20">
	<div class="cl-effect-10 more">
		<a href="<?php echo get_permalink( get_page_by_path( 'portforio_all' )->ID ); ?>" data-hover="more"><span>more</span></a>
	</div>
</section>
<!--more-->

<!--実績-->








<div class="space_area">
	<p>&nbsp;</p>
</div>

<div class="back_color001" id="profile">

<div class="space_area">
	<p>&nbsp;</p>
</div>

<!--プロフィール-->

<section>

<h2 class="font_sz80p text-center text_letter_sp cf_text_bk" id="animation_e">PROFILE</h2>

<div class="line_c"></div>

<p class="text-center" id="animation_e"><span class="glyphicon glyphicon-user" aria-hidden="true">自己紹介</span></p>

<div class="space_area_b">
	<p>&nbsp;</p>
</div>

<div class="width_100p">
	<ul class="clearfix">
		<li class="col-xs-12 col-sm-6 col-md-6 pull-right text-center"><img src="/wordpress_ren/wp-content/uploads/2017/11/myphoto.jpg" width="500px"></li>
		<li class="col-xs-12 col-sm-6 col-md-6 pull-right text-center line_h50"><p>きよはる</p></li>
		<li class="col-xs-12 col-sm-6 col-md-6 pull-right text-center line_h50"><p>大阪出身2007年から、4年間PCインストラクターに従事。インストラクター時にオフィス関係の資格を多数取得その後、通信関係の仕事に転機通信業に在職しながらDIGITAL HOLLYWOOD入学。WEBおよび、GRAPHICを学び卒業後、デザイナー職へと転職。</p></li>
	</ul>
</div>

<!--プロフィール-->

<div class="space_area">
	<p>&nbsp;</p>
</div>

</section>

</div>

<div class="space_area">
	<p>&nbsp;</p>
</div>

<!--写真-->
<div class="clearfix width_100p" id="photo">

<section class="col-xs-12 col-sm-12 col-md-12 pull-right">

<h2 class="font_sz80p text-center text_letter_sp" id="animation_f">PHOTO</h2>

<div class="line_c"></div>

<p class="text-center" id="animation_f"><span class="glyphicon glyphicon-camera" aria-hidden="true">趣味の写真</span><br></p>

</section>

<div class="space_area">
	<p>&nbsp;</p>
</div>

<section class="col-xs-12 col-sm-12 col-md-12">

<div class="pa_0p_10p">

<?php $loop = new WP_Query(array("post_type" => "photo", "posts_per_page" => 8 ));

while($loop->have_posts()): $loop->the_post(); ?>

<div class="clearfix width_100p ma_auto">

<div id=”post-<?php the_ID(); ?>” class="col-xs-6 col-sm-6 col-md-3 ma_pa0p work"<?php post_class(); ?>>
	<ul>

	<li class="position_re"><p class="col-xs12 col-sm-12 col-md-12 pa_10_0p"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
		<ul>

			<li class="position_ab top_90p left_10p z_in100 font_web font_sz33"><?php echo esc_html( $post->syurui ); ?></li>

			<li class="width_100p text-left">
				<h3 class="font_20p text_dno">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h3>
			</li>
		</ul>
	</li>

	</ul>
</div>

<?php endwhile; ?>

</div>

</div>

</div>

</section>

</div>

<!--写真-->

<!--more-->
<section class="ma_tp20">
	<div class="cl-effect-10 more">
		<a href="<?php echo get_permalink( get_page_by_path( 'photo_all' )->ID ); ?>" data-hover="more"><span>more</span></a>
	</div>
</section>
<!--more-->

<div class="space_area">
	<p>&nbsp;</p>
</div>

<div class="back_color001" id="blog">

<div class="space_area">
	<p>&nbsp;</p>
</div>

<div class="clearfix width_100p">

<section class="col-xs-12 col-sm-12 col-md-12">

<h2 class="text-center font_sz80p text_letter_sp" id="animation_g">BLOG</h2>

<div class="line_c"></div>

<p class="text-center" id="animation_g"><span class="glyphicon glyphicon-book" aria-hidden="true">ブログ</span></p>

</section>

<div class="space_area">
	<p>&nbsp;</p>
</div>

<section class="col-xs-12 col-sm-12 col-md-12">

<?php $loop = new WP_Query(array("post_type" => "post", "posts_per_page" => 8 ));

while($loop->have_posts()): $loop->the_post(); ?>

<div class="clearfix width_100p ma_auto">

<div id=”post-<?php the_ID(); ?>” class="col-xs-6 col-sm-6 col-md-3 flt_l ma_bt20p"<?php post_class(); ?>>

	<ul class="position_re blog_link">

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
<ul>
<li class="pull-left width_15p">
	<p class="width_80p">
	<img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $alt; ?>" title="<?php echo $image_title; ?>" / class="border_ra50">
</p>
</li>
<!--カスタムフィールド画像出力-->
<li class="pull-left line_h50 ma_l10p"><?php the_time('Y/m/d'); ?></li>
</ul>
</div>
	<ul>
		<li><?php the_excerpt(); ?></li>
	</ul>
</div>

<?php endwhile; ?>

</div>

</div>

</div>

</div>

<div class="space_area">
	<p>&nbsp;</p>
</div>

</section>

</div>

</div>




<?php get_footer('front');
