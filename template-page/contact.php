<?php
/**
 * Template Name: Contact
 *
 * The template for displaying contact page
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


<main class="site-main contact__main" role="main">

	<div class="blue-contact-page-info">
		<div class="blue-contact-page-info__wrapper">
			<div class="content-block">
				<h2>Our Offices are located at</h2>
				<p class="address-first">London and Sunningdale, Berkshire, UK.</p>
				<p class="address-title-office">LONDON OFFICE ADDRESS</p>
				<p class="address-pre">
				Frank Investments, <br> Holborn Town Hall, <br>Level 3, 193-197 High Holborn <br> London <br> WC1V 7BD
				</p>
				<p class="address-last">
				If you have any questions or would like to know more, please feel free to call or email us.
				</p>
			</div>
		</div>
	</div>

	<section class="address-people">
		<div class="content-block">
			<div class="address-people__wrapper">

				<div class="single-person">
					<h3>Paul Sedgwick</h3>
					<p class="blue" style="text-align:center;">FOR INVESTMENT SERVICES</p>
					<div class="phone-container">
						<p>Telephone</p>
						<a href="tel:+442039949775">+ (44) 20 3994 9775</a>
						<a href="tel:+441344723166">+ (44) 1344 723 166</a>
					</div>
					<a href="mailto:PAUL@FRANKINVESTMENTS.CO.UK" class="btn person-btn">PAUL@FRANKINVESTMENTS.CO.UK</a>
				</div>

				<div class="single-person">
					<h3>Howard Weller</h3>
					<p class="blue" style="text-align:center;">FOR CONSULTANCY SERVICES</p>
					<div class="phone-container">
						<p>Telephone</p>
						<a href="tel:+4402039949776">+ (44) 020 3994 9776</a>
					</div>
					<a href="mailto:HOWARD@FRANKINVESTMENTS.CO.UK" class="btn person-btn">HOWARD@FRANKINVESTMENTS.CO.UK</a>
				</div>

				<div class="single-person">
					<h3>Amy Grovit</h3>
					<p class="blue" style="text-align:center;">FOR COMPLIANCE & APPOINTED REPRESENTATIVE SERVICES</p>
					<div class="phone-container">
						<p>Telephone</p>
						<a href="tel:+4402039949777">+ (44) 020 3994 9777</a>
					</div>
					<a href="mailto:AMY@FRANKINVESTMENTS.CO.UK" class="btn person-btn">AMY@FRANKINVESTMENTS.CO.UK</a>
				</div>

			</div>
		</div>
	</section>


</main>


<?php get_footer(); ?>