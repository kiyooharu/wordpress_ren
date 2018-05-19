<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fooding
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top: 0px !important;">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<meta name=”viewport” content=”width=device-width, initial-scale=1.0″>

<!--google font-->
<?php get_template_part( 'google_font'); ?>
<!--google font-->

<!--loading-->
<?php get_template_part( 'loading'); ?>
<!--loading-->

<?php wp_head(); ?>

<!--アニメーション-->
<script>
jQuery(function(){
jQuery('#animation, #animation_b, #animation_c, #animation_d, #animation_e, #animation_f, #animation_g, #animation_h, #img_ani, #img_text').css('visibility','hidden');
jQuery(window).scroll(function(){
 var windowHeight = jQuery(window).height(),
     topWindow = jQuery(window).scrollTop();
 jQuery('#animation, #animation_b, #animation_c, #animation_d, #animation_e, #animation_f, #animation_g, #animation_h, #img_ani, #img_text').each(function(){
  var targetPosition = jQuery(this).offset().top;
  if(topWindow > targetPosition - windowHeight + 100){
   jQuery(this).addClass("fadeInDown");
  }
 });
});
});
</script>
<!--アニメーション-->

</head>

<body <?php body_class(); ?> id="home" class="container-fluid">

<!--sns_copy-->
<?php get_template_part( 'sns_copy'); ?>
<!--sns_copy-->

<div id="page" class="site">

<!--header_mobile_menu-->
<?php get_template_part( 'header_mobile_menu'); ?>
<!--header_mobile_menu-->

	<div class="site-pusher">
		<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'fooding' ); ?></a>

		<header id="masthead" class="site-header back_grade_green" role="banner" data-parallax="scroll" data-image-src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">
			<div class="site-header-wrap">
				<div class="container">

					<button class="top-mobile-menu-button mobile-menu-button" data-effect="st-effect-1" type="button"><i class="fa fa-bars"></i></button>
					<div class="site-branding pa_20p">

						<?php if ( has_custom_logo() ) : ?>
						<div class="site-logo">
							<?php fooding_the_custom_logo(); ?>
						</div>
						<?php endif; ?>

						<?php
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title text_letter_sp"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						endif; ?>
					</div><!-- .site-branding -->
				</div>


				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="container">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>
				</nav><!-- #site-navigation -->


				<div class="scloole"><a href="#start" rel="m_PageScroll2id"><span></span></a></div>

			</div> <!-- .site-header-wrap -->


		</header><!-- #masthead -->
	</div>
