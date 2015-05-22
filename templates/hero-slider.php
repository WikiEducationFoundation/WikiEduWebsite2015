<?php
$args = array(
   'posts_per_page'      => 4,
   'nopaging'            => true
);
$slider_query = new WP_Query( $args ); ?>

<div class="hero">
  <div class="hero-slider">
  <?php while ($slider_query->have_posts()) : $slider_query->the_post(); ?>
    <?php  $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );?>
    <div class="hero-slide" style="background:transparent url(<?= $large_image_url[0]; ?>) no-repeat top center; background-size: 100% auto;">
      <?= the_post_thumbnail(); ?>
      <h2><?= the_title() ?></h2>
    </div>
  <?php endwhile; ?>
  </div>
</div>