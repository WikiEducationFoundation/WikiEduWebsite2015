<div class="col-sm-8 col-md-4 entry entry--preview">
   <article <?php post_class(); ?>>
    <a href="<?= get_permalink() ?>">
      <?php 
      $image_id = has_post_thumbnail() ? get_post_thumbnail_id( $post->ID ) : 4978;
      $large_image_url = wp_get_attachment_image_src( $image_id, 'large' );
      echo '<figure style="background-image:url('.$large_image_url[0].');"></figure>';
      ?>
     <header>
       <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
     </header>
     <div class="entry-summary">
       <?php the_excerpt(); ?>
     </div>
     <div class="entry-meta">
     <?php get_template_part('templates/entry-meta'); ?>
     </div>
   </article>
  </a>
</div>

