<?php 
  $post = wp_get_recent_posts( [
    'post_type'      => 'post',
  ], 'OBJECT' );
?>

<section class="front-latest-news">
  <div class="content-block">
    <div class="front-latest-news__wrapper">
      <h2>Latest Market Commentary</h2>


      <div class="front-single-post">

            <figure>
              <img
                data-sizes="auto"
                data-srcset="<?php bml_the_image_srcset(get_post_thumbnail_id($post[0])) ?>"
                alt="page feautered image"
                data-parent-fit="cover"
                style="max-width: 100%; max-height: 100%;"
                class="lazyload" />
                <p class="caption"><a href="#">SUBSCRIBE TO OUR COMPLIMENTARY MARKET COMMENTARY</a></p>
            </figure>

            <a  href="<?= get_the_title( $post[0]->ID )?>" class="card-content">
                <h4><?= get_the_title( $post[0]->ID )?></h4>
                <p class="excerpt"><?= get_the_excerpt( $post[0]->ID ) ?></p>
                <p class="link">READ MORE<span><i><?php get_template_part( 'svg-template/svg', 'arrow' ) ?></i></span></p>
            </a>

      </div>

      <a href="<?= site_url( '/market-commentary' ) ?>" class="btn btn-latest">VIEW ALL COMMENTARY</a>

    </div>
  </div>
</section>