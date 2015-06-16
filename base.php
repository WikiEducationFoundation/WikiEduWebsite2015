<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <nav class="visible-xs mobile-nav">
      <a class="mobile-nav-close" href="#">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
      </a>
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'list-unstyled']);
        endif;
        ?>
  
    </nav>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
      if(is_single()) {
         get_template_part('templates/hero', 'post');
      }
      else if (is_home()) {
        get_template_part('templates/hero', 'blog');
      }
      else if (is_search()) {
      }
      else{
         get_template_part('templates/hero');
      }
     
    ?>

    <div class="wrap" role="document">
      <div class="content relative">
        <?php include Wrapper\template_path(); ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php 
      if(is_single()){
        get_template_part('templates/post', 'related');
      }
      else {
        get_template_part('templates/recent');
      }
    ?>


    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
