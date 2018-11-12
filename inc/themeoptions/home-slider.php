<?php
/**
 * Footer Theme Options
 */
 $wp_customize->add_section( 'home_slider', array(
 	'priority'       => 1,
 	'panel'          => 'front_page',
 	'title'          => __( 'Home Slider', 'construc' ),
 	'capability'     => 'edit_theme_options',
 ) );
 $wp_customize->add_setting( 'slider_image_one', array(
 	'default'              => get_theme_file_uri( 'asset/img/home1.jpg' ),
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'esc_url_raw'
 ) );
 $wp_customize->add_control( new WP_Customize_Image_Control(
 	$wp_customize,
 	'slider_image_one',
 	array(
 		'label'      => __( 'Upload an image', 'construc' ),
 		'section'    => 'home_slider',
 		'settings'   => 'slider_image_one',
 	)
 ) );
 $wp_customize->add_setting( 'slider_title_one', array(
 	'default'              => 'We Make Your <br> Dream Into Reality',
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'wp_kses_post'
 ) );
 $wp_customize->add_control( 'slider_title_one', array(
 	'label'       => __( 'Title', 'construc' ),
 	'section'     => 'home_slider',
 	'type'        => 'textarea',
 ) );
 $wp_customize->add_setting( 'slider_description_one', array(
 	'default'              => 'The European languages are members of the same family. Their separate existence is a myth.<br> For science,  music, sport, etc, Europe uses the same vocabulary.',
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'wp_kses_post'
 ) );
 $wp_customize->add_control( 'slider_description_one', array(
 	'label'       => __( 'Description', 'construc' ),
 	'section'     => 'home_slider',
 	'type'        => 'textarea',
 ) );
 $wp_customize->add_setting( 'slider_button_one_text', array(
 	'default'              => 'Get Started',
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'wp_kses_post'
 ) );
 $wp_customize->add_control( 'slider_button_one_text', array(
 	'label'       => __( 'Button Text', 'construc' ),
 	'section'     => 'home_slider',
 	'type'        => 'text',
 ) );
 
 $wp_customize->add_setting( 'slider_button_one_link', array(
 	'default'              => '#',
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'esc_url_raw'
 ) );

 $wp_customize->add_control( 'slider_button_one_link', array(
 	'label'       => __( 'Button Link', 'construc' ),
 	'section'     => 'home_slider',
 	'type'        => 'text',
 ) );
 
 $wp_customize->add_setting( 'slider_image_two', array(
 	'default'              => get_theme_file_uri( 'asset/img/home1.jpg' ),
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'esc_url_raw'
 ) );

 $wp_customize->add_control( new WP_Customize_Image_Control(
 	$wp_customize,
 	'slider_image_two',
 	array(
 		'label'      => __( 'Upload an image', 'construc' ),
 		'section'    => 'home_slider',
 		'settings'   => 'slider_image_two',
 	)
 ) );
 $wp_customize->add_setting( 'slider_title_two', array(
 	'default'              => 'We Make Your <br> Dream Into Reality',
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'wp_kses_post'
 ) );
 $wp_customize->add_control( 'slider_title_two', array(
 	'label'       => __( 'Title', 'construc' ),
 	'section'     => 'home_slider',
 	'type'        => 'textarea',
 ) );
 $wp_customize->add_setting( 'slider_description_two', array(
 	'default'              => 'The European languages are members of the same family. Their separate existence is a myth.<br> For science,  music, sport, etc, Europe uses the same vocabulary.',
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'wp_kses_post'
 ) );

 $wp_customize->add_control( 'slider_description_two', array(
 	'label'       => __( 'Description', 'construc' ),
 	'section'     => 'home_slider',
 	'type'        => 'textarea',
 ) );

 $wp_customize->add_setting( 'slider_button_two_text', array(
 	'default'              => 'Get Started',
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'wp_kses_post'
 ) );

 $wp_customize->add_control( 'slider_button_two_text', array(
 	'label'       => __( 'Button Text', 'construc' ),
 	'section'     => 'home_slider',
 	'type'        => 'text',
 ) );
 
 $wp_customize->add_setting( 'slider_button_two_link', array(
 	'default'              => '#',
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'esc_url_raw'
 ) );

 $wp_customize->add_control( 'slider_button_two_link', array(
 	'label'       => __( 'Button Link', 'construc' ),
 	'section'     => 'home_slider',
 	'type'        => 'text',
 ) );

 $wp_customize->add_setting( 'slider_image_three', array(
 	'default'              => get_theme_file_uri( 'asset/img/home1.jpg' ),
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'esc_url_raw'
 ) );

 $wp_customize->add_control( new WP_Customize_Image_Control(
 	$wp_customize,
 	'slider_image_three',
 	array(
 		'label'      => __( 'Upload an image', 'construc' ),
 		'section'    => 'home_slider',
 		'settings'   => 'slider_image_three',
 	)
 ) );

 $wp_customize->add_setting( 'slider_title_three', array(
 	'default'              => 'We Make Your <br> Dream Into Reality',
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'wp_kses_post'
 ) );

 $wp_customize->add_control( 'slider_title_three', array(
 	'label'       => __( 'Title', 'construc' ),
 	'section'     => 'home_slider',
 	'type'        => 'textarea',
 ) );

 $wp_customize->add_setting( 'slider_description_three', array(
 	'default'              => 'The European languages are members of the same family. Their separate existence is a myth.<br> For science,  music, sport, etc, Europe uses the same vocabulary.',
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'wp_kses_post'
 ) );

 $wp_customize->add_control( 'slider_description_three', array(
 	'label'       => __( 'Description', 'construc' ),
 	'section'     => 'home_slider',
 	'type'        => 'textarea',
 ) );

 $wp_customize->add_setting( 'slider_button_three_text', array(
 	'default'              => 'Get Started',
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'wp_kses_post'
 ) );

 $wp_customize->add_control( 'slider_button_three_text', array(
 	'label'       => __( 'Button Text', 'construc' ),
 	'section'     => 'home_slider',
 	'type'        => 'text',
 ) );
 $wp_customize->add_setting( 'slider_button_three_link', array(
 	'default'              => '#',
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'esc_url_raw'
 ) );
 $wp_customize->add_control( 'slider_button_three_link', array(
 	'label'       => __( 'Button Link', 'construc' ),
 	'section'     => 'home_slider',
 	'type'        => 'text',
 ) );
