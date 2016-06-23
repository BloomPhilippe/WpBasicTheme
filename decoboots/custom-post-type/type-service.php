<?php
add_action( 'init', 'cptui_register_my_cpts_service' );
function cptui_register_my_cpts_service() {
    $labels = array(
        "name" => __( 'Services', 'client' ),
        "singular_name" => __( 'Service', 'client' ),
    );

    $args = array(
        "label" => __( 'Services', 'client' ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "service",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "service", "with_front" => true ),
        "query_var" => true,

        "supports" => array( "title", "editor", "thumbnail" ),
    );
    register_post_type( "service", $args );
    
}
