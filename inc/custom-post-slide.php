<?php

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'slide',
		array(
			'labels' => array(
				'name' => __( 'Slides' ),
				'singular_name' => __( 'Slide' )
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		)
	);
}