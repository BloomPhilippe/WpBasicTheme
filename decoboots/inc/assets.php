<?php

/*
 * Styles
 */
if ( ! function_exists( 'decoboots_enqueue_styles' ) ) {
  function decoboots_enqueue_styles() {
    // Ajout du fichier main.css dans le head
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css');
  }
  add_action( 'wp_enqueue_scripts', 'decoboots_enqueue_styles' );
}

/*
 * Script
 */
if ( ! function_exists( 'decoboots_enqueue_scripts' ) ) {
  function decoboots_enqueue_scripts() {
    // Pour éviter toute duplication de script Jquery, avant d'enregistrer le notre on désactive les autres
    wp_deregister_script('jquery');
    // Ajout du fichier main.js dans le head
    wp_register_script( 'main', get_stylesheet_directory_uri() . '/js/build/main.js', TRUE );
    wp_enqueue_script( 'main' );

    // Ajout de variable PHP dans le script js
    wp_localize_script(
      'main', 'Infos', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'themeurl' => get_stylesheet_directory_uri()
      )
    );
  }

  add_action( 'wp_enqueue_scripts', 'decoboots_enqueue_scripts' );
}
