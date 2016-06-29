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
$icon = empty(get_field('icon')) ? 'icon-check' : get_field('icon');
$color = empty(get_field('color')) ? '#ffab00' : get_field('color');
?>

<div class="col-lg-4 col-md-4 service">
    <div class="col-lg-2 col-md-2 col-icon" style="background-color: <?php echo $color ?>!important;">
        <span class="<?php echo $icon?>" aria-hidden="true"></span>
    </div>
    <div class="col-lg-10 col-md-10">
        <h4><?php echo $title ?></h4>
        <p>
            <?php echo truncate_text($content, 50) ?>
        </p>
    </div>
</div>
