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

	<div class="bottom-button" style="padding:30px 0px 70px; display:flex; justify-content:center; background-color:#f4f4f4">
		<a href="<?= site_url( '/contact' ) ?>" class="btn" style="color:#2d4b6f; border-color:#2d4b6f">Contact us</a>
	</div>


</main>


<?php get_footer(); ?>