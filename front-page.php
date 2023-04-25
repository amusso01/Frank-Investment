<?php
/**
 * The template for displaying frontpage by default
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

get_header();
?>


	
<?php get_template_part( 'components/front/hero') ?>	



<main class="main homepage-main" role="main">

 <?php get_template_part( 'components/front/blue-banner') ?>

 <?php get_template_part( 'components/front/bg-banner') ?>

 <?php get_template_part( 'components/front/latest-news') ?>

</main>

<?php get_footer(); ?>
