<?php
/**
 * Contact
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $title = get_field('contant_banner_title');
 $phone = get_field('contact_banner_phone');
 $email = get_field('contact_banner_email');

?>

<section class="contact-banner">
  <div class="contact-banner__inner">
    <div class="content-block">
        <h3><?php echo $title ?></h3>

        <div class="contact-banner__grid">
          <a href="<?php echo $phone ?>" class="btn contact">
            <i><?php get_template_part( 'svg-template/svg', 'phone' ) ?></i>
            TELEPHONE
          </a>
          <a href="<?php echo $email ?>" class="btn contact">
            <i><?php get_template_part( 'svg-template/svg', 'mail' ) ?></i>
            EMAIL
          </a>
        </div>
    </div>
  </div>
</section>