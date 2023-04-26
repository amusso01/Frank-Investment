<?php 
/**
 * Subscribe section
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/


?>


<section class="subscribe-section" id="subscribe">
  <div class="subscribe-section__inner">
    <div class="content-block">

      <div class="subscribe-grid">
        <div class="subscribe-grid__info">
          <h4 class="h2">Susbcribe</h4>
          <p>Sign up to receive the market commentary updates in your email inbox</p>
        </div>
        <div class="subscribe-grid__form">
          <?= do_shortcode( '[forminator_form id="345"]' ) ?>
        </div>
      </div>

    </div>
  </div>
</section>