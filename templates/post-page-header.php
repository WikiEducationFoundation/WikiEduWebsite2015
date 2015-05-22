<?php use Roots\Sage\Titles; ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="hero-page-header">
  <div class="row">
    <div class="col-sm-6 col-sm-push-1">
      <h1><?= the_title(); ?></h1>
      <p>By <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a> on <?= the_date(); ?></p>
    </div>
  </div>
</div>
<?php endwhile; ?>
