<?php

class ExampleData
{

    function __construct()
    {

        add_action('admin_menu', array($this, 'init'));
        add_action('wp_ajax_ajax_insertpost', array($this, 'insertPostWithCategory'));
        add_action('wp_ajax_nopriv_ajax_insertpost', array($this, 'insertPostWithCategory'));
    }

    public function init()
    {
        add_options_page("Generate posts examples", 'Generate posts examples', 'administrator', 'example-data-post.php', array($this, 'display_admin_page_post'));
        add_options_page("Generate services examples", 'Generate services examples', 'administrator', 'example-data-service.php', array($this, 'display_admin_page_service'));
        add_options_page("Generate pages examples", 'Generate pages examples', 'administrator', 'example-data-page.php', array($this, 'display_admin_page_page'));
    }

    public function display_admin_page_post(){
        $this->insertPostWithCategory();
        echo '<h3>Create Succcessful</h3>';
    }

    public function display_admin_page_service(){
        $this->insertServices();
        echo '<h3>Create Succcessful</h3>';
    }

    public function display_admin_page_page(){
        $this->insertPageWithTemplate();
        echo '<h3>Create Succcessful</h3>';
    }

    function insertPostWithCategory()
    {
        $cat_1 = wp_insert_term(
            'Catégorie 1',
            'category',
            array(
                'description' => 'Categorie test',
                'slug' => 'categorie-1',
            )
        );
        $cat_2 = wp_insert_term(
            'Catégorie 2',
            'category',
            array(
                'description' => 'Categorie test',
                'slug' => 'categorie-2',
            )
        );
        $cat_3 = wp_insert_term(
            'Catégorie 3',
            'category',
            array(
                'description' => 'Categorie test',
                'slug' => 'categorie-3',
            )
        );

        for ($x = 0; $x <= 10; $x++) {
            $this->insertPostByType('Post' . $x, 'post', $cat);
        }
    }

    function insertServices()
    {
        for ($x = 0; $x <= 10; $x++) {
            $this->insertPostByType('Service' . $x, 'service', null);
        }
    }

    function insertPostByType($name, $type, $cat = null){
        $my_post = array(
            'post_title' => $name,
            'post_content' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.',
            'post_status' => 'publish',
            'post_type' => $type,
            'post_author' => 1,
        );

        if (!is_null($cat)){
            $my_post['post_category'] = $cat;
        }

        $newId = wp_insert_post($my_post);
        $this->insertImg($newId);
    }

    function insertPageWithTemplate()
    {
        $pages = array('home', 'home2', 'contact', 'onepage', 'news');
        $newPagesID = array();

        foreach ($pages as $page) {
            $my_page = array(
                'post_title' => $page,
                'post_content' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.',
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_author' => 1
            );

            $newPagesID[$page] = wp_insert_post($my_page);
        }

        foreach ($newPagesID as $key => $id) {
            update_post_meta($id, '_wp_page_template', 'templates/' . $key . '.php');
            if($key == 'home'){
                $this->setForntPage($id);
            }
        }

        $this->createMenu();
    }

    function insertImg($post_id){
        $image_url = get_template_directory_uri() . '/img/eagle.jpg';
        $upload_dir = wp_upload_dir();
        $image_data = file_get_contents($image_url, true);
        $filename = basename($image_url);
        if(wp_mkdir_p($upload_dir['path'])){
            $file = $upload_dir['path'] . '/' . $filename;
        }
        else   {
            $file = $upload_dir['basedir'] . '/' . $filename;
        }
        file_put_contents($file, $image_data);
        $wp_filetype = wp_check_filetype($filename, null );
        $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title' => sanitize_file_name($filename),
            'post_content' => '',
            'post_status' => 'inherit'
        );
        $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
        $res1= wp_update_attachment_metadata( $attach_id, $attach_data );
        $res2= set_post_thumbnail( $post_id, $attach_id );
    }

    function setForntPage($id){
        update_option( 'page_on_front', $id );
        update_option( 'show_on_front', 'page' );
    }

    function createMenu(){
        $menu_name = 'main-menu';
        $menu_exists = wp_get_nav_menu_object( $menu_name );
        if( !$menu_exists){
            $menu_id = wp_create_nav_menu($menu_name);
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' =>  __('Home'),
                'menu-item-classes' => 'home',
                'menu-item-url' => home_url( '/' ),
                'menu-item-status' => 'publish')
            );

            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' =>  __('Page 1'),
                'menu-item-classes' => 'page-1',
                'menu-item-url' => home_url( '/' ),
                'menu-item-status' => 'publish')
            );

            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' =>  __('Page 2'),
                'menu-item-classes' => 'page-2',
                'menu-item-url' => home_url( '/' ),
                'menu-item-status' => 'publish')
            );
        }
    }

}

$inst_data = new ExampleData();