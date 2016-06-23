<?php
/**
 * The main functions file
 *
 * @package WordPress
 * @subpackage DecobootsTheme
 * @since Decoboots Theme 1.0.0
 */


include('inc/assets.php');
include('inc/loadMore.php');
include('inc/exampleData.php');
include('inc/option-page.php');
include('custom-post-type/type-service.php');

register_nav_menus(array(
    'main-menu' => __('Menu primaire', 'menu-primaire')
));

function truncate_text($text, $nbr)
{
    return substr($text, 0, $nbr) . '...';
}

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

function get_menu($name, $display, $class = null)
{
    $menu = wp_get_nav_menu_object($name);
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    include(locate_template('content/content-menu-' . $display . '.php'));
}