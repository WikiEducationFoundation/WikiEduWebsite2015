<div class="row">
  <div class="col-sm-6 col-sm-push-1">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <header style="display:none;">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <div class="entry-meta">
        <?php get_template_part('templates/entry-meta'); ?>
        </div>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </footer>
      <?php comments_template('/templates/comments.php'); ?>
    </article>
  <?php endwhile; ?>
  
  </div>
</div>
