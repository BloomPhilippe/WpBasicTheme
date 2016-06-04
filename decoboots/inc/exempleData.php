<?php

$my_cat_1 = array('cat_name' => 'Catégorie 1', 'category_description' => 'A Cool Category', 'category_nicename' => 'categorie-1', 'category_parent' => '');
$my_cat_id_1 = wp_insert_category($my_cat_1);

$my_cat_2 = array('cat_name' => 'Catégorie 2', 'category_description' => 'A Cool Category', 'category_nicename' => 'categorie-2', 'category_parent' => '');
$my_cat_id_2 = wp_insert_category($my_cat_2);

$my_cat_3 = array('cat_name' => 'Catégorie 3', 'category_description' => 'A Cool Category', 'category_nicename' => 'categorie-3', 'category_parent' => '');
$my_cat_id_3 = wp_insert_category($my_cat_3);

for ($x = 0; $x <= 10; $x++) {
    $my_post = array(
        'post_title'    => 'Post'. $x,
        'post_content'  => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.',
        'post_status'   => 'publish',
        'post_type' => 'post',
        'post_author'   => 1,
        'post_category' => array($my_cat_id_3)
    );

    wp_insert_post( $my_post );
}

for ($x = 0; $x <= 10; $x++) {
    $my_post = array(
        'post_title'    => 'Page'. $x,
        'post_content'  => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.',
        'post_status'   => 'publish',
        'post_type' => 'page',
        'post_author'   => 1
    );

    wp_insert_post( $my_post );
}