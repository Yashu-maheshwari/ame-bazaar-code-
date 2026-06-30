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
}
add_action( 'customize_register', 'ame_bazaar_customize_register' );
