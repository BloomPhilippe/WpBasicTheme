<?php
/**
 * Content post
 *
 * @package WordPress
 * @subpackage DecoBoots
 */
?>
<?php

    $title = get_the_title();
    $content = get_the_content();
    $picture_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
    $picture = $picture_src[0];
    $term = get_the_category();
    $link_term = get_category_link($term[0]->term_id);
    $icon = empty(get_field('icon')) ? 'icon-check' : get_field('icon');
    $color = empty(get_field('color')) ? '#ffab00' : get_field('color');
?>
<div class="col-xs-6 col-lg-3 col-md-3 box-post">
    <div class="cover">
        <img class="img-responsive" src="<?php echo $picture ?>">
    </div>
    <div class="content">
        <h4><?php echo $title ?></h4>
        <p class="text"><?php echo truncate_text($content, 150) ?></p>
        <p class="link"><a href="<?php echo get_permalink(); ?>">View details</a></p>
    </div>
    <div class="box-icon" style="background-color: <?php echo $color ?>!important;">
        <span class="<?php echo $icon?>"></span>
    </div>
</div><!--/.col-xs-6.col-lg-4-->
