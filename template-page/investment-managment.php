<?php
/**
 * Template Name:Investment Management
 *
 * The template for displaying investment managment page
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


<main class="site-main investment-managment__main" role="main">

  <!-- INVESTMENT CARD -->
  <?php get_template_part( 'components/page/investment-cards') ?>
  <!-- IMAGE TEXT LEFT -->
  <?php get_template_part( 'components/page/investment-image-left-text') ?>
  <!-- FEES -->
  <?php get_template_part( 'components/page/investment-fees') ?>
  <!-- IMAGE TEXT RIGHT -->
  <?php get_template_part( 'components/page/investment-image-right-text') ?>
  <!-- WHITE INFO SECTION -->
  <?php get_template_part( 'components/page/investment-info-section') ?>
  <!-- CONTACT -->
  <?php get_template_part( 'components/page/investment-contact') ?>

</main>


<?php get_footer(); ?>