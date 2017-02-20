<?php

register_nav_menus(
	array(
		'main-menu' => 'Description du menu',
		'footer-menu' => 'Description du menu footer',
	)
);

add_action( 'after_setup_theme', 'WpBasicThemeSetup' );

function WpBasicThemeSetup(){
	load_theme_textdomain( 'wp-theme-base-translate', get_template_directory() . '/languages' );
	add_theme_support( 'post-thumbnails' );
}