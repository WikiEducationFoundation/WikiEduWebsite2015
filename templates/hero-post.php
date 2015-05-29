<?php while (have_posts()) : the_post(); ?>
<?php 
  $is_hero_image = false;
  $hero_image = '';
  $hero_class = 'no-image';
  if(get_field('hero_image')) {
    $hero_image = get_field('hero_image');
    $hero_class = '';
  }   
?>
<div class="hero <?= $hero_class; ?>" style="background-image:url(<?= $hero_image; ?>);background-position: 50% 0%;">
  <div class="hero-gradient"></div>
  <div class="hero-gradient hero-gradient--white"></div>
  <div class="hero-inner">
    <div class="hero-inner-content">
      <div class="hero-inner-content__cell">
        <div class="container">
          <div class="row">
          <div class="col-sm-6 col-sm-push-1">
            <h1><?= the_title(); ?></h1>
            <?php if(is_single()) { ?>
            <p>By <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a> on <?= get_the_date(); ?></p>
            <?php  } ?>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php rewind_posts(); ?>