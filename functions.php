<?php
function flat_setup() {
  add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'flat_setup' );

function flat_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	/* wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true ); */
}

add_action( 'wp_enqueue_scripts', 'flat_scripts' );
