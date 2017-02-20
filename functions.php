<?php

include('inc/config.php');
include('inc/custom-post-slide.php');
include('inc/assets.php');
include('inc/loadMore.php');
include('inc/contactForm.php');
include('inc/exampleData.php');

function get_count($type)
{
    $args = array(
        'post_type' => $type,
        'suppress_filters' => false,
        'posts_per_page' => -1
    );
    $my_query = new WP_Query($args);
    return $my_query->post_count;
}

function get_posts_by_type($type, $limit)
{
    global $post;
    $myposts = get_posts(array(
        'posts_per_page' => $limit,
        'offset' => 1,
        'post_type' => $type,
    ));
    if ($myposts):
        foreach ($myposts as $post) :
            setup_postdata($post);
            get_template_part('content/content', $type)
            ?>
            <?php
        endforeach;
        wp_reset_postdata();
    endif;
}