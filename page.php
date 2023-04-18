<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foundry
 */

get_header();
?>

<?php get_template_part( 'components/page/investment-service-hero') ?>

<main role="main" class="site-main page-main">
	<div class="content-block">


		<?php

		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();

				the_content();


			endwhile; // End of the loop.

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div>
</main><!-- #main -->


<?php
get_footer();
