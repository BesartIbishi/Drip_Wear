<?php

/**
 * Fancy Lab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fancy Lab
 */

  add_theme_support('menus');


 function fancy_lab_scripts(){

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri(  ).'/inc/bootstrap.min.js', array('jquery'), '4.3.1', true );

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri(  ).'/inc/bootstrap.min.css', array(), '4.3.1', 'all' );



 	wp_enqueue_style( 'fancy-lab-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all' );
 }
 add_action( 'wp_enqueue_scripts', 'fancy_lab_scripts' );

 //Menus
	register_nav_menus( 
		array(
		'drip_wear_main_menu' => 'Drip Wear Main Menu',
		'drip_wear_footer_menu'=> 'Drip Wear Footer Menu'
		)
	);
 