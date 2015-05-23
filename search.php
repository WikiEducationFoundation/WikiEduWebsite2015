<?php get_template_part('templates/header', 'search-page'); ?>

<div class="page-content row">
   <div class="col-sm-6 col-sm-push-1">
   <?php if (!have_posts()) : ?>
     <div class="alert alert-warning">
       <?php _e('Sorry, no results were found.', 'sage'); ?>
     </div>
   <?php endif; ?>

   
   <div class="search-results">
         <?php while (have_posts()) : the_post(); ?>
           <?php get_template_part('templates/content', 'search'); ?>
         <?php endwhile; ?>
   </div>

   <?php the_posts_navigation(); ?>
   </div>
</div>