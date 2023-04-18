<?php
/**
 * Cards
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $cards = get_field('cards');

?>

<section class="blue-cards">
  <div class="blue-cards__inner">
    <div class="content-block">
      <div class="blue-cards__grid">
        <?php foreach($cards as $card) : ?>
          <div class="single-blue-card">
            <?php if($card['card_url']) :?>
              <a href="<?php echo $card['card_url'] ?>">
            <?php endif; ?>
            <div class="single-blue-card__inner">
              <p class="h5"><?php echo $card['card_text'] ?></p>
            </div>
            <?php if($card['card_url']) :?>
              </a>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>