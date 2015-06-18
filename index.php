<div class="container">

<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/blog-header'); ?>


<div class="page-content">
   <div class="row">
   <?php $count = 0; ?>
   <?php while (have_posts()) : the_post(); ?>
     <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
     <?php if($count % 2 == 1) { echo("</div><div class='row'>");} ?>
     <?php $count++; ?>
   <?php endwhile; ?>
   </div>
</div>

<?php the_posts_navigation(); ?>

</div>
