<?php get_template_part('templates/contact-form'); ?>
<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <div class="row">
       <div class="col-md-3 footer-column">
          <h3>Subscribe</h3>
          <p class="small">
             Enter your email address to subscribe and recieve notifications of new posts by email
          </p>
       </div>
       <div class="col-md-3 footer-column">
         <div id="signup-form">
            <input type="email" name="email"/>
            <button type="button" class="btn btn-default">Submit</button>
         </div>
       </div>
       <div class="col-md-2 footer-column">
         <h3>Contact</h3>
         <p class="small">
            San Francisco, CA <br/>
            <a href="mailto:contact@wikiedu.org">contact@wikiedu.org</a> <br/>
            <a href="http://www.twitter.com/WikiEducation">@WikiFoundation</a>
         </p>
       </div>
    </div>
  </div>
</footer>
