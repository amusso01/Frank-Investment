<?php
/**
 * Image left text
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $title = get_field('title_left');
 $image = get_field('image_left');
 $content = get_field('content_left');

?>

<section class="grey-image-text">
  <div class="grey-image-text__inner">
    <div class="content-block">
      <div class="grey-image-text__grid">

        <div class="image__wrapper">
          <figure>
            <img
              data-sizes="auto"
              data-srcset="<?php bml_the_image_srcset($image) ?>"
              alt="team member image"
              style="max-width: 100%; max-height: 100%;"
              class="lazyload" />
          </figure>
        </div>

        <div class="content-wrapper">
          <h2><?php echo $title ?></h2>
          <div class="content">
            <p>
              <?php echo $content ?>
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>