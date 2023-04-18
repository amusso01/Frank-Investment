<?php
/**
 * Page Full banner
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $title = get_field('title_banner');
 $content = get_field('content_banner');
?>

<section class="full-width-banner" >

  <div class="full-width-banner__wrapper">

    <div class="full-width-banner__inner content-block">

      <h2><?php echo $title ?></h2>
      <p class="content"><?php echo $content ?></p>
 
    </div>

  </div>

</section>
