<?php use Roots\Sage\Titles; ?>
<?php 
if(has_post_thumbnail()) {
  $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
  } 
?>
<div class="hero" style="background-image:url(<?= $featured_image; ?>);background-position: 50% 0%;">
  <?= the_post_thumbnail(); ?>
  <div class="hero-gradient"></div>
  <div class="hero-gradient hero-gradient--white"></div>
  <div class="hero-inner">
    <div class="hero-inner-content">
      <div class="hero-inner-content__cell">
        <h1><?= Titles\title(); ?></h1>
      </div>
    
    </div>
  </div>
</div>