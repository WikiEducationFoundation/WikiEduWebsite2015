<!-- <time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time> -->
<?php
$categories = get_the_category();
$separator = ', ';
$output = '';
if($categories){
   foreach($categories as $category) {
      $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
   }
}
?>
<p class="byline author vcard small">Posted in <?= trim($output, $separator); ?> <?= __('by', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
