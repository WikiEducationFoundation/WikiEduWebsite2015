<div class="col-sm-8 col-md-4 entry entry--preview">
   <article <?php post_class(); ?>>
      <figure></figure>
     <header>
       <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
     </header>
     <div class="entry-summary">
       <?php the_excerpt(); ?>
     </div>
     <div class="entry-meta">
     <?php get_template_part('templates/entry-meta'); ?>
     </div>
   </article>
</div>

