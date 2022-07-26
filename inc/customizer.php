<?php 

/**
 * Drip Wear Theme Customizer
 *
 * @package Drip Wear
 */

function drip_wear_customizer( $wp_customize ){

	

	$wp_customize->add_section(
		'sec_copyright', array(
			'title'			=> __('Copyright Settings','drip-wear'),
			'description'	=> __('Copyright Section','drip-wear')
		)
	);

			
			$wp_customize->add_setting(
				'set_copyright', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_copyright', array(
					'label'			=> __('Copyright','drip-wear'),
					'description'	=> __('Please, add your copyright information here','drip-wear'),
					'section'		=> 'sec_copyright',
					'type'			=> 'text'
				)
			);



	$wp_customize->add_section(
		'sec_slider', array(
			'title'			=> __('Slider Settings','drip-wear'),
			'description'	=> __('Slider Section','drip-wear')
		)
	);	

			

			$wp_customize->add_setting(
				'set_slider_page1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page1', array(
					'label'			=> __('Set slider page 1', 'drip-wear'),
					'description'	=> __('Set slider page 1', 'drip-wear'),
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);			

			

			$wp_customize->add_setting(
				'set_slider_button_text1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text1', array(
					'label'			=> __('Button Text for Page 1','drip-wear'),
					'description'	=> __('Button Text for Page 1','drip-wear'),
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

		

			$wp_customize->add_setting(
				'set_slider_button_url1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url1', array(
					'label'			=> __('URL for Page 1','drip-wear'),
					'description'	=> __('URL for Page 1','drip-wear'),
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);	

		
			$wp_customize->add_setting(
				'set_slider_page2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page2', array(
					'label'			=> __('Set slider page 2','drip-wear'),
					'description'	=> __('Set slider page 2', 'drip-wear'),
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);			

		

			$wp_customize->add_setting(
				'set_slider_button_text2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text2', array(
					'label'			=> __('Button Text for Page 2','drip-wear'),
					'description'	=> __('Button Text for Page 2', 'drip-wear'),
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			

			$wp_customize->add_setting(
				'set_slider_button_url2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url2', array(
					'label'			=> __('URL for Page 2','drip-wear'),
					'description'	=> __('URL for Page 2','drip-wear'),
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);			

			

			$wp_customize->add_setting(
				'set_slider_page3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page3', array(
					'label'			=> __('Set slider page 3','drip-wear'),
					'description'	=> __('Set slider page 3', 'drip-wear'),
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);			


			$wp_customize->add_setting(
				'set_slider_button_text3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text3', array(
					'label'			=> __('Button Text for Page 3','drip-wear'),
					'description'	=> __('Button Text for Page 3','drip-wear'),
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);


			$wp_customize->add_setting(
				'set_slider_button_url3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url3', array(
					'label'			=> __('URL for Page 3','drip-wear'),
					'description'	=> __('URL for Page 3','drip-wear'),
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);


	$wp_customize->add_section(
		'sec_home_page', array(
			'title'			=> __('Home Page Products and Blog Settings','drip-wear'),
			'description'	=> __('Home Page Section','drip-wear')
		)
	);	

		$wp_customize->add_setting(
				'set_popular_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_popular_title', array(
					'label' 		=> __( 'Popular Products Title', 'drip-wear' ),
					'description' 	=> __( 'Popular Products Title', 'drip-wear' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

		
			$wp_customize->add_setting(
				'set_popular_max_num', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_num', array(
					'label'			=> __('Popular Products Max Number','drip-wear'),
					'description'	=> __('Popular Products Max Number','drip-wear'),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

		
			$wp_customize->add_setting(
				'set_popular_max_col', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_col', array(
					'label'			=> __('Popular Products Max Columns','drip-wear'),
					'description'	=> __('Popular Products Max Columns','drip-wear'),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

				$wp_customize->add_setting(
				'set_new_arrivals_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_title', array(
					'label' 		=> __( 'New Arrivals Title', 'drip-wear' ),
					'description' 	=> __( 'New Arrivals Title', 'drip-wear' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);
		
			$wp_customize->add_setting(
				'set_new_arrivals_max_num', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_num', array(
					'label'			=> __('New Arrivals Max Number','drip-wear'),
					'description'	=> __('New Arrivals Max Number','drip-wear'),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			
			$wp_customize->add_setting(
				'set_new_arrivals_max_col', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_col', array(
					'label'			=> __('New Arrivals Max Columns','drip-wear'),
					'description'	=> __('New Arrivals Max Columns','drip-wear'),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);
			
			$wp_customize->add_setting(
				'set_deal_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_deal_title', array(
					'label' 		=> __( 'Deal of the Week Title', 'drip-wear' ),
					'description' 	=> __( 'Deal of the Week Title', 'drip-wear' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);
			
			$wp_customize->add_setting(
				'set_deal_show', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'drip_wear_sanitize_checkbox'
				)
			);

			$wp_customize->add_control(
				'set_deal_show', array(
					'label'			=> __('Show Deal of the Week?','drip-wear'),
					'section'		=> 'sec_home_page',
					'type'			=> 'checkbox'
				)
			);

			
			$wp_customize->add_setting(
				'set_deal', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_deal', array(
					'label'			=> __('Deal of the Week Product ID','drip-wear'),
					'description'	=> __('Product ID to Display','drip-wear'),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			$wp_customize->add_setting(
				'set_blog_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_blog_title', array(
					'label' 		=> __( 'Blog Section Title', 'drip-wear' ),
					'description' 	=> __( 'Blog Section Title', 'drip-wear' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

}
add_action( 'customize_register', 'drip_wear_customizer' );

function drip_wear_sanitize_checkbox( $checked ){
	return ( ( isset ( $checked ) && true == $checked ) ? true : false );
}