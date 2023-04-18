<?php
/**
 * Template Name:Investment Service
 *
 * The template for displaying investment service page
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


<main class="site-main investment-service__main" role="main">

  <?php get_template_part( 'components/page/full-banner') ?>

  <?php get_template_part( 'components/page/services-benefits') ?>


  <?php get_template_part( 'components/page/teams') ?>


</main>


<?php get_footer(); ?>