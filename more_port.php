<?php

/*
Template Name: ポートフォリオ集
*/

get_header(); ?>

<section class="width_100p">

<h2 class="text_c font_sz50p pa_top200p">PORTFOLIO</h2>

<p class="text_c pa_25_10p">今までの過去の実績を載せております。<br>ゆっくりとご覧ください</p>

<section class="width_100p">

<div class="pa_0p_10p">

<?php $loop = new WP_Query(array("post_type" => "portforio", "posts_per_page" => 20 ));

while($loop->have_posts()): $loop->the_post(); ?>

<div class="clearfix width_100p ma_auto">

<div id=”post-<?php the_ID(); ?>” class="width_25p flt_l"<?php post_class(); ?>>
	<ul>

	<li class="position_re"><p class="width_100p"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
		<ul>
			<li class="position_ab top_0p right_0p z_in100 back_cred padding_0_15p"><?php echo esc_html( $post->portforio_s ); ?></li>

			<li class="position_ab top_90p left_10p z_in100 font_web font_sz33"><?php echo esc_html( $post->syurui ); ?></li>

			<li class="position_ab top_115p left_10p width_10p height_100p back_cf text_c"><h3 class="font_20p text_dno"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></li>
		</ul>
	</li>

	<li class="pa_25_10p"><?php the_excerpt(); ?></li>
	
	</ul>
</div>

<?php endwhile; ?>

</div>

</div>

</div>

<!--実績-->

<div class="space_area">
	<p>&nbsp;</p>
</div>


<?php get_footer('front');
