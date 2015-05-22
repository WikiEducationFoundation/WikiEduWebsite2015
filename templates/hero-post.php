<?php while (have_posts()) : the_post(); ?>
<?php 
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
  $thumb_url = $thumb_url_array[0];
?>
<div class="hero" style="background-image:url(<?= $thumb_url ?>);background-position: 50% 0%;">
  <div class="hero-gradient"></div>
  <div class="hero-inner">
    <div class="hero-inner-content">
      <div class="hero-inner-content__cell">
        <h1><?= the_title(); ?></h1>
        <?php if(is_single()) { ?>
        <p>By <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a> on <?= the_date(); ?></p>
        <?php  } ?>
      </div>
    
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php rewind_posts(); ?>