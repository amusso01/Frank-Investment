<?php
   $teamId = get_the_ID();
   $teamName = get_the_title();
   $teamRole = get_field('role', $teamId);
   $teamDescription = get_the_content();
   $teamImageId = get_post_thumbnail_id( $teamId );
?>

<div class="member"  id="jsMember_<?php echo $teamId ?>" data-modal="member<?php echo $teamId ?>" >
  
  <figure>
    <img
      data-sizes="auto"
      data-srcset="<?php bml_the_image_srcset($teamImageId) ?>"
      alt="team member image"
      style="max-width: 100%; max-height: 100%;"
      class="lazyload" />
  </figure>
  <p class="name h4"><?= $teamName ?></p>
  <p class="role"><?= $teamRole ?></p>

  <!-- MODAL -->
  <div class="memberModal" id="jsModal_<?php echo $teamId ?>" data-modal="modal<?php echo $teamId ?>" >
    <div class="content-block">
      <div class="modal__inner">
        <div class="memberModal-grid">
          <div class="fixed-info">
            <h2><?=  $teamName  ?></h2>
            <p class="role"><?= $teamRole ?></p>
          </div>
          <div class="scrollable-info">
            <div class="closeModal">
              <button class="closeModalBtn">
              <svg xmlns="http://www.w3.org/2000/svg" width="14.547" height="14.547" viewBox="0 0 14.547 14.547">
                <g id="Group_118" data-name="Group 118" transform="translate(9108.207 4720.207)">
                  <line id="Line_52" data-name="Line 52" x1="13.133" y2="13.133" transform="translate(-9107.5 -4719.5)" fill="none" stroke="#ffffff" stroke-width="2"/>
                  <line id="Line_51" data-name="Line 51" x2="13.133" y2="13.133" transform="translate(-9107.5 -4719.5)" fill="none" stroke="#ffffff" stroke-width="2"/>
                </g>
              </svg>
              </button>
            </div>
            <div class="modal-content"> 
              <?= get_the_content( $teamId ) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>