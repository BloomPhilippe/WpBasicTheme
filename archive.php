<?php
/**
 * Page Archive
 *
 * @package WordPress
 * @subpackage BloomPhilippeTheme
 * @since BloomPhilippe Theme 1.0.0
 */

get_header();
?>

<?php if ( have_posts() ) : ?>

	<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'content/content', 'post' );
	endwhile;

else :
	get_template_part( 'content', 'none' );

endif;
?>

<?php get_footer(); ?>
