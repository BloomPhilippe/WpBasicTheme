<?php


function wp_base_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Bloc de texte 1', 'wp-theme-base-translate' ),
		'id'            => 'text-bloc-1',
		'description'   => __( 'Ajout d\'un bloc texte ou autre sur le site', 'wp-theme-base-translate' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'wp_base_theme_widgets_init' );


class custom_Widget extends WP_Widget {
	public function __construct() {
		if(!isset($_GET['post_type']) && !isset($_GET['post'])){
			echo "<script src='" . get_stylesheet_directory_uri() . "/node_modules/tinymce/tinymce.js'></script>";
		}
	}

	public function form( $instance ) {
		if($instance->id_base == 'text'){
			$id = '#widget-'.$instance->id.'-text';
            echo "<script>tinymce.init({selector: '".$id."',  plugins: ['advlist autolink lists link image charmap print preview hr anchor pagebreak','searchreplace wordcount visualblocks visualchars code fullscreen','insertdatetime media nonbreaking save table contextmenu directionality','emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'],toolbar1: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image forecolor backcolor emoticons',image_advtab: true});</script>";
		}
	}

}

$insWid = new custom_Widget();
$insWid->form($instance);
add_action( 'in_widget_form', array( 'custom_Widget', 'form' ), 10, 3 );