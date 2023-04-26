<?php
/**
 * Index filter
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 
?>
<section class="index-filter" id="library">

  <div class="index-filter__wrapper">

    <div class="index-filter__inner content-block">

    <?php  if (!isset($_GET['search_year']) && !isset($_GET['search_month'])) : ?>
      <h2>Market Commentary Library</h2>

    <?php else : ?>

      <h2>Library Search Result</h2>

    <?php endif; ?>

      <div class="index-nav">
        <form action="<?= esc_url( site_url( '/market-commentary' )); ?>" method="get">
          <label style="display:none;" for="search_year">Search by Year and Month:</label>

          <select name="search_month" id="search_month">
              <?php 
              $months = array(
                  '01' => 'January',
                  '02' => 'February',
                  '03' => 'March',
                  '04' => 'April',
                  '05' => 'May',
                  '06' => 'June',
                  '07' => 'July',
                  '08' => 'August',
                  '09' => 'September',
                  '10' => 'October',
                  '11' => 'November',
                  '12' => 'December',
              );
              foreach ($months as $value => $label) {
                  $selected = ($value == $_GET['search_month']) ? 'selected' : '';
                  echo "<option value='" . $value . "' " . $selected . ">" . $label . "</option>";
              }
              ?>
          </select>

          <select name="search_year" id="search_year">
              <?php 
              $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts ORDER BY post_date DESC");
              foreach ($years as $year) {
                  $selected = ($year == $_GET['search_year']) ? 'selected' : '';
                  echo "<option value='" . $year . "' " . $selected . ">" . $year . "</option>";
              }
              ?>
          </select>
   
          <input type="submit" value="Search">
        </form>

      </div>

    </div>

  </div>

</section>