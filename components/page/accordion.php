<?php
/**
 * Page Accordion
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

$faqs = get_field('faq');
?>

<section class="accordion-section">
  <div class="accordion-section__inner">
    <div class="content-block">
			<h3 class="h2">FAQs</h3>
			<div class="accordion-container">
				<?php foreach($faqs as $faq) : ?>
				<div class="ac">
					<h6 class="ac-header">
						<button type="button" class="ac-trigger"><?php echo $faq['faq_title'] ?></button>
					</h6>
					<div class="ac-panel">
						<p class="ac-text"><?php echo $faq['faq_content'] ?></p>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
