<?php 
  $show_form = get_post_meta( get_the_ID(), 'show_contact_form' , true);
?>

<?php if( (is_front_page() == false) ) { ?>
<?php if( (is_home() == false) ) { ?>
<?php if( (is_single() == false) ) { ?>
<?php if( (is_search() == false) ) { ?>
<?php if( (is_category() == false) ) { ?>
<?php if( (is_archive() == false) ) { ?>
<?php if($show_form) { ?>
<div class="contact-form">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-sm-push-2">
        <h3>Get in touch with us!</h3>
        <?php if(WP_ENV == 'development') { ?>
          <form>
            <div class="input-group">
              <label for="name">Name</label>
              <input type="name" required name="name" id="name"/>
            </div>
            <div class="input-group">
              <label for="university">University</label>
              <input type="text" required name="university" id="university"/>
            </div>
            <div class="input-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email"/>
            </div>
            <div class="input-group">
              <label for="comments">What would you like help with?</label>
              <textarea name="comments" id="comments" rows="5"></textarea>
            </div>
            <input type="submit" class="btn btn-default" value="Submit" /> 
          </form>
        <?php } else { ?>
           <?php do_shortcode("[contact-form][contact-field label='Name' type='name' required='1'/][contact-field label='University' type='text' required='1'/][contact-field label='Email' type='email' required='1'/][contact-field label='What would you like help with?' type='textarea' required='1' rows='5' /][/contact-form] ");?>
        <?php } ?>  
        

      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>



