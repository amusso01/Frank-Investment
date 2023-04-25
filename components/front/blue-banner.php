<?php
/**
 * Page Full banner
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $title = get_field('blue_title');
 $content = get_field('blue_content');
 $btn = get_field('blue_button');
?>

<section class="full-width-banner" >

  <div class="full-width-banner__wrapper">

    <div class="full-width-banner__inner content-block">

      <h2><?php echo $title ?></h2>
      <p class="content"><?=  $content ?></p>
      <a href="<?= $btn['url'] ?>" class="btn"><?= $btn['title'] ?></a>
 
    </div>

  </div>

</section>