<?php
/**
 * Page Full banner
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $title = get_field('bg_image_title');
 $content = get_field('bg_image_content');
 $btn = get_field('bg_image_button');
 $image = get_field('bg_image');
?>

<section class="bg-banner" >

  <div class="bg-banner__wrapper" style="background-image:url(<?= $image ?>)">

    <div class="bg-banner__inner content-block">

      <h2><?php echo $title ?></h2>
      <div class="content"><?=  $content ?></div>
      <a href="<?= $btn['url'] ?>" class="btn"><?= $btn['title'] ?></a>
 
    </div>

  </div>

</section>