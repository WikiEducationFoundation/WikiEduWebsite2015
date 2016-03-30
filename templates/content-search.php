<article <?php post_class(); ?>>
  <header>
   <?php if (in_array(get_post_type(), ['post','page'])) { ?>
      <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      <p class="entry-date"><?php if (get_post_type() === 'post') { the_date(); } ?></p>
   <?php } ?>
  </header>
</article>
