<?php
/**
 * Index articles
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $posts = [
  'post_type'       => 'post',
  'posts_per_page'  => -1,
  ]


?>

<section class="index-articles" >

  <div class="index-articles__wrapper">

    <div class="index-articles__inner content-block">

      <div class="index-articles__grid">


      <?php $query = new WP_Query( $posts ); ?>

      <?php  if ( $query->have_posts() ) :  ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="index-flex-post">

          <figure>
            <img
              data-sizes="auto"
              data-srcset="<?php bml_the_image_srcset(get_post_thumbnail_id()) ?>"
              alt="page feautered image"
              data-parent-fit="cover"
              style="max-width: 100%; max-height: 100%;"
              class="lazyload" />
          </figure>

          <a  href="<?= get_the_permalink(  )?>" class="card-content">
              <h6><?= get_the_title(  )?></h6>
              <p class="excerpt"><?= get_the_excerpt(  ) ?></p>
              <p class="link">READ MORE<span><i><?php get_template_part( 'svg-template/svg', 'arrow' ) ?></i></span></p>
          </a>

        </div>

        <?php endwhile; ?>
      <?php  endif;  ?>

      <?php wp_reset_postdata(); ?>

      </div>

    </div>

  </div>

</section>