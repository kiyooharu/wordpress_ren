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
<html <?php language_attributes(); ?>>
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
<div id="page" class="site">

	<div class="site-pusher header_custam">

		<header id="masthead" class="site-header" role="banner" data-parallax="scroll" data-image-src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">
			<div class="site-header-wrap">

				<div><?php the_title( '<h1 class="color_cf pa_120p">', '</h1>' ); ?></div>

				<nav id="site-navigation" class="main-navigation bo_60p top_0p" role="navigation">
					<div class="container">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>
				</nav><!-- #site-navigation -->

			</div> <!-- .site-header-wrap -->
		</header><!-- #masthead -->


		<div id="content" class="site-content">
