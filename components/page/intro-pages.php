<?php
/**
 * Intro plus pages services links
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $title = get_field('intro_title');
 $content = get_field('intro_content');
 $pages = get_field('pages_link');

?>

<section class="intro-pages-section">
  <div class="intro-pages-section__inner">
    <div class="content-block">

      <div class="intro-page__content">
        <h3 class="h2"><?php echo $title ?></h3>
        <p class="content"><?php echo $content ?></p>
      </div>

      <div class="intro-pages-section__grid">
        <?php foreach($pages as $page) : ?>
          <div class="single-intro-pages-card">

            <figure>
              <img
                data-sizes="auto"
                data-srcset="<?php bml_the_image_srcset(get_post_thumbnail_id($page)) ?>"
                alt="page feautered image"
                style="max-width: 100%; max-height: 100%;"
                class="lazyload" />
            </figure>

            <a href="<?php echo get_the_permalink( $page->ID )?>" class="card-content">
                <h4><?php echo get_the_title( $page->ID )?></h4>
                <p class="link">LEARN MORE <span><i><?php get_template_part( 'svg-template/svg', 'arrow' ) ?></i></span></p>
            </a>
        

          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>