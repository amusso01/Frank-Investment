<?php
/**
 * Teams
 *
 * @author Andrea Musso
 * 
 * @package foundry
 **/

 $members = get_field('team_members');

?>

<section class="teams-page-section">
  <div class="content-block">
    <div class="teams-page-section__inner">
      <p class="info-blue">MEET THE FRANK INVESTMENTS</p>
      <h2><?php echo get_the_title() ?> Team</h2>

      <div class="teams-page-section__grid">
        <?php foreach($members as $member) : ?>
          <?php 
          $teamId = $member->ID;
          $teamName = $member->post_title;
          $teamRole = get_field('role', $teamId);
          $teamDescription = $member->post_content;
          $teamImageId = get_post_thumbnail_id( $teamId );
          ?>
          <div class="member"  id="js-modal" data-modal="modal-<?php echo $teamId ?>" >
            <figure>
              <img
                data-sizes="auto"
                data-srcset="<?php bml_the_image_srcset($teamImageId) ?>"
                alt="team member image"
                style="max-width: 100%; max-height: 100%;"
                class="lazyload" />
            </figure>
            <p class="name h4"><?php echo $teamName ?></p>
            <p class="role"><?php echo $teamRole ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="btn-center">
        <a href="<?php echo site_url('/the-team') ?>" class="btn">VIEW FULL TEAM</a>
      </div>
    </div>
  </div>
</section>