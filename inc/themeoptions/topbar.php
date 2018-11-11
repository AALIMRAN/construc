<?php
/**
 * Footer Theme Options
 */
$wp_customize->add_section( 'topbar_content', array(
	'priority'       => 1,
	'panel'          => 'general_settings',
	'title'          => __( 'Topbar Content', 'construc' ),
	'description'    => __( 'Customize Website Topbar Area', 'construc' ),
	'capability'     => 'edit_theme_options',
) );

$wp_customize->add_setting( 'topbar_left_content', array(
	'default'              => '<div class="topbar-list">
		                            <div class="single-topbar">
		                                <p> <span class="fa fa-map-marker"></span> 3486 Oakway Lane Pomona, CA 91766</p>
		                            </div>
		                            <div class="single-topbar">
		                                <p> <span class="fa fa-envelope"></span> tfthemecafe@gmail.com</p>
		                            </div>
		                        </div>',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'esc_attr'
) );

$wp_customize->add_control( 'topbar_left_content', array(
	'label'       => __( 'Topbar Left Content', 'construc' ),
	'description' => __( 'Write Topebar Left Side Content', 'construc' ),
	'section'     => 'topbar_content',
	'type'        => 'textarea',
) );

$wp_customize->add_setting( 'facebook', array(
	'default'              => 'https://facebook.com',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'esc_url_raw'
) );
// Control: Name.
$wp_customize->add_control( 'facebook', array(
	'label'       => __( 'Facebook Link', 'construc' ),
	'section'     => 'topbar_content',
	'type'        => 'url',
) );

$wp_customize->add_setting( 'twitter', array(
	'default'              => 'https://twitter.com',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'esc_url_raw'
) );
// Control: Name.
$wp_customize->add_control( 'twitter', array(
	'label'       => __( 'twitter Link', 'construc' ),
	'section'     => 'topbar_content',
	'type'        => 'url',
) );
$wp_customize->add_setting( 'pinterest', array(
	'default'              => 'https://pinterest.com',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'esc_url_raw'
) );
// Control: Name.
$wp_customize->add_control( 'pinterest', array(
	'label'       => __( 'pinterest Link', 'construc' ),
	'section'     => 'topbar_content',
	'type'        => 'url',
) );
$wp_customize->add_setting( 'googleplus', array(
	'default'              => 'https://google.com',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'esc_url_raw'
) );
// Control: Name.
$wp_customize->add_control( 'googleplus', array(
	'label'       => __( 'Google plus Link', 'construc' ),
	'section'     => 'topbar_content',
	'type'        => 'url',
) );
$wp_customize->add_setting( 'youtube', array(
	'default'              => 'https://youtube.com',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'esc_url_raw'
) );
// Control: Name.
$wp_customize->add_control( 'youtube', array(
	'label'       => __( 'youtube Link', 'construc' ),
	'section'     => 'topbar_content',
	'type'        => 'url',
) );