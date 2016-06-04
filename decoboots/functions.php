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

/*
 * Si tu désires des données factices, décommente la ligne ci-dessous, rafraichis ton navigateur sur une page du site et ccomment à nouveau la ligne.
 * Si tu ne commentes pas à nouveau la ligne, le script d'import des données va s'executer à nouveau
 */
//include( 'inc/exempleData.php' );

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
