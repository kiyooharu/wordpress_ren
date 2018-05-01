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
<!--google font-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

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
		<?php wp_nav_menu( array('theme_location' => 'port_head_menu','echo' => true,'items_wrap' => '<ul>%3$s</ul>')); ?>
		<?php get_search_form( $echo = true ); ?>
	</nav>
	<!-- end .header-mobile-menu -->

	<div class="site-pusher header_custam">

		<header id="masthead" class="site-header back_grade_green" role="banner" data-parallax="scroll" data-image-src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">
			<div class="site-header-wrap">
				<div class="container">

				<button class="top-mobile-menu-button mobile-menu-button" data-effect="st-effect-1" type="button"><i class="fa fa-bars"></i></button>

				<div class="photo_title"><?php the_title( '<h1 class="color_cf pa_120p">', '</h1>' ); ?></div>

				</div>

				<nav id="site-navigation" class="main-navigation main-navigation_port" role="navigation">
					<div class="container">
						<?php wp_nav_menu( array( 'theme_location' => 'port_head_menu', ) ); ?>
					</div>
				</nav><!-- #site-navigation -->

			</div> <!-- .site-header-wrap -->
		</header><!-- #masthead -->

	</div>

		<div id="content" class="site-content">
