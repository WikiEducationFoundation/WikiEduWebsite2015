
<div class="container">
  <div class="row">
     <div class="col-sm-8">
        <?php while (have_posts()) : the_post(); ?>
          
          <?php get_template_part('templates/page', 'header'); ?>

          <div class="page-content row">
           <div class="col-sm-6 col-sm-push-1">
              <?php get_template_part('templates/content', 'page'); ?>
           </div>
          </div>

        <?php endwhile; ?>
     </div>
  </div>
</div>