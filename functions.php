<?php

/**
 * Drip Wear functions and definitions
 *
 *
 * @package Drip Wear
 */


require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


 require_once get_template_directory() . '/inc/customizer.php';
 function drip_wear_scripts(){

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri(  ).'/inc/bootstrap.min.js', array('jquery'), '4.3.1', true );

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri(  ).'/inc/bootstrap.min.css', array(), '4.3.1', 'all' );

 	wp_enqueue_style( 'drip-wear-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all' );

	 wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script' );

	wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all' );
	wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array( 'jquery' ), '', true );
 }


 add_action( 'wp_enqueue_scripts', 'drip_wear_scripts' );


 function drip_wear_config(){
	
	register_nav_menus(
		array(
			'drip_wear_main_menu' 	=> esc_html__('Drip Wear Main Menu','drip-wear'),
			'drip_wear_footer_menu' => esc_html__('Drip Wear Footer Menu','drip-wear')
		)
	);

	$textdomain = 'drip-wear';
	load_theme_textdomain($textdomain, get_stylesheet_directory(). '/languages/');
	load_theme_textdomain($textdomain, get_template_directory(). '/languages/');
	


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

	add_theme_support( 'custom-logo', array(
		'height'		=> 85,
		'width'			=> 160,
		'flex-height'	=> true,
		'flex-width'	=> true
	) );
	add_theme_support('post-thumbnails');
	add_image_size( 'drip-wear-slider', 1920, 800, array( 'center', 'center' ) );
	add_image_size( 'drip-wear-blog', 960, 640, array( 'center', 'center' ) );
	if ( ! isset( $content_width ) ) {
		$content_width = 600;
	}				
	add_theme_support ( 'title-tag' );
}

add_action( 'after_setup_theme', 'drip_wear_config', 0 );

if( class_exists('woocommerce')){
	require get_template_directory() . '/inc/wc-modifications.php';
}




add_filter( 'woocommerce_add_to_cart_fragments', 'drip_wear_woocommerce_header_add_to_cart_fragment' );

function drip_wear_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}

add_action( 'widgets_init', 'drip_wear_sidebars' );
function drip_wear_sidebars(){
	register_sidebar( array(
		'name'			=> esc_html__('Drip Wear Main Sidebar','drip-wear'),
		'id'			=> 'drip-wear-sidebar-1',
		'description'	=> esc_html__('Drag and drop your widgets here','drip-wear'),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
		register_sidebar( array(
		'name'			=>  esc_html__('Sidebar Shop','drip-wear'),
		'id'			=> 'drip-wear-sidebar-shop',
		'description'	=>  esc_html__('Drag and drop your WooCommerce widgets here','drip-wear'),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
	register_sidebar( array(
		'name'			=>  esc_html__('Footer Sidebar 1','drip-wear'),
		'id'			=> 'drip-wear-sidebar-footer1',
		'description'	=>  esc_html__('Drag and drop your widgets here','drip-wear'),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
	register_sidebar( array(
		'name'			=>  esc_html__('Footer Sidebar 2','drip-wear'),
		'id'			=> 'drip-wear-sidebar-footer2',
		'description'	=>  esc_html__('Drag and drop your widgets here','drip-wear'),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
	register_sidebar( array(
		'name'			=>  esc_html__('Footer Sidebar 3','drip-wear'),
		'id'			=> 'drip-wear-sidebar-footer3',
		'description'	=>  esc_html__('Drag and drop your widgets here','drip-wear'),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
}

/**
 * Add a new country to countries list
 */
add_filter( 'woocommerce_countries',  'kosovo' );

function kosovo( $countries ) {
  $new_countries = array(
	                    'RKS'  => __( 'Kosovo', 'woocommerce' ),
	                );

	return array_merge( $countries, $new_countries );
}

//add_filter( 'woocommerce_continents', 'kosovo' );

// function handsome_bearded_guy_add_my_country_to_continents( $continents ) {
// 	$continents['EU']['countries'][] = 'RKS';
// 	return $continents;
// }

// remove State field in checkout
//add_filter( 'woocommerce_shipping_calculator_enable_state', '__return_false' );