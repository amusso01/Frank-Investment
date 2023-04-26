<?php
/**
 * Index Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

  $id =get_queried_object()->ID;

  $bg = get_the_post_thumbnail_url($id);
  $links = get_field('side_links', $id);

 
?>

<section class="hero index__hero" >

  <div class="index__wrapper" style="background-image:url(<?php echo $bg ?>);">

    <div class="index__inner content-block">

      <div class="grid">

        <div class="title">
          <h1><?php echo get_the_title($id) ?></h1>
          <p class="subheader"><?php echo get_field('subheader', $id) ?></p>
        </div>

        <?php  if (!isset($_GET['search_year']) && !isset($_GET['search_month'])) : ?>
          <?php if($links): ?>
          <div class="links">
            <div class="link__wrapper">
              <?php foreach($links as $link) : ?>
                <div class="single-link">

                  <a href="<?php echo $link['link']['url'] ?>" target="<?php echo $link['link']['target'] ?>"><span><img src="<?php echo $link['icon'] ?>" alt="service icon"></span><?php echo $link['link']['title'] ?></a>
                  <?php get_template_part( 'svg-template/svg', 'arrow' ) ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>
        <?php else:  ?>
          <div class="links">
            <div class="link__wrapper">
                <div class="single-link">
                  <a href="#subscribe"><span><?php get_template_part( 'svg-template/svg', 'mail' ) ?></span>SUBSCRIBE</a>
                  <?php get_template_part( 'svg-template/svg', 'arrow' ) ?>
                </div>
            </div>
          </div>

        <?php endif; ?>

      </div>

    </div>

  </div>

</section>