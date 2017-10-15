<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fooding
 */

get_header(); ?>

<!--実績-->

<h2 class="text_c font_sz50p">PORTFOLIO GALLEYES</h2>

<p class="text_c pa_25_10p">今までの過去の実績を載せております。<br>ゆっくりとご覧ください</p>

<div class="pa_0p_10p">

<?php $loop = new WP_Query(array("post_type" => "portforio", "posts_per_page" => 8 ));

while($loop->have_posts()): $loop->the_post(); ?>

<div class="clearfix width_100p ma_auto">

<div id=”post-<?php the_ID(); ?>” class="width_31p flt_l"<?php post_class(); ?>>
	<ul>

	<li class="position_re"><p class="width_100p"><?php the_post_thumbnail(); ?></p>
		<ul>
			<li class="position_ab top_0p right_0p z_in100 back_cred padding_0_15p"><?php echo esc_html( $post->portforio_s ); ?></li>

			<li class="position_ab top_105p left_10p z_in100 font_web font_sz33"><?php echo esc_html( $post->syurui ); ?></li>

			<li class="position_ab top_130p left_10p width_10p height_100p back_cf text_c"><h3 class="font_20p text_dno"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></li>
		</ul>
	</li>

	<li class="pa_25_10p"><?php the_excerpt(); ?></li>
	
	</ul>
</div>

<?php endwhile; ?>

</div>

</div>

<!--実績-->

<div class="space_area">
	<p>&nbsp;</p>
</div>


<!--プロフィール-->

<h2 class="text_c font_sz50p">PROFILE</h2>

<div class="pa_0p_10p">

<?php $loop = new WP_Query(array("post_type" => "photo", "posts_per_page" => 2 ));

while($loop->have_posts()): $loop->the_post(); ?>

<div class="clearfix width_100p ma_auto">

<div id=”post-<?php the_ID(); ?>” class="width_31p flt_l"<?php post_class(); ?>>
	<ul>

	<li><p class="width_100p"><?php the_post_thumbnail(); ?></p></li>

	<li><h3 class="font_20p"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></li>

	<li><?php the_time('Y/m/d'); ?></li>

	<li><?php the_excerpt(); ?></li>
	
	</ul>
</div>

<?php endwhile; ?>

</div>

</div>

<!--プロフィール-->



<div class="space_area">
	<p>&nbsp;</p>
</div>




<!--写真-->

<h2 class="text_c font_sz50p">PHOTO GALLERES</h2>

<div class="pa_0p_10p">

<?php $loop = new WP_Query(array("post_type" => "photo", "posts_per_page" => 4 ));

while($loop->have_posts()): $loop->the_post(); ?>

<div class="clearfix width_100p ma_auto">

<div id=”post-<?php the_ID(); ?>” class="width_31p flt_l"<?php post_class(); ?>>
	<ul>

	<li><p class="width_100p"><?php the_post_thumbnail(); ?></p></li>

	<li><h3 class="font_20p"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></li>

	<li><?php the_time('Y/m/d'); ?></li>

	</ul>
</div>

<?php endwhile; ?>

</div>

</div>

<!--写真-->






<div class="space_area">
	<p>&nbsp;</p>
</div>








<div class="clearfix width_100p">

<section class="flt_l width_50p">

<h2 class="text_c font_sz50p">BLOG</h2>

<?php $loop = new WP_Query(array("post_type" => "post", "posts_per_page" => 4 ));

while($loop->have_posts()): $loop->the_post(); ?>

<div class="clearfix width_100p ma_auto">

<div id=”post-<?php the_ID(); ?>” class="width_47p flt_l"<?php post_class(); ?>>

	<ul class="pa_20p position_re">

	<li><p class="width_100p"><?php the_post_thumbnail(); ?></p></li>

	<li class="position_ab top_0p right_0p back_cred padding_0_15p"><?php the_category(); ?></li>

	<li><h3 class="font_20p"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></li>

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
<li class="flt_l width_15p"><p class="width_100p"><img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $alt; ?>" title="<?php echo $image_title; ?>" / class="border_ra50"></p></li>
<!--カスタムフィールド画像出力-->

	<li class="flt_l line_h50 ma_l10p"><?php the_time('Y/m/d'); ?></li>
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

<section class="flt_l width_50p">

<h2 class="text_c font_sz50p">NEWS</h2>

<?php $loop = new WP_Query(array("post_type" => "news", "posts_per_page" => 4 ));

while($loop->have_posts()): $loop->the_post(); ?>

<div class="clearfix width_100p ma_auto">

<div id=”post-<?php the_ID(); ?>” class="width_90p flt_l"<?php post_class(); ?>>

	<ul class="pa_20p">

	<li><p class="width_100p"><?php the_post_thumbnail(); ?></p></li>

	<li><h3 class="font_20p"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></li>

	<li><?php the_time('Y/m/d'); ?></li>

	<li><?php the_excerpt(); ?></li>
	
	</ul>
</div>

<?php endwhile; ?>

</div>

</section>

</div>





<div class="space_area">
	<p>&nbsp;</p>
</div>



<?php get_footer('front');
