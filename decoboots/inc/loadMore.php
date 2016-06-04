<?php
class LoadMore{

  function __construct(){
    //add Route for action
    add_action( 'wp_ajax_load_more', array($this, 'load_more') );
    add_action( 'wp_ajax_nopriv_load_more', array($this, 'load_more') );
  }

  //add callback ajax
  function load_more(){
    $type = isset($_GET['type']) ? $_GET['type'] : 'post';
    $limit = isset($_GET['limit']) ? $_GET['limit'] : 3;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $args = array(
      'post_type' => $type,
      'paged' => $page,
      'posts_per_page' => $limit
    );

    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo get_template_part( 'content/content', 'post' );
      }
    }
    exit;
  }
}


if (class_exists('LoadMore')){
  $inst_LoadMore = new LoadMore();
}
?>
