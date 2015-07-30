<?php use Roots\Sage\Titles; ?>
<?php
$hero_class = 'no-image';
$featured_image = '';
if(has_post_thumbnail()) {
  $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  $hero_class = '';
}

if (get_post_meta($post->ID, 'image_focal_point', true)) {
  $image_focal_point = get_post_meta($post->ID, 'image_focal_point', true);
} else {
  $image_focal_point = 'middle';
}

$positions = array(
  'top'    => '25%',
  'middle' => '50%',
  'bottom' => '75%'
);

$css_position = $positions[$image_focal_point];

?>
  <div class="hero <?= $hero_class?>" style="background-image:url(<?= $featured_image; ?>);background-position: 0 <?= $css_position ?>">
  <?= the_post_thumbnail(); ?>
  <div class="hero-gradient"></div>
  <div class="hero-gradient hero-gradient--white"></div>
  <div class="hero-inner">
    <div class="hero-inner-content">
      <div class="hero-inner-content__cell">
        <div class="container">
          <div class="row">
            <div class="col-sm-8">
              <h1><?= Titles\title(); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
