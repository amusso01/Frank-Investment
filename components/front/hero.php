<?php
/**
 * HomePage Hero
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 
 $bg = get_the_post_thumbnail_url();
 $links = get_field('side_links');
?>

<section class="hero front__hero" >

  <div class="front__wrapper" style="background-image:url(<?php echo $bg ?>);">

    <div class="front__inner content-block">

      <div class="grid">

        <div class="title">
          <h1 style="display:none"><?php echo get_the_title() ?></h1>
          <h2 class="h1">Create, Build & Protect Legacy</h2>
        </div>

        <?php if($links): ?>
        <div class="links">
          <div class="link__wrapper">
            <?php foreach($links as $link) : ?>
              <div class="single-link">

                <a href="<?php echo $link['link']['url'] ?>" target="<?php echo $link['link']['target'] ?>"><span><img src="<?php echo $link['icon'] ?>" alt="service icon"></span><?php echo $link['link']['title'] ?> <br><?= $link['subheader'] ?></a>
                <?php get_template_part( 'svg-template/svg', 'arrow' ) ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endif; ?>

      </div>

    </div>

  </div>

</section>
