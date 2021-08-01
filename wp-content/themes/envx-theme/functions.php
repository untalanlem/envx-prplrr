<?php

// Enqueue CSS and JS
function envx_assets() {
  $version = '1.0.0';

  // Enqueue fonts and css
	wp_enqueue_style( 'envx-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap', array(), $version );
	wp_enqueue_style( 'envx-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), $version );
	wp_enqueue_style( 'envx-style', get_template_directory_uri() . '/assets/css/style.css', array(), $version );
	wp_enqueue_style( 'envx-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), $version );

  // Enqueue javascript
  wp_enqueue_script( 'envx-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), $version, true );
  wp_enqueue_script( 'envx-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), $version, true );
  wp_enqueue_script( 'envx-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), $version, true );
  wp_enqueue_script( 'envx-js', get_template_directory_uri() . '/assets/js/mainscript.js', array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'envx_assets' );

add_theme_support( 'title-tag' );