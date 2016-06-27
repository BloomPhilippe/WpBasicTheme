<?php
add_action( 'init', 'cptui_register_my_cpts_message' );
function cptui_register_my_cpts_message() {
    $labels = array(
        "name" => __( 'Messages', 'client' ),
        "singular_name" => __( 'Message', 'client' ),
    );

    $args = array(
        "label" => __( 'Messages', 'client' ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "message",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "message", "with_front" => true ),
        "query_var" => true,

        "supports" => array( "title", "editor", "thumbnail" ),
    );
    register_post_type( "message", $args );

}