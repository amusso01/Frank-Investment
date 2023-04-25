<?php
/**
 * Template Name: Our History
 *
 * The template for displaying history page
 * 
 * Template Post Type: page
 *
 * @package Strapped
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

?>

<?php get_template_part( 'components/page/investment-service-hero') ?>


<main class="site-main history__main" role="main">
  <!-- IMAGE TEXT LEFT -->	
	<?php get_template_part( 'components/page/investment-image-left-text') ?>

	<!-- TIMELINE -->
	<?php get_template_part( 'components/page/timeline') ?>

	<!-- IMAGE TEXT RIGHT -->
	<div class="white-bg">
		<?php get_template_part( 'components/page/investment-image-right-text') ?>
	</div>
	
	<!-- SERVICES -->
	<?php get_template_part( 'components/page/history-services') ?>


</main>


<?php get_footer(); ?>