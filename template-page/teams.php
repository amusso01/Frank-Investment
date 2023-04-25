<?php
/**
 * Template Name: Teams
 *
 * The template for displaying teams page
 * 
 * Template Post Type: page
 *
 * @package Strapped
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$internals_query = new WP_Query([
  'post_type'      => 'team',
  'posts_per_page' => -1,
  'tax_query'      => [
    [
      'taxonomy' => 'organization',
      'field'    => 'slug',
      'terms'    => 'internals'
    ]
  ]
]);

$advisors_query = new WP_Query([
  'post_type'      => 'team',
  'posts_per_page' => -1,
  'tax_query'      => [
    [
      'taxonomy' => 'organization',
      'field'    => 'slug',
      'terms'    => 'advisors'
    ]
  ]
]);

?>

<?php get_template_part( 'components/page/investment-service-hero') ?>


<main class="site-main teams__main content-block" role="main">

	<section class="interals teams-page-section__grid">
		<?php if ( $internals_query->have_posts() ) : ?>
			<?php while ( $internals_query->have_posts() ) : $internals_query->the_post(); ?>


			<?php get_template_part(  'components/page/team-card' ) ?>

			<?php endwhile; ?>
		<?php endif; ?>
	</section>

	<?php wp_reset_postdata(); ?>

	<h2>Advisors</h2>

	<section class="advisors teams-page-section__grid">


		<?php if ( $advisors_query->have_posts() ) : ?>
				<?php while ( $advisors_query->have_posts() ) : $advisors_query->the_post(); ?>


				<?php get_template_part(  'components/page/team-card' ) ?>

				<?php endwhile; ?>
			<?php endif; ?>
	</section>

	<?php wp_reset_postdata(); ?>

</main>


<?php get_footer(); ?>