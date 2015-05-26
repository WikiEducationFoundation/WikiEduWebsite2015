<?php get_template_part('templates/contact-form'); ?>
<footer class="content-info" role="contentinfo">
  <div class="container">
    

    <div class="row">
       <div class="col-md-6 footer-column">
        <?php dynamic_sidebar('sidebar-footer'); ?>
       </div>

       <div class="col-md-2 footer-column">
         <?= get_template_part('templates/footer-contact'); ?>
       </div>
    </div>
  </div>
</footer>
