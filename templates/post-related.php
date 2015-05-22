<?php
$categories = get_the_category();
if($categories){
  $cat_ids = array();
  foreach($categories as $category) {
    $cat_ids[] = $category->term_id;
  }
  $args = array(
     'posts_per_page'      => 2,
     'cat'                => implode(",", $cat_ids)
  );
  $related = new WP_Query( $args );
}
?>
<div class="recent-posts">
   <div class="container">
      <div class="row">
         <div class="col-sm-6 col-sm-push-1">
            <h2>Related Posts</h2>
            <div class="row">
               <?php $count = 0; ?>
               <?php while ($related->have_posts()) : $related->the_post(); ?>
                  <div class="col-sm-4">
                     <a class="recent-post" href="<?= the_permalink(); ?>">
                        <h3 class="recent-post__title"><?= the_title(); ?></h3>
                        <p class="recent-post__author"><?php the_author(); ?></p>
                     </a>
                  </div>
                 <?php if($count % 2 == 1) { echo("</div><div class='row'>");} ?>
                 <?php $count++; ?>
               <?php endwhile; ?>
            </div>
         </div>
      </div>
   </div>
</div>
