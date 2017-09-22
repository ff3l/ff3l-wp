<?php
function ff3l_scripts() {
    //include bootstap style
    //include font awesome style
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 'v4.0.0-beta' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), 'v0.1' );
	
	//include bootstap js
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.7.0', true);

}
add_action( 'wp_enqueue_scripts', 'ff3l_scripts' );


add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );