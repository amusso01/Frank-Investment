<?php
/**
 * History Services
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $services = get_field('services');

?>

<section class="history-services">
  <div class="history-services__inner">
    <div class="content-block">

      <div class="history-services__grid">
        <?php foreach ($services as $key => $service) : ?>
          <div class="single-intro-pages-card">
            <figure>
              <img
                data-sizes="auto"
                data-srcset="<?php bml_the_image_srcset(get_post_thumbnail_id($service['page_service'][0])) ?>"
                alt="page feautered image"
                style="max-width: 100%; max-height: 100%;"
                class="lazyload" />
            </figure>

            <a href="<?php echo get_the_title( $service['page_service'][0]->ID )?>" class="card-content">
                <h4><?php echo get_the_title( $service['page_service'][0]->ID )?></h4>
                <p class="excerpt"><?php echo $service['excerpt'] ?></p>
                <p class="link">LEARN MORE <span><i><?php get_template_part( 'svg-template/svg', 'arrow' ) ?></i></span></p>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
 
    </div>
  </div>
</section>
