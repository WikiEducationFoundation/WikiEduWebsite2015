<?php
$extra_class = '';
if(is_search()) {
$extra_class = 'active';
}

?>

<span class="glyphicon glyphicon-menu-hamburger show-mobile-menu"></span>
<div class="search-form-container <?= $extra_class ?>">
<form role="search" method="get" class="search-form--header" action="<?= esc_url(home_url('/')); ?>">
  <div class="input-group">
    <input type="search" value="<?= get_search_query(); ?>" name="s" class="form-control" placeholder="<?php _e('search', 'sage'); ?> wikiedu.org" required>
    <span class="input-group-btn">
      <button type="submit" class="search-submit "></button>
    </span>
  </div>
</form>
</div>
