<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fooding
 */

get_header("port"); ?>

<div class="container archive">
	<div id="primary" class="content-area col-xs-12 col-sm-6 col-md-5 col-lg-6">
		<main id="main" class="site-main" role="main">

		<?php

		$archive_layout = get_theme_mod( 'fooding_archive_layout', 'default' );
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					wp_get_archives(array('show_post_count' => 1));
					the_archive_title( '<h1 class="entry-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				 switch ( $archive_layout ) {
 		 			case 'grid':
 		 				get_template_part( 'template-parts/content', 'grid' );
 		 				break;

 		 			default:
 		 				get_template_part( 'template-parts/content', 'grid-large' );
 		 				break;
 		 		}


			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;


		echo '<div class="post-pagination">';
		the_posts_pagination(array(
			'prev_next' => true,
			'prev_text' => '',
			'next_text' => '',
			'before_page_number' => '<span class="screen-reader-text">' . esc_html__('Page', 'fooding') . ' </span>',
		));
		echo '</div>';

		?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
</div>

<?php
get_footer();
