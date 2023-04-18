<?php
/**
 * Template Name:Compliance Service
 *
 * The template for displaying Compliance service page
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


  <?php get_template_part( 'components/page/intro-pages') ?>

  <?php get_template_part( 'components/page/full-banner') ?>

  <?php get_template_part( 'components/page/accordion') ?>

  <?php get_template_part( 'components/page/teams') ?>

  <?php get_template_part( 'components/page/investment-contact') ?>


</main>


<?php get_footer(); ?>

