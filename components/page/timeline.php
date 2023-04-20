<?php
/**
 * TIMELINE
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $timeline = get_field('timeline');
?>

<section class="timeline">
  <div class="timeline__inner">
    <div class="content-block">

      <h2 class="main-title">Timeline</h2>
      <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <?php foreach ($timeline as $slide) : ?>

              <li class="glide__slide">
                <figure>
                  <img
                    srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-sizes="auto"
                    data-parent-fit="cover"
                    data-srcset="<?php bml_the_image_srcset($slide['image']) ?>"
                    alt="team member image"
                    style="max-width: 100%; max-height: 100%;"
                    class="lazyload" />
                </figure>
                <div class="slide-content">
                  <p class="year"><?php echo $slide['year'] ?></p>
                  <p class="h5"><?php echo $slide['title'] ?></p>
                  <p class="line"><?php  echo $slide['content']?></p>
                </div>
              </li>

            <?php endforeach; ?>

          </ul>
          <div class="glide__bullets" data-glide-el="controls[nav]">
            <?php foreach ($timeline as $key => $slide) : ?>
            <button class="glide__bullet" data-glide-dir="=<?php  echo $key ?>"></button>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

 
    </div>
  </div>
</section>  