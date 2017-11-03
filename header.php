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
<link href="https://fonts.googleapis.com/css?family=Poppins|Questrial" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=ABeeZee|Great+Vibes|Quicksand|Raleway|Rubik" rel="stylesheet">
<!--google font-->

<!--フェードイン
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
$(function(){
    $(window).load(function(){
        var delaySpeed = 100;
        var fadeSpeed = 500;
        $('ul li').each(function(i){
            $(this).delay(i*(delaySpeed)).css({display:'block',opacity:'0'}).animate({opacity:'1'},fadeSpeed);
        });
    });
});
</script>
フェードイン-->

<script>
/* Demo purposes only */
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);
</script>


<script>
$(document).ready(function(){

	// scroll-to-anchor
	$('a[href*=#]').click(function() {
			var target = $(this.hash);
			//$(this).text(target.length+"/");
			if (target) {
				var targetOffset = target.offset().top;
				$('html,body').animate({scrollTop: targetOffset},400,"easeInOutQuart");
				return false;
			}
	});
</script>

<?php wp_head(); ?>
</head>




<body <?php body_class(); ?> id="home">

<!--sns-->
<div class="sns_position">
	<ul class="sns_position_inner">
		<a href="https://www.facebook.com/kiyokoharu"><li class="icon-facebook2 margin_bt50p color_cf"></li></a>
		<a href=""><li class="icon-instagram margin_bt50p color_cf"></li></a>
		<a href=""><li class="icon-github margin_bt50p color_cf"></li></a>
	</ul>
</div>
<!--sns-->

<!--copyright-->
<div class="site-copyright color_cf">
	<?php printf( esc_html__( 'Copyright &copy; %1$s %2$s. All Rights Reserved.', 'fooding' ), date( 'Y' ), get_bloginfo( 'name' ) ); ?>
</div>
<!--copyright-->



<div id="page" class="site">

	<!-- begin .header-mobile-menu -->
	<nav class="st-menu st-effect-1" id="menu-3">
		<?php wp_nav_menu( array('theme_location' => 'primary','echo' => true,'items_wrap' => '<ul>%3$s</ul>')); ?>
		<?php get_search_form( $echo = true ); ?>
	</nav>
	<!-- end .header-mobile-menu -->

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
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

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


