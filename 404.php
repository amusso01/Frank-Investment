<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package foundry
 */

get_header(); ?>


<main class="main main-error content-block"  role="main">

	<section class="section" id="section-error-page" style="padding:150px 0">

		<h1 class="page-title error-title"><?php esc_html_e( 'Content Cannot Be Found', 'foundry' ); ?></h1>

		<div class="page-body error-body">

			<p><?php esc_html_e( 'Unfortunately the content you were looking for could not be found. Please check that the URL is correct or go back to homepage with the button below.', 'foundry' ); ?></p>

			<a href="<?= site_url() ?>"  class="btn">HOME</a>


		</div>

	</section>

</main>

<?php get_footer(); ?>