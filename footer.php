<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

?>

</div><!-- #content -->

	<footer class="site-footer">
		<div class="site-footer__inner  ">
			<div class="site-footer__top content-block">

				<div class="site-footer__top-grid">
				
					<div class="single-footer-col single-footer-col__left">
						<h4>What we do</h4>
						<?php get_template_part( 'components/navigation/footer-nav-what-we-do' ) ?>
					</div>

					<div class="single-footer-col single-footer-col__center">
						<div class="footer-about-menu__wrapper">
							<h4>About</h4>
							<?php get_template_part( 'components/navigation/footer-nav-about' ) ?>
						</div>
						<div class="footer-office__wrapper">
							<h4>London Office</h4>
							<p>Frank Investments 
								<br>
								Lansdowne House 
								<br>
								57 Berkeley Square 
								<br>
								London 
								<br>
								W1J 6Er</p>
						</div>
					</div>
					<div class="single-footer-col single-footer-col__right">

						<div class="footer-legal">
							<?php 
							$links = get_field('footer_links', 'options');

							foreach($links as $link) :
							?>
							<p><a href="<?= $link['footer_link'] ?>"> <?= $link['footer_content']  ?></a> </p>
							<?php endforeach; ?>
						</div>

						<div class="footer-social__wrapper">
							<h4>Follow</h4>
							<ul>
								<li><a href=""><?php get_template_part( 'svg-template/svg', 'linkedin' )  ?></a></li>
								<li><a href=""><?php get_template_part( 'svg-template/svg', 'instagram' )  ?></a></li>
								<li><a href=""><?php get_template_part( 'svg-template/svg', 'twitter' )  ?></a></li>
							</ul>
						</div>
					</div>

				</div>


			</div>

			<div class="site-footer__bottom">
				<div class="site-footer__bottom-wrapper content-block" >
					<p class="disclaimer">
					Disclaimer: The views expressed on this website and in the blog are the personal views of the authors and do not constitute investment advice. This website is strictly intended for Professional Investors only. Click here to see the disclaimer and cookie policy in full. | <a href="<?php echo site_url('privacy-policy') ?>">Privacy Policy </a>
					</br>
					</br>
					Frank Investments Limited is a Private Limited Company registered in England and Wales, registered number 5629005, Registered Address: 24 Old Bond Street, London, W1S 4AP, UNITED KINGDOM. Frank Investments Limited is authorised and regulated by the Financial Conduct Authority (FCA), reference number 627697, Principal place of business: 57 Berkeley Square, London, W1J 6ER, UNITED KINGDOM.
					</p>
				</div>
			</div>
		
		</div>
	</footer><!-- .site-footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
