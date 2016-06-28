<?php
/**
 * Template Name: home
 *
 */

get_header();

?>

<?php while (have_posts()) :
    the_post();
    ?>
    <?php
    include(locate_template('content/content-slider-static.php'));
    ?>
<div class="row row-slogans">
    <div class="container">
    <?php
    get_posts_by_type('service', 3);
    ?>
    </div>
</div>
<div class="row row-content">
    <div class="container">
        <h3>Nos dernières actualités</h3>
        <p class="intro">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.</p>
        <?php
        get_posts_by_type('post', 3);
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
    endwhile;
?>
<?php
    get_footer();
?>
