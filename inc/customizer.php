<?php
/**
 * construc Theme Customizer
 *
 * @package construc
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function construc_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'construc_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'construc_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'construc_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function construc_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function construc_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function construc_customize_preview_js() {
	wp_enqueue_script( 'construc-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'construc_customize_preview_js' );


/**
 * Topbar Customizer
 */

// Customize function.
if ( ! function_exists( 'construc_customize_name_panel_section' ) ) {
	add_action( 'customize_register', 'construc_customize_name_panel_section' );
	function construc_customize_name_panel_section( $wp_customize ) {
		
		$wp_customize->add_panel( 'general_settings', array(
			'priority'       => 50,
			'title'          => __( 'General Settings', 'construc' ),
			'description'    => __( 'Customize Website Topbar Area', 'construc' ),
			'capability'     => 'edit_theme_options',
		) );

		/*
		 * Topbar Options 
		 */

		require get_template_directory() . '/inc/themeoptions/topbar.php';

		/*
		 * Footer Options 
		 */

		require get_template_directory() . '/inc/themeoptions/footer.php';

		$wp_customize->add_panel( 'front_page', array(
			'priority'       => 60,
			'title'          => __( 'Front Page', 'construc' ),
			'description'    => __( 'Customize Website Front Page Area', 'construc' ),
			'capability'     => 'edit_theme_options',
		) );
		/*
		 * Footer Options 
		 */
		require get_template_directory() . '/inc/themeoptions/home-slider.php';

	}
}

