

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <div class="page-content row">
   <div class="col-sm-6 col-sm-push-1">

    <div class="toc-block">
      <h3>Table of Contents</h3>

        <ul>
          <li>1. <a href="#">Subject-specific handouts</a></li>
          <li>2. <a href="#">Classroom handouts</a></li>
          <li>3. <a href="#">Selecting article topics</a></li>
          <li>4. <a href="#">Course pages</a></li>
        </ul>
    
  
        <ul>
          <li>5. <a href="#basics">Learn the basics</a></li>
          <li>6. <a href="#">Assignment planning</a></li>
          <li>7. <a href="#">Motivating students</a></li>
          <li>8. <a href="#">Teaching tools</a></li>
        </ul>
     
    </div>
      <?php get_template_part('templates/content', 'page'); ?>
   </div>
  </div>
<?php endwhile; ?>
  
