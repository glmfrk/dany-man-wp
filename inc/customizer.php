<?php
/**
 * dany man Theme Customizer
 *
 * @package dany_man
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function dany_man_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'dany_man_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'dany_man_customize_partial_blogdescription',
			)
		);
	}



	// Customize API Start 
	$wp_customize-> add_section('general', array(
		'title' => 'General Option',
		'priority' => 10
	));

	// Header Call To Action Button 
	$wp_customize -> add_setting ('call_to_action', array(
		'default' => 'contact',
		'transport' => 'postMessage'
	));

	$wp_customize -> add_control ('call_to_action', array(
		'label'		 => __('Add Call To Action Text', 'dany-man' ),
		'section'	 => 'general',
		'type' 	 	 => 'text'
	));

	$wp_customize -> add_setting ('call_to_action_url', array(
		'default' => '',
		'transport' => 'postMessage'
	));

	$wp_customize -> add_control ('call_to_action_url', array(
		'label'		 => __('Add Call To Action Path', 'dany-man' ),
		'section'	 => 'general',
		'type' 	 	 => 'url'
	));

	$wp_customize -> add_setting ('call_to_action_visibility', array(
		'default' => 'checkbox',
		'transport' => 'postMessage'
	));

	$wp_customize -> add_control ('call_to_action_visibility', array(
		'label'		 => __('Call To Action Visibility', 'dany-man' ),
		'section'	 => 'general',
		'type' 	 	 => 'checkbox'
	));



	// Footer CopyRight & Experience Section 

	$wp_customize-> add_setting('copyright', array(
		'default' => '&copy; 2022 <a href="https://www.linkedin.com/in/gulamfaruk/"> dany man </a> Construction and Renovation',
		'transport' => 'postMessage'
	));
	$wp_customize-> add_control('copyright', array(
		'label'		 => __('CopyRight Text', 'dany-man' ),
		'section'	 => 'general',
		'type' 	 	 => 'textarea'
	));

	$wp_customize-> add_setting('devName', array(
		'default' => 'Experience Derveloper By: <a href="#">Jon Doe</a>',
		'transport' => 'postMessage'
	));
	$wp_customize-> add_control('devName', array(
		'label'		 => __('Experience Derveloper By ', 'dany-man' ),
		'section'	 => 'general',
		'type' 	 => 'textarea'
	));

	$wp_customize -> add_setting ('experience_visibility', array(
		'default' => 'checkbox',
		'transport' => 'postMessage'
	));

	$wp_customize -> add_control ('experience_visibility', array(
		'label'		 => __('Experience Derveloper Visibility', 'dany-man' ),
		'section'	 => 'general',
		'type' 	 	 => 'checkbox'
	));

}
add_action( 'customize_register', 'dany_man_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function dany_man_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function dany_man_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function dany_man_customize_preview_js() {
	wp_enqueue_script( 'dany-man-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'dany_man_customize_preview_js' );
