
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="page-content">
<!--    <div class="col-xs-8 col-sm-8 col-md-6 col-md-push-1"> -->
      <?php get_template_part('templates/content', 'page'); ?>
<!--    </div> -->
  </div>
<?php endwhile; ?>

  
