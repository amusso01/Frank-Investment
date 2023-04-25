<?php
/**
 * Index latest news
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $recentPost = wp_get_recent_posts( [
  'post_type'      => 'post',
  ], 'OBJECT' );


  $flexPosts = [
    'post_type'       => 'post',
    'posts_per_page'  => 3,
    'offset'          => 1
  ]

?>

<section class=" index__latest-news" >

  <div class="index__latest-news__wrapper">

    <div class="index__latest-news__inner content-block">

      <h3 class="h2">Latest Market Commentary</h3>

      <div class="latest-news__grid">

        <div class="big-news">
          <div class="index-single-post">

            <figure>
              <img
                data-sizes="auto"
                data-srcset="<?php bml_the_image_srcset(get_post_thumbnail_id($recentPost[0])) ?>"
                alt="page feautered image"
                data-parent-fit="cover"
                style="max-width: 100%; max-height: 100%;"
                class="lazyload" />
                <p class="caption">LATEST COMMENTARY</p>
            </figure>

            <a  href="<?= get_the_permalink( $recentPost[0]->ID )?>" class="card-content">
                <h4><?= get_the_title( $recentPost[0]->ID )?></h4>
                <p class="excerpt"><?= get_the_excerpt( $recentPost[0]->ID ) ?></p>
                <p class="link">READ MORE<span><i><?php get_template_part( 'svg-template/svg', 'arrow' ) ?></i></span></p>
            </a>

          </div>
        </div>

        <div class="flex-news">
          <?php $the_smallQuery = new WP_Query( $flexPosts ); ?>

          <?php  if ( $the_smallQuery->have_posts() ) :  ?>
            <?php while ( $the_smallQuery->have_posts() ) : $the_smallQuery->the_post(); ?>

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


      <div class="btn-wrapper">
        <a href="#library" class="btn">VIEW MARKET COMMENTARY LIBRARY</a>
      </div>

    </div>

  </div>

</section>