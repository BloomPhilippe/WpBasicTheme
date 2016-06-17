<?php
/**
 * Template Name: onepage
 *
 */

get_header();

?>

<?php while (have_posts()) :
    the_post();
    ?>
    <h1>ONEPAGE</h1>
    <?php
endwhile; ?>
</main>
<?php get_footer(); ?>
