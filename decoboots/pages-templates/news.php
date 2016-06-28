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
    <?php
    include(locate_template('content/content-breadcrumb.php'));
    ?>
    <div class="row row-content">
        <div id="recipient" class="container">
            <?php
            get_posts_by_type('post', 3);
            ?>
        </div>
        <div class="container container-load-more">
            <button class="btn btn-default load-more" data-type="post" data-limit="3" data-page="2" data-count="<?php echo get_count('post') ?>">Load More</button>
        </div>
    </div>
    <?php
endwhile; ?>
</main>
<?php get_footer(); ?>
