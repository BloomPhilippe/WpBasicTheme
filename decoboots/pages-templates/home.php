<?php
/**
 * Template Name: home
 *
 */

get_header();

?>

<?php while (have_posts()) :
    the_post();
    $slogans = array('test1', 'test2', 'test3');
    ?>
<div class="row row-slider">
    <img src="<?php echo get_template_directory_uri ().'/img/overlay-abstract.png'?>">
</div>
<div class="row row-slogans">
    <div class="container">
    <?php
    foreach ($slogans as $slogan):
    ?>
    <div class="col-lg-4 col-md-4 div-slogans">
        <div class="col-lg-2 col-md-2 col-icon">
            <span class="fa fa-check" aria-hidden="true"></span>
        </div>
        <div class="col-lg-10 col-md-10">
            <h4><?php echo $slogan ?></h4>
            <p>
                Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
            </p>
        </div>
    </div>
        <?php
        endforeach;
        ?>
    </div>
</div>
<div class="row row-content">
<<<<<<< HEAD
    <div class="container">
        <h3>Nos dernières actualités</h3>
        <p class="intro">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.</p>
        <?php
        global $post;
        $myposts = get_posts( array(
            'posts_per_page' => 3,
            'offset'         => 1,
            'post_type'  => 'post',
        ));
        if ( $myposts ):
            foreach ( $myposts as $post ) :
                setup_postdata( $post );
                get_template_part('content/content', 'post')
                ?>
                <?php
            endforeach;
            wp_reset_postdata();
        endif;
=======
    <div class="container container-content">
        <h1>
            <?php
            echo get_the_title();
            ?>
        </h1>
        <p>
            <?php
            echo get_the_content();
            ?>
        </p>
    </div>
    <div class="container container-lastest-news">
        <?php
        $args_for_latest = array(
            'post_type'      => 'post',
            'posts_per_page' => 3
        );
        $latest_news = get_posts( $args_for_latest );
        foreach ($latest_news as $news) :
            echo $news->post_title;
        endforeach;
        wp_reset_postdata();
>>>>>>> adbe34fe842a53932b99a910bfeddd83e4833a52
        ?>
    </div>
</div>
<div class="row row-message">
    <div class="shodow-top"></div>
    <div class="container">
        <h3>Message</h3>
        <p>
            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
        </p>
    </div>
</div>
<?php
$menu = wp_get_nav_menu_object('main-menu');
$menu_items = wp_get_nav_menu_items($menu->term_id);
?>
<div class="row row-newsletter">
    <div class="container">
        <div class="col-lg-4 col-md-4 col-sm-6 box-menu">
            <h3>Menu</h3>
            <ul>
                <?php
                $actualUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if ($menu_items !== FALSE) :
                    foreach ($menu_items as $value):
                        $class = '';
                        if ($value->url == $actualUrl) $class = 'menu__current';
                        echo '<li><a class="'.$class.'" href="' .$value->url.'">'.$value->title.'</a></li>';
                    endforeach;
                endif;
                ?>
            </ul>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 box-menu">
            <h3>Coordonnées</h3>
            <p>
                Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
            </p>
            <p>
                Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
            </p>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 box-menu">
            <h3>Newsletter</h3>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
    endwhile;
?>
<?php
    get_footer();
?>
