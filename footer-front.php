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

<?php get_template_part( 'contact'); ?>

</div>

<div class="col-xs-12 col-sm-12 col-md-12 pa_20p back_cf">

<?php get_template_part( 'footer_widget'); ?>

</div>

<footer id="colophon" class="site-footer" role="contentinfo">

<div class="site-info">

<!--戻るボタン-->
<?php get_template_part( 'back_bt'); ?>
<!--戻るボタン-->

</div><!-- .site-info -->
</footer><!-- #colophon -->

	<!-- end .site-pusher -->

	<!-- #page -->

<?php wp_footer(); ?>

</div>

</body>
</html>
