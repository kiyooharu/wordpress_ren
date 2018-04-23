<?php

/*
Template Name: ポートフォリオ
*/

get_header("port"); ?>

<div class="container pa_t50p">
	<div id="primary" class="content-area col-xs-12 col-sm-12 col-md-12">
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

<?php
get_footer("port");