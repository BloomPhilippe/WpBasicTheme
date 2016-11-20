<?php
get_header();
?>
    <div class="row row-content">
        <div id="recipient" class="container">
            <?php
            while (have_posts()) : the_post();
                get_template_part('content/content', 'post');
            endwhile;
            ?>
        </div>
        <div class="container container-load-more">
            <button class="btn btn-default load-more" data-type="post" data-limit="3" data-page="2"
                    data-count="<?php echo get_count('post') ?>">Load More
            </button>
        </div>
    </div>
<?php get_footer(); ?>