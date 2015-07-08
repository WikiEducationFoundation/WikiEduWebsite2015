<?php get_template_part('templates/contact-form'); ?>
<?php
  function custom_field($field) {
    global $post;
    return get_post_meta($post->ID, $field, true);
  }
  $is_not_brochure_page = !(custom_field('page_title_class') === 'brochure');
  $is_brochure_page = !$is_not_brochure_page;
?>
<?php if ($is_not_brochure_page) { ?>
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
<?php } ?>

<?php if ($is_brochure_page) { ?>
  <div class="footer-img-w-link" style="background:linear-gradient(rgba(0,0,0,0.24), rgba(0,0,0,0.24)),url('<?php _e(custom_field('footer_image_url')) ?>') 50% 90% no-repeat; background-size: 100% auto">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 brochure-footer-inner">
            <h1><?php _e(custom_field('footer_text')) ?></h1>
            <a href="<?php _e(custom_field('footer_link')) ?>">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
