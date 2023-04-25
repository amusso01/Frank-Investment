<?php
/**
 * The index file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

get_header();
?>


<?php get_template_part( 'components/index/hero') ?>


<main role="main" class=" main index-main">

<?php get_template_part( 'components/index/latest-news') ?>

<?php get_template_part( 'components/index/page-links') ?>


<?php get_template_part( 'components/index/filter-nav') ?>
<?php get_template_part( 'components/index/articles') ?>

</main><!-- #main -->


<?php
get_footer();

