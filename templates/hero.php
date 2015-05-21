<?php 
if(has_post_thumbnail()) {
  $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
  } 
?>
<div class="hero" style="background:whitesmoke url(<?= $featured_image; ?>) no-repeat center center; background-size: cover;">

</div>