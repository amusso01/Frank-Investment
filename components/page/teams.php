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
           
          <div class="member modalTeamMember"  id="jsMember_<?php echo $teamId ?>" data-modal="member<?php echo $teamId ?>" > 
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

              <!-- MODAL -->
            <div class="memberModal" id="jsModal_<?php echo $teamId ?>" data-member="modal<?php echo $teamId ?>" >
              <div class="content-block">
                <div class="modal__inner">
                  <div class="memberModal-grid">
                    <div class="fixed-info">
                      <h2><?=  $teamName  ?></h2>
                      <p class="role"><?= $teamRole ?></p>
                    </div>
                    <div class="scrollable-info">
                      <div class="closeModal">
                        <button class="closeModalBtn" data-close="modal<?php echo $teamId ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.547" height="14.547" viewBox="0 0 14.547 14.547">
                          <g id="Group_118" data-name="Group 118" transform="translate(9108.207 4720.207)">
                            <line id="Line_52" data-name="Line 52" x1="13.133" y2="13.133" transform="translate(-9107.5 -4719.5)" fill="none" stroke="#ffffff" stroke-width="2"/>
                            <line id="Line_51" data-name="Line 51" x2="13.133" y2="13.133" transform="translate(-9107.5 -4719.5)" fill="none" stroke="#ffffff" stroke-width="2"/>
                          </g>
                        </svg>
                        </button>
                      </div>
                      <div class="modal-content"> 
                      
                        <?= $member->post_content ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="btn-center">
        <a href="<?php echo site_url('/the-team') ?>" class="btn">VIEW FULL TEAM</a>
      </div>
    </div>
  </div>
</section>