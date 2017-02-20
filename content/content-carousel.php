<?php
$args = array(
    'post_type'  => 'slide',
    'suppress_filters' => false,
    'posts_per_page' => 5
);

query_posts( $args );
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <?php
        $first = true;
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                $picture_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
                $picture = $picture_src === false ? get_template_directory_uri().'/img/slide.jpg' : $picture_src[0];
                $active = $first ? 'active' : '';
        ?>

                <div class="carousel-item <?php echo $active ?>" style="background-image: url(<?php echo $picture ?>)">
                    <div class="container">
                        <div class="carousel-caption d-none d-md-block text-left">
                            <h1><?php echo get_the_title(); ?></h1>
                            <p><?php echo get_the_content(); ?></p>
                        </div>
                    </div>
                </div>
        <?php
                $first = false;
            endwhile;
            wp_reset_postdata();
        else:
        ?>
            <div class="carousel-item active" style="background-image: url(<?php echo get_template_directory_uri().'/img/slide.jpg' ?>)">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <h1>Example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url(<?php echo get_template_directory_uri().'/img/slide.jpg' ?>)">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <h1>Example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
        <?php
        endif;
        ?>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>