<?php
/**
 * Service benefit
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $benefitFirst = get_field('services_benefits_first_row');
 $benefitSecond = get_field('services_benefits_second_row');
 $benefitThird = get_field('services_benefits_third_row');
?>


<section class="investment-service__service-benefits">

  <div class="investment-service__service-benefits-block" id="<?php echo $benefitFirst['anchor_tag'] ?>">
    
    <div class="investment-service__service-benefits-block__grid first">

        <div class="services-benefits__service">

          <h2><?php echo $benefitFirst['service_title'] ?></h2>
          <p class="content"><?php echo $benefitFirst['service_content'] ?></p>

        </div>

        <div class="services-benefits__benefits">
          <div class="serives-benefits__first-row">
            <h2><?php echo $benefitFirst['benefit_title'] ?></h2>
              <?php foreach ($benefitFirst['benefit_content'] as $benefit) : ?>
                <p class="list-benefit"><span><?php get_template_part( 'svg-template/svg', 'plus' ) ?></span><span class="list-text"><?php echo $benefit['single_benefit'] ?></span></p>
              <?php endforeach; ?>
          </div>
          <div class="serives-benefits__second-row">
            <h2><?php echo $benefitFirst['benefit_second_title'] ?></h2>
              <?php foreach ($benefitFirst['benefit_second_content'] as $benefit) : ?>
                <p class="list-benefit"><span><?php get_template_part( 'svg-template/svg', 'plus' ) ?></span><span class="list-text"><?php echo $benefit['single_benefit'] ?></span></p>
              <?php endforeach; ?>
          </div>
        </div>

    </div>

  </div>

  <div class="investment-service__service-benefits-block" id="<?php echo $benefitSecond['anchor_tag'] ?>">
    
    <div class="investment-service__service-benefits-block__grid second" >

        <div class="services-benefits__service">

          <h2><?php echo $benefitSecond['service_title'] ?></h2>
          <p class="content"><?php echo $benefitSecond['service_content'] ?></p>

        </div>

        <div class="services-benefits__benefits">
          <div class="serives-benefits__first-row">
            <h2><?php echo $benefitSecond['benefit_title'] ?></h2>
              <?php foreach ($benefitSecond['benefit_content'] as $benefit) : ?>
                <p class="list-benefit"><span><?php get_template_part( 'svg-template/svg', 'plus' ) ?></span><span class="list-text"><?php echo $benefit['single_benefit'] ?></span></p>
              <?php endforeach; ?>
          </div>
          <div class="serives-benefits__second-row">
              <h2><?php echo $benefitSecond['benefit_second_title'] ?></h2>
              <?php foreach ($benefitSecond['benefit_second_content'] as $benefit) : ?>
                <p class="list-benefit"><span><?php get_template_part( 'svg-template/svg', 'plus' ) ?></span><span class="list-text"><?php echo $benefit['single_benefit'] ?></span></p>
              <?php endforeach; ?>
          </div>
        </div>

    </div>

  </div>


  <div class="investment-service__service-benefits-block" id="<?php echo $benefitThird['anchor_tag'] ?>">
    
    <div class="investment-service__service-benefits-block__grid third" >

        <div class="services-benefits__service">

          <h2><?php echo $benefitThird['service_title'] ?></h2>
          <p class="content"><?php echo $benefitThird['service_content'] ?></p>

        </div>

        <div class="services-benefits__benefits">
          <div class="serives-benefits__first-row">
            <h2><?php echo $benefitThird['benefit_title'] ?></h2>
              <?php foreach ($benefitThird['benefit_content'] as $benefit) : ?>
                <p class="list-benefit"><span><?php get_template_part( 'svg-template/svg', 'plus' ) ?></span><span class="list-text"><?php echo $benefit['single_benefit'] ?></span></p>
              <?php endforeach; ?>
          </div>
        </div>

    </div>

  </div>


</section>