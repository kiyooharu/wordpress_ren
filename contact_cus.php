<?php
/*
Template Name: 問い合わせ
*/
get_header("photo"); ?>

<div class="container pa_t50p contact">
	<div id="primary" class="content-area width_100p">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>

<?php get_footer('front'); ?>
