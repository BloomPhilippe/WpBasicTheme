<?php
/**
 * Template Name: Homepage
 *
 */
?>

<?php get_header(); ?>
<?php while (have_posts()) :
    the_post();


endwhile; ?>
</main>
<?php get_footer(); ?>
