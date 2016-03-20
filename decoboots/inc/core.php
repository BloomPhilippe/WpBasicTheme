<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'DecoBoots_Theme' ) ) {

  class DecoBoots_Theme {

    /**
     * @var string
     */
    public $version = '1.0.0';

    /**
     * Default theme settings
     *
     * @var array
     */
    public $options = array(
      'menus' => array(
        'primary' => 'Main Menu'
      ),
      'post-formats' => array(),
      'post-types' => array(),
      'taxonomies' => array(),
      'images' => array(),
    );


    /**
     * DecoBoots_Theme Constructor.
     */
    public function __construct( $options = array() ) {
      $this->options = $options + $this->options;

      $this->define_constants();
      $this->init();
      add_action( 'after_setup_theme', array( $this, 'after_setup' ) );
    }


    /**
     * Init function
     */
    public function init() {
      $this->includes();
    }


    /**
     * Define Constants
     */
    private function define_constants() {
      // Framework version
      define( 'DecoBoots_Theme_VERSION', $this->version );
      // Theme Directory and URL
      define( 'DecoBoots_Theme_DIR', get_template_directory() );
      define( 'DecoBoots_Theme_URL', get_template_directory_uri() );

      // Get the Theme Version and Theme Name from the style.css file
      $theme_data = wp_get_theme( sanitize_title( get_template() ) );
      // Define theme name
      define( 'DecoBoots_Theme_NAME', $theme_data->Name );
      // Define theme slug
      define( 'DecoBoots_Theme_SLUG', $theme_data->template );
      // Define theme name
      define( 'DecoBoots_Theme_TEXT_DOMAIN', $theme_data->get( 'TextDomain' ) );

      /**
       * Set global cache duration ( 6 hours )
       * We will use Wordpress transient keys to cache our data (mainly the theme changelog)
       */
      // define( 'DecoBoots_CACHE_DURATION', 60 * 60 * 6 );
    }


    /**
     * Includes framework filters, actions, shortcodes
     */
    public function includes() {
      // Core functions
      require_once( DecoBoots_Theme_DIR . '/inc/filters.php' );
      require_once( DecoBoots_Theme_DIR . '/inc/shortcodes.php' );
    }


    /**
     *
     * Add theme support
     * First basic wordpress components
     */
    public function after_setup() {
      $this->supports();
      $this->menus();
    }


    /**
     * Default WP supports
     */
    public function supports() {
      add_theme_support( 'post-thumbnails' );
      add_theme_support( 'automatic-feed-links' );
      add_theme_support( 'title-tag' );
      add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
      ) );
      add_post_type_support( 'page', 'excerpt' );
    }

    /**
     * Register multiple custom navigation menus
     * (defaults or set in functions.php)
     */
    public function menus() {
      if ( $this->options['menus'] != array() ) {
        register_nav_menus( $this->options['menus'] );
      }
    }

  } // end class

} // end class exists check
