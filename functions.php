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
          array('jquery'),
          '1.0.0',
          false
        );
      }

      // Apply
      if ( is_page(43) ) {
        wp_enqueue_script(
          'inputmask',
          get_template_directory_uri() . '/node_modules/inputmask/dist/jquery.inputmask.js',
          array('jquery'),
          '1.0.0',
          false
        );
        wp_enqueue_script(
          'job-app',
          get_template_directory_uri() . '/assets/js/apply.js',
          array('jquery'),
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



// Applicant Info (field group)
  // Career (field)
    add_filter('acf/load_field/key=field_604a4f2776fca', 'acf_read_only');
  // Full Name (field)
    add_filter('acf/load_field/key=field_604a4f2776fcb', 'acf_read_only');
  // Phone Number (field)
    add_filter('acf/load_field/key=field_604a4f3476fcc', 'acf_read_only');
  // Relevant Experience (field)
    add_filter('acf/load_field/key=field_604a4f3476fcd', 'acf_read_only');

  // make ACF field read-only (not editable) on Job posts
  function acf_read_only($field) {
    $field['readonly'] = 1;
    return $field;
  }