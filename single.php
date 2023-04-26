<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package foundry
 */

get_header();
?>
<main role="main" class="single-main">

	<div class="content-block">
		<section class="single-hero">
			<h1><?= get_the_title() ?></h1>
	
			<figure>
				<img src="<?= get_the_post_thumbnail_url() ?>" alt="article feature image">
			</figure>
		</section>
	
		<div class="single-wrapper">
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
	</div>


</main><!-- #main -->


<?php
get_footer();
