<?php
/**
 * Content service
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
?>

<div class="col-lg-4 col-md-4 div-slogans">
    <div class="col-lg-2 col-md-2 col-icon">
        <span class="fa fa-check" aria-hidden="true"></span>
    </div>
    <div class="col-lg-10 col-md-10">
        <h4><?php echo $title ?></h4>
        <p>
            <?php echo truncate_text($content, 50) ?>
        </p>
    </div>
</div>
