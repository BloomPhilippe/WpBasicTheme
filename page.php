<?php
/**
 * Template Name: contact
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
	<div class="row row-content-page">
		<div class="container">
			<h3>
				<?php
				echo  get_the_title();
				?>
			</h3>
			<p class="intro">
				<?php
				echo get_the_content();
				?>
			</p>
		</div>
	</div>
	<?php
endwhile; ?>
<?php get_footer(); ?>
