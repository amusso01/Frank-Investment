<?php
/**
 * Index latest news
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $id =get_queried_object()->ID;

 $title = get_field('link_title' ,$id);
 $subheader = get_field('link_sub_header',  $id );
 $links = get_field('link_links',  $id );


?>

<section class=" index__page-links" >

  <div class="index__page-links__wrapper">

    <div class="index__page-links__inner content-block">

      <h3 class="h2"><?= $title ?></h3>
      <p class="subheader"><?= $subheader ?></p>

      <div class="index__page-links-grid">
        <?php foreach($links as $link) : ?>
  
          <div class="index__sinlge-page-link">
  
            <figure>
              <img
                data-sizes="auto"
                data-srcset="<?php bml_the_image_srcset($link['image']) ?>"
                alt="page feautered image"
                data-parent-fit="cover"
                style="max-width: 100%; max-height: 100%;"
                class="lazyload" />
            </figure>
  
            <a  href="<?= $link['link']['url'] ?>" class="card-content">
                <h4><?= $link['title'] ?></h4>
                <p class="excerpt"><?= $link['subtitle'] ?></p>
                <p class="link"><?= $link['link']['title']?><span><i><?php get_template_part( 'svg-template/svg', 'arrow' ) ?></i></span></p>
            </a>
  
  
          </div>
  
        <?php endforeach; ?>
      </div>

    </div>

  </div>

</section>