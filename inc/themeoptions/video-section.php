<?php
/**
 * Video Section
 */
$wp_customize->add_section( 'video_section', array(
	'priority'       => 1,
	'panel'          => 'front_page',
	'title'          => __( 'Video Section', 'construc' ),
	'description'    => __( 'Customize Video Section. this would be popup', 'construc' ),
	'capability'     => 'edit_theme_options',
) );

$wp_customize->add_setting( 'video_backgrond_image', array(
 	'default'              => get_theme_file_uri( 'asset/img/home1.jpg' ),
 	'transport'            => 'refresh', // Options: refresh or postMessage.
 	'capability'           => 'edit_theme_options',
 	'sanitize_callback'		=> 'esc_url_raw'
 ) );

 $wp_customize->add_control( new WP_Customize_Image_Control(
 	$wp_customize,
 	'video_backgrond_image',
 	array(
 		'label'      => __( 'Upload an image', 'construc' ),
 		'section'    => 'home_slider',
 		'settings'   => 'video_backgrond_image',
 	)
 ) );

$wp_customize->add_setting( 'main_title', array(
	'default'              => 'Make any dream a reality with one
<br>of our Atlanta',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'wp_kses_post'
) );

$wp_customize->add_control( 'main_title', array(
	'label'       => __( 'Title', 'construc' ),
	'description' => __( 'Write head line about your video', 'construc' ),
	'section'     => 'video_section',
	'type'        => 'textarea',
) );

$wp_customize->add_setting( 'sub_title', array(
	'default'              => 'Available but the major have embarrased',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'wp_kses_post'
) );

$wp_customize->add_control( 'sub_title', array(
	'label'       => __( 'Subtitle', 'construc' ),
	'description' => __( 'Write head line about your video', 'construc' ),
	'section'     => 'video_section',
	'type'        => 'textarea',
) );

$wp_customize->add_setting( 'video_url', array(
	'default'              => 'https://www.youtube.com/watch?v=-dAtfh79ZkQ',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'esc_url_raw'
) );

$wp_customize->add_control( 'video_url', array(
	'label'       => __( 'Video Url', 'construc' ),
	'description' => __( 'paste your video URl youtube', 'construc' ),
	'section'     => 'video_section',
	'type'        => 'url',
) );
