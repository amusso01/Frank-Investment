<?php
   $teamId = get_the_ID();
   $teamName = get_the_title();
   $teamRole = get_field('role', $teamId);
   $teamDescription = get_the_content();
   $teamImageId = get_post_thumbnail_id( $teamId );
?>

<div class="member"  id="js-modal-<?php echo $teamId ?>" data-modal="modal-<?php echo $teamId ?>" >
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