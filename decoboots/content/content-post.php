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
?>
<div class="col-xs-6 col-lg-4">
  <h2><?php echo $title ?></h2>
  <p><?php echo truncate_text($content, 100) ?></p>
  <p><a role="button" href="<?php echo get_permalink(); ?>" class="btn btn-default">View details »</a></p>
</div><!--/.col-xs-6.col-lg-4-->
