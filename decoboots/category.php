<?php
/**
 * Page Archive
 *
 * @package WordPress
 * @subpackage DecobootsTheme
 * @since Decoboots Theme 1.0.0
 */

get_header();
?>
<?php
$args = array(
        'post_type'  => 'post',
        'suppress_filters' => false,
        'paged' => 1,
        'posts_per_page' => 3
      );
query_posts( $args );
?>
<div id="recipient" class="row">
<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		get_template_part( 'content/content', 'post' );
	endwhile;
?>
</div><!--/row-->
<button class="btn btn-default load-more" data-type="post" data-limit="6" data-page="1" >Load More</button>
<?php
else :
	get_template_part( 'content', 'none' );
endif;
?>
<?php get_footer(); ?>
