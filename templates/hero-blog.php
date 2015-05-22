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
    <div class="hero-slide" style="position:relative;z-index:1;" >
      <div class="hero-slide-image" style="background:transparent url(<?= $large_image_url[0]; ?>) no-repeat center top; background-size: 100% auto;position:absolute;top:0;left:0;width:100%;height:100%;z-index:1;"></div>
      <div class="hero-gradient" style="z-index:2;"></div>
      <div class="hero-slide-content" style="z-index:10;position:absolute;bottom:40px;width: 100%;text-align:center;color:white;padding: 0 20px;">
        <h1 class="hero-slide-title" style="text-decoration:underline;margin-bottom: 0;"><a href="<?= the_permalink() ?>" style="color:white;"><?= the_title() ?></a></h1>
        <p style="color:white; margin: 0;">By <?= get_the_author(); ?> on <?= the_date(); ?></p>
      </div>
    </div>
  <?php endwhile; ?>
  </div>
</div>