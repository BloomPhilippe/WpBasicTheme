<?php
/**
 * Template Name: contact
 *
 */

get_header();

?>

<?php while (have_posts()) :
    the_post();
    ?>
    <h1>CONTACT</h1>
    <?php
endwhile; ?>
</main>
<?php get_footer(); ?>
