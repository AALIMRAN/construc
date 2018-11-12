<?php
/**
 * Blog Section Title
 */

$wp_customize->add_section( 'blog_section_title', array(
	'priority'       => 1,
	'panel'          => 'front_page',
	'title'          => __( 'Blog Section Title', 'construc' ),
	'description'    => __( 'Customize Video Section. this would be popup', 'construc' ),
	'capability'     => 'edit_theme_options',
) );

$wp_customize->add_setting( 'blog_main_title', array(
	'default'              => 'Our Blog',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'wp_kses_post'
) );

$wp_customize->add_control( 'blog_main_title', array(
	'label'       => __( 'Title', 'construc' ),
	'description' => __( 'Type section Title', 'construc' ),
	'section'     => 'blog_section_title',
	'type'        => 'textarea',
) );

$wp_customize->add_setting( 'blog_subtitle', array(
	'default'              => 'Below all of our latest post available',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'wp_kses_post'
) );

$wp_customize->add_control( 'blog_subtitle', array(
	'label'       => __( 'Subtitle', 'construc' ),
	'description' => __( 'Type Section Subtitle', 'construc' ),
	'section'     => 'blog_section_title',
	'type'        => 'textarea',
) );
