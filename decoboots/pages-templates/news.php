<?php
/**
 * Template Name: news
 *
 */

get_header();

?>

<?php while (have_posts()) :
    the_post();
    ?>
    <h1>NEWS</h1>
    <?php
endwhile; ?>
</main>
<?php get_footer(); ?>
