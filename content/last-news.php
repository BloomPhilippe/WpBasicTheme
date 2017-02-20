<?php
$args = array(
	'post_type'  => 'post',
	'suppress_filters' => false,
	'posts_per_page' => 3
);

query_posts( $args );
?>

<div class="row">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			$picture_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
			$picture = $picture_src === false ? get_template_directory_uri().'/img/slide.jpg' : $picture_src[0];
			?>
			<div class="col-lg-4 col-post">
				<img class="rounded-circle" src="<?php echo $picture ?>" alt="Generic placeholder image" width="140" height="140">
				<h2><?php echo get_the_title(); ?></h2>
				<p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
				<p><a class="btn btn-secondary" href="<?php echo get_permalink() ?>" role="button"><?php _e( 'Voir détails', 'wpbasictheme' ) ?> »</a></p>
			</div><!-- /.col-lg-4 -->
			<?php
		endwhile;
		wp_reset_postdata();
		?>
		<?php
	endif;
	?>
</div><!-- /.row -->