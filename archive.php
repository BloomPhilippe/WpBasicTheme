<?php
get_header();
?>
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
            <p>
                <a href="#" class="btn btn-primary">Main call to action</a>
                <a href="#" class="btn btn-secondary">Secondary action</a>
            </p>
        </div>
    </section>
    <div class="album text-muted">
        <div class="container">
            <div class="row">
                <?php
                while (have_posts()) : the_post();
                    $picture_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
                    $picture = $picture_src === false ? get_template_directory_uri().'/img/slide.jpg' : $picture_src[0];
                    ?>
                    <div class="col-lg-4 col-post">
                        <img data-src="holder.js/100px280/thumb" alt="100%x280" src="<?php echo $picture ?>" data-holder-rendered="true" style="height: 280px; width: 100%; display: block;">
                        <h3><?php echo get_the_title(); ?></h3>
                        <p><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>
                        <p><a class="btn btn-secondary" href="<?php echo get_permalink() ?>" role="button"><?php _e( 'Voir détails', 'wpbasictheme' ) ?> »</a></p>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>
            <?php
            the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( '<span aria-hidden="true">&laquo;</span>', 'textdomain' ),
                'next_text' => __( '<span aria-hidden="true">&raquo;</span>', 'textdomain' ),
                'screen_reader_text' => ' ',
            ) );
            ?>

        </div>
    </div>
<?php get_footer(); ?>