<?php
/**
 * Footer Theme Options
 */

$wp_customize->add_section( 'footer_content', array(
	'priority'       => 2,
	'panel'          => 'general_settings',
	'title'          => __( 'Copyright', 'construc' ),
	'description'    => __( 'Customize Copyright Section', 'construc' ),
	'capability'     => 'edit_theme_options',
) );

$wp_customize->add_setting( 'copyright_content', array(
	'default'              => '<p> 2018 <a href="'.home_url('/').'">zoomdev</a>. All rights reserved.</p>',
	'transport'            => 'refresh',
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'esc_attr'
) );

$wp_customize->add_control( 'copyright_content', array(
	'label'       => __( 'Label', 'construc' ),
	'description' => __( 'Description', 'construc' ),
	'section'     => 'footer_content',
	'type'        => 'textarea', 
) );


