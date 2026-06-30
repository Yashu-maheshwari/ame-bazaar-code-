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

	// Add Section for Categories
	$wp_customize->add_section( 'ame_bazaar_categories_section', array(
		'title'       => __( 'AME Bazaar Categories Settings', 'ame-bazaar' ),
		'priority'    => 50,
		'description' => __( 'Configure the Shop by Category homepage section.', 'ame-bazaar' ),
	) );

	// Section Title & Subtitle
	$wp_customize->add_setting( 'ame_bazaar_cat_section_title', array(
		'default'           => 'Shop by Category',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_control( 'ame_bazaar_cat_section_title_control', array(
		'label'    => __( 'Section Title', 'ame-bazaar' ),
		'section'  => 'ame_bazaar_categories_section',
		'settings' => 'ame_bazaar_cat_section_title',
		'type'     => 'text',
	) );

	$wp_customize->add_setting( 'ame_bazaar_cat_section_subtitle', array(
		'default'           => 'Explore our premium fashion collections',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_control( 'ame_bazaar_cat_section_subtitle_control', array(
		'label'    => __( 'Section Subtitle', 'ame-bazaar' ),
		'section'  => 'ame_bazaar_categories_section',
		'settings' => 'ame_bazaar_cat_section_subtitle',
		'type'     => 'text',
	) );

	// Define 4 categories config
	$categories = array(
		'men' => array(
			'label' => 'Men\'s Wear',
			'desc'  => 'Premium clothing carefully selected for style, comfort, and durability. From casual shirts to ethnic wear.',
		),
		'women' => array(
			'label' => 'Women\'s Wear',
			'desc'  => 'Elegant apparel combining traditional heritage and contemporary fashion. Traditional wear, sarees, and casual attire.',
		),
		'kids' => array(
			'label' => 'Kids Wear',
			'desc'  => 'Comfortable, soft, and durable wear for boys, girls, and babies. Crafted with skin-friendly fabrics for active kids.',
		),
		'accessories' => array(
			'label' => 'Accessories',
			'desc'  => 'Timeless fashion accessories, premium leather belts, wallets, and bags to complete your everyday aesthetic.',
		),
	);

	foreach ( $categories as $key => $cat ) {
		// Category description setting
		$wp_customize->add_setting( 'ame_bazaar_cat_' . $key . '_desc', array(
			'default'           => $cat['desc'],
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		) );
		$wp_customize->add_control( 'ame_bazaar_cat_' . $key . '_desc_control', array(
			'label'    => sprintf( __( '%s Description', 'ame-bazaar' ), $cat['label'] ),
			'section'  => 'ame_bazaar_categories_section',
			'settings' => 'ame_bazaar_cat_' . $key . '_desc',
			'type'     => 'textarea',
		) );

		// Category URL setting
		$wp_customize->add_setting( 'ame_bazaar_cat_' . $key . '_url', array(
			'default'           => '#',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		) );
		$wp_customize->add_control( 'ame_bazaar_cat_' . $key . '_url_control', array(
			'label'    => sprintf( __( '%s Target URL', 'ame-bazaar' ), $cat['label'] ),
			'section'  => 'ame_bazaar_categories_section',
			'settings' => 'ame_bazaar_cat_' . $key . '_url',
			'type'     => 'url',
		) );

		// Category image setting
		$wp_customize->add_setting( 'ame_bazaar_cat_' . $key . '_image', array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ame_bazaar_cat_' . $key . '_image_control', array(
			'label'    => sprintf( __( '%s Image', 'ame-bazaar' ), $cat['label'] ),
			'section'  => 'ame_bazaar_categories_section',
			'settings' => 'ame_bazaar_cat_' . $key . '_image',
		) ) );
	}
}
add_action( 'customize_register', 'ame_bazaar_customize_register' );
