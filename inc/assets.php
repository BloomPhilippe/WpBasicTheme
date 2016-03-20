<?php

/*
 * Styles
 */
if ( ! function_exists( 'decoboots_enqueue_styles' ) ) {
  function decoboots_enqueue_styles() {
    // Main Stylesheet
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/styles/main.css', array(), FALSE );
  }
  add_action( 'wp_enqueue_scripts', 'decoboots_enqueue_styles' );
}

/*
 * Script
 */
if ( ! function_exists( 'decoboots_enqueue_scripts' ) ) {
  function decoboots_enqueue_scripts() {

    // Register main theme script
    wp_register_script( 'main', get_stylesheet_directory_uri() . '/scripts/main.min.js', TRUE );
    wp_enqueue_script( 'main' );

    add_action( 'wp_enqueue_scripts', 'epic_enqueue_scripts' );
}
