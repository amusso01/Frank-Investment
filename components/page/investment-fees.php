<?php
/**
 * Fees
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $fees = get_field('fees');
 $title = get_field('banner_title_fees');

?>

<section class="fees-banner">
  <div class="fees-banner__inner">
      <div class="content-block">
        <h2><?php  echo $title ?></h2>
        <div class="fees-banner__grid">
          <?php foreach($fees as $fee) : ?>
            <div class="single-fee">
              <div class="single-fee__inner">
                <p class="fee-text"><?php echo $fee['fee'] ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
    </div>
  </div>
</section>