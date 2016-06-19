<?php
/**
 * The main functions file
 *
 * @package WordPress
 * @subpackage DecobootsTheme
 * @since Decoboots Theme 1.0.0
 */


include( 'inc/assets.php' );
include( 'inc/loadMore.php' );
include( 'inc/exampleData.php' );

register_nav_menus(array(
    'main-menu' => __('Menu primaire', 'menu-primaire')
));
function truncate_text($text, $nbr) {
  return substr($text, 0, $nbr) . '...';
}

function get_count($type){
  $args = array(
        'post_type'  => $type,
        'suppress_filters' => false,
        'posts_per_page' => -1
      );
  $my_query = new WP_Query($args);
  return $my_query->post_count;
}
