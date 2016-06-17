<?php
/**
 * Template Name: home2
 *
 */

get_header();

?>

<?php while (have_posts()) :
    the_post();
    ?>
    <h1>HOME2</h1>
    <?php
endwhile; ?>
</main>
<?php get_footer(); ?>
