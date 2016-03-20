<?php

/*
 * Styles
 */
if ( ! function_exists( 'decoboots_enqueue_styles' ) ) {
  function decoboots_enqueue_styles() {
    // Main Stylesheet
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css');
  }
  add_action( 'wp_enqueue_scripts', 'decoboots_enqueue_styles' );
}

/*
 * Script
 */
if ( ! function_exists( 'decoboots_enqueue_scripts' ) ) {
  function decoboots_enqueue_scripts() {

    // Register main theme script
    wp_register_script( 'main', get_stylesheet_directory_uri() . '/js/build/main.js', TRUE );
    wp_enqueue_script( 'main' );

    // Add JS global variables
    wp_localize_script(
      'main', 'Infos', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'themeurl' => get_stylesheet_directory_uri()
      )
    );
  }

  add_action( 'wp_enqueue_scripts', 'decoboots_enqueue_scripts' );
}
