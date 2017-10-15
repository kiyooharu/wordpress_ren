<?php
/*
Template Name: 写真
*/
get_header("photo"); ?>

<div class="container">

<div class="photo_single">

	<div id="primary" class="content-area text_c width_100p">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'singlephoto' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>

</div>


<?php
get_footer("photo");
