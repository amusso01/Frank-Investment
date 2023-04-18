<?php
/**
 * White info section
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $sections = get_field('title_info');

?>

<section class="info-section">
  <div class="info-section__inner">
    <div class="content-block">
      <div class="info-section__repeater">
        <?php foreach($sections as $info) : ?>
          <div class="single-info-section">

            <div class="single-info-section__inner">
              <h2><?php echo $info['title'] ?></h2>
              <div class="vertical-blue-line">
                <?php echo $info['content'] ?>
              </div>
            </div>

          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>