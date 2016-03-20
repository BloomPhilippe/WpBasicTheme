<?php
/**
 * The main functions file
 *
 * @package WordPress
 * @subpackage DecobootsTheme
 * @since Decoboots Theme 1.0.0
 */

include( 'inc/core.php' );
$inst_theme = new DecoBoots_Theme();
include( 'inc/assets.php' );
include( 'inc/load_more.php' );

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
