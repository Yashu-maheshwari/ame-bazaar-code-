<?php
/**
 * Customizer settings for AME Bazaar.
 *
 * @package Ame_Bazaar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function ame_bazaar_customize_register( $wp_customize ) {
	// Add Section for Header Info
	$wp_customize->add_section( 'ame_bazaar_header_section', array(
		'title'       => __( 'AME Bazaar Header Settings', 'ame-bazaar' ),
		'priority'    => 30,
		'description' => __( 'Configure header contact options.', 'ame-bazaar' ),
	) );

	// 1. Phone Number Setting
	$wp_customize->add_setting( 'ame_bazaar_phone', array(
		'default'           => '+91 99999 99999',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'ame_bazaar_phone_control', array(
		'label'    => __( 'Phone Number (Call Now)', 'ame-bazaar' ),
		'section'  => 'ame_bazaar_header_section',
		'settings' => 'ame_bazaar_phone',
		'type'     => 'text',
	) );

	// 2. Google Maps URL Setting
	$wp_customize->add_setting( 'ame_bazaar_maps_url', array(
		'default'           => 'https://maps.google.com/?q=AME+Bazaar+Kirari+Delhi',
		'sanitize_callback' => 'esc_url_raw',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'ame_bazaar_maps_url_control', array(
		'label'    => __( 'Google Maps URL (Visit Store)', 'ame-bazaar' ),
		'section'  => 'ame_bazaar_header_section',
		'settings' => 'ame_bazaar_maps_url',
		'type'     => 'url',
	) );

	// Add Section for Hero
	$wp_customize->add_section( 'ame_bazaar_hero_section', array(
		'title'       => __( 'AME Bazaar Hero Settings', 'ame-bazaar' ),
		'priority'    => 40,
		'description' => __( 'Configure the homepage Hero section.', 'ame-bazaar' ),
	) );

	// 1. Hero Title
	$wp_customize->add_setting( 'ame_bazaar_hero_title', array(
		'default'           => 'Affordable Fashion for Every Family in Kirari, Delhi',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'ame_bazaar_hero_title_control', array(
		'label'    => __( 'Hero Title', 'ame-bazaar' ),
		'section'  => 'ame_bazaar_hero_section',
		'settings' => 'ame_bazaar_hero_title',
		'type'     => 'text',
	) );

	// 2. Hero Subtitle
	$wp_customize->add_setting( 'ame_bazaar_hero_subtitle', array(
		'default'           => "Men's Wear • Women's Wear • Kids Wear • Accessories",
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'ame_bazaar_hero_subtitle_control', array(
		'label'    => __( 'Hero Subtitle', 'ame-bazaar' ),
		'section'  => 'ame_bazaar_hero_section',
		'settings' => 'ame_bazaar_hero_subtitle',
		'type'     => 'text',
	) );

	// 3. Hero Image
	$wp_customize->add_setting( 'ame_bazaar_hero_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ame_bazaar_hero_image_control', array(
		'label'    => __( 'Hero Image', 'ame-bazaar' ),
		'section'  => 'ame_bazaar_hero_section',
		'settings' => 'ame_bazaar_hero_image',
	) ) );
}
add_action( 'customize_register', 'ame_bazaar_customize_register' );
