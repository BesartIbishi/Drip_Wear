<?php

/**
 * Drip Wear functions and definitions
 *
 *
 * @package Drip Wear
 */

 // Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


 function drip_wear_scripts(){

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri(  ).'/inc/bootstrap.min.js', array('jquery'), '4.3.1', true );

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri(  ).'/inc/bootstrap.min.css', array(), '4.3.1', 'all' );

 	wp_enqueue_style( 'drip-wear-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all' );

	 wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700');
 }

 add_action( 'wp_enqueue_scripts', 'drip_wear_scripts' );


 function drip_wear_config(){
	
	register_nav_menus(
		array(
			'drip_wear_main_menu' 	=> 'Drip Wear Main Menu',
			'drip_wear_footer_menu' => 'Drip Wear Footer Menu',
		)
	);

	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 255,
		'single_image_width'	=> 255,
		'product_grid' 			=> array(
			'default_rows'    => 10,
			'min_rows'        => 5,
			'max_rows'        => 10,
			'default_columns' => 1,
			'min_columns'     => 1,
			'max_columns'     => 1,				
		)
	) );
	
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	if ( ! isset( $content_width ) ) {
		$content_width = 600;
	}				
}

add_action( 'after_setup_theme', 'drip_wear_config', 0 );

if( class_exists('woocommerce')){
	require get_template_directory() . '/inc/wc-modifications.php';
}
