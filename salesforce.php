<?php
/**
 * Template Name: Salesforce
 */
?>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-push-1">
			<?php while (have_posts()) : the_post(); ?>
  		  <?php get_template_part('templates/content', 'page'); ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/parsley.js/2.1.2/parsley.min.js"></script>
<script type="text/javascript">

  function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
  }

  if (getParameterByName("success") == "true"){
    $(".thanks").css("display", "block").delay(2000).fadeOut(500)
  }

	$('#sf-form').parsley();

</script>