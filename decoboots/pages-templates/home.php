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
    <div class="col-lg-4 col-md-4">
        <div class="col-lg-2 col-md-2 col-icon">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
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
<div class="row row-newsletter">

</div>
<?php
    endwhile;
?>
<?php
    get_footer();
?>
