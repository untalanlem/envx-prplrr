<?php

// Enqueue CSS and JS
function underscores_scripts() {
  $version = '1.0.0';
	wp_enqueue_style( 'envx-style', get_stylesheet_uri() . '/css/styles.css', array(), $version );
  wp_enqueue_script( 'envx-js', get_stylesheet_uri() . 'js/script.js', array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'underscores_scripts' );