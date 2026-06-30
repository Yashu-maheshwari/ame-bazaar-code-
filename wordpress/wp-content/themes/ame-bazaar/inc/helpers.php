<?php
/**
 * Helper functions.
 *
 * @package Ame_Bazaar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ame_bazaar_asset_uri( $relative_path ) {
	return trailingslashit( AME_BAZAAR_URI ) . ltrim( $relative_path, '/' );
}

function ame_bazaar_asset_path( $relative_path ) {
	return trailingslashit( AME_BAZAAR_PATH ) . ltrim( $relative_path, '/' );
}

function ame_bazaar_get_custom_logo_url() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );

	if ( $custom_logo_id ) {
		$logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );

		if ( ! empty( $logo[0] ) ) {
			return $logo[0];
		}
	}

	return '';
}

function ame_bazaar_get_brand_name() {
	$brand = get_bloginfo( 'name' );

	return $brand ? $brand : 'AME Bazaar';
}

/**
 * Get the central Entity Registry.
 *
 * @return array
 */
function ame_bazaar_get_entity_registry() {
	return array(
		'store'       => array(
			'label'       => __( 'Clothing Store Overview', 'ame-bazaar' ),
			'schema_type' => 'ClothingStore',
			'has_tailor'  => true,
		),
		'mens_wear'   => array(
			'label'       => __( 'Men\'s Wear Department', 'ame-bazaar' ),
			'schema_type' => 'ClothingStore',
			'has_tailor'  => true,
		),
		'womens_wear' => array(
			'label'       => __( 'Women\'s Wear Department', 'ame-bazaar' ),
			'schema_type' => 'ClothingStore',
			'has_tailor'  => true,
		),
		'kids_wear'   => array(
			'label'       => __( 'Kids\' Wear Department', 'ame-bazaar' ),
			'schema_type' => 'ClothingStore',
			'has_tailor'  => false,
		),
		'sarees'      => array(
			'label'       => __( 'Saree Shop Department', 'ame-bazaar' ),
			'schema_type' => 'ClothingStore',
			'has_tailor'  => true,
		),
		'accessories' => array(
			'label'       => __( 'Accessories Department', 'ame-bazaar' ),
			'schema_type' => 'ClothingStore',
			'has_tailor'  => false,
		),
		'tailoring'   => array(
			'label'       => __( 'Tailoring & Alterations', 'ame-bazaar' ),
			'schema_type' => 'Service',
			'has_tailor'  => true,
		),
	);
}

/**
 * Register post meta keys for local entity pages.
 */
function ame_bazaar_register_local_entity_meta() {
	register_post_meta( 'page', 'ame_local_entity_type', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function() {
			return current_user_can( 'edit_posts' );
		},
	) );

	register_post_meta( 'page', 'ame_local_buying_guide', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function() {
			return current_user_can( 'edit_posts' );
		},
	) );

	register_post_meta( 'page', 'ame_local_seasonal_recommendations', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function() {
			return current_user_can( 'edit_posts' );
		},
	) );

	register_post_meta( 'page', 'ame_local_faqs', array(
		'show_in_rest'  => array(
			'schema' => array(
				'type'  => 'array',
				'items' => array(
					'type'       => 'object',
					'properties' => array(
						'q' => array( 'type' => 'string' ),
						'a' => array( 'type' => 'string' ),
					),
				),
			),
		),
		'single'        => true,
		'type'          => 'array',
		'auth_callback' => function() {
			return current_user_can( 'edit_posts' );
		},
	) );
}
add_action( 'init', 'ame_bazaar_register_local_entity_meta' );

/**
 * Generate semantic HTML navigation links for registered local entities.
 *
 * @return string HTML output.
 */
function ame_bazaar_get_local_entity_links_html() {
	$registry = ame_bazaar_get_entity_registry();
	$current_id = get_the_ID();

	// Query pages with local entity type meta key
	$query = new WP_Query( array(
		'post_type'      => 'page',
		'posts_per_page' => 20,
		'post_status'    => 'publish',
		'meta_query'     => array(
			array(
				'key'     => 'ame_local_entity_type',
				'compare' => 'EXISTS',
			),
		),
	) );

	if ( ! $query->have_posts() ) {
		return '';
	}

	$html = '<ul class="ame-local-entity-nav-list">';
	while ( $query->have_posts() ) {
		$query->the_post();
		$entity_key = get_post_meta( get_the_ID(), 'ame_local_entity_type', true );

		// Skip if not in the registry
		if ( ! isset( $registry[ $entity_key ] ) ) {
			continue;
		}

		$is_current = ( get_the_ID() === $current_id );
		$active_class = $is_current ? ' class="current-menu-item"' : '';
		$aria_current = $is_current ? ' aria-current="page"' : '';

		$html .= sprintf(
			'<li%s><a href="%s"%s>%s</a></li>',
			$active_class,
			esc_url( get_permalink() ),
			$aria_current,
			esc_html( get_the_title() )
		);
	}
	wp_reset_postdata();
	$html .= '</ul>';

	return $html;
}

