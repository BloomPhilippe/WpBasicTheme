<?php
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'  => 'General Settings',
        'menu_title'  => 'General Settings',
        'menu_slug'   => 'general-settings',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Social Network',
        'menu_title'  => 'Social Network',
        'parent_slug' => 'general-settings',
    ));
}