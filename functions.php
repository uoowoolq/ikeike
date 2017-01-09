<?php
function flat_setup() {
  add_theme_support( 'post-thumbnails' );
  register_nav_menu( 'primary', 'Primary Menu' );
}

add_action( 'after_setup_theme', 'flat_setup' );

function flat_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css' );
  wp_enqueue_style( 'slick-theme', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css' );
  wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js' );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js' );
}

add_action( 'wp_enqueue_scripts', 'flat_scripts' );
