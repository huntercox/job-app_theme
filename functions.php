<?php
// ===================================================
// Enqueue Assets
// ===================================================
  function tli_register_assets() {
    // Stylesheets
      wp_enqueue_style(
        'main-stylesheet',
        get_stylesheet_uri() // theme/style.css
      );

    // Scripts
      wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        false
      );

      // OTR - JavaScript
      if ( is_page(55) ) {
        wp_enqueue_script(
          'otr-types',
          get_template_directory_uri() . '/assets/js/otr-types.js',
          array(),
          '1.0.0',
          false
        );
      }
  }
  add_action( 'wp_enqueue_scripts', 'tli_register_assets' );


// ===================================================
// Nav Menu
// ===================================================
  function tli_register_navmenu() {
    // Header Menu
      register_nav_menus(
        array(
          'header-menu' => __( 'Header Menu' )
        )
      );
  }
  add_action( 'init', 'tli_register_navmenu' );


// ===================================================
// Custom Image Sizes
// ===================================================
add_image_size( 'hero', 1200, 400, true );


// ===================================================
// ACf Options Page
// ===================================================
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}