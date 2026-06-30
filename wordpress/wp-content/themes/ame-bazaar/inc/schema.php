<?php
/**
 * Structured data helpers and JSON-LD generator.
 *
 * @package Ame_Bazaar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get Organization schema.
 *
 * @return array
 */
function ame_bazaar_get_organization_schema() {
	$brand_name = ame_bazaar_get_brand_name();
	$logo_url   = ame_bazaar_get_custom_logo_url();
	$facebook   = get_theme_mod( 'ame_bazaar_facebook_url', 'https://www.facebook.com/amebazaar' );
	$instagram  = get_theme_mod( 'ame_bazaar_instagram_url', 'https://www.instagram.com/amebazaar' );

	$schema = array(
		'@context' => 'https://schema.org',
		'@type'    => 'Organization',
		'name'     => $brand_name,
		'url'      => home_url( '/' ),
	);

	if ( $logo_url ) {
		$schema['logo'] = $logo_url;
	}

	$same_as = array();
	if ( $facebook && '#' !== $facebook ) {
		$same_as[] = $facebook;
	}
	if ( $instagram && '#' !== $instagram ) {
		$same_as[] = $instagram;
	}

	if ( ! empty( $same_as ) ) {
		$schema['sameAs'] = $same_as;
	}

	return apply_filters( 'ame_bazaar_organization_schema', $schema );
}

/**
 * Get LocalBusiness & ClothingStore schema.
 *
 * @return array
 */
function ame_bazaar_get_clothing_store_schema() {
	$brand_name = ame_bazaar_get_brand_name();
	$logo_url   = ame_bazaar_get_custom_logo_url();
	$phone      = get_theme_mod( 'ame_bazaar_phone', '+91 99999 99999' );
	$maps_url   = get_theme_mod( 'ame_bazaar_maps_url', 'https://maps.google.com/?q=AME+Bazaar+Kirari+Delhi' );
	
	// Address details
	$street  = get_theme_mod( 'ame_bazaar_street_address', 'Mubarakpur Road' );
	$city    = get_theme_mod( 'ame_bazaar_locality', 'Kirari' );
	$state   = get_theme_mod( 'ame_bazaar_region', 'Delhi' );
	$zip     = get_theme_mod( 'ame_bazaar_postal_code', '110086' );
	$country = get_theme_mod( 'ame_bazaar_country', 'IN' );
	
	// Additional info
	$hours        = get_theme_mod( 'ame_bazaar_store_hours', 'Mo-Su 10:00-21:00' );
	$areas_served = get_theme_mod( 'ame_bazaar_areas_served', 'Kirari, Baljit Vihar, Prem Nagar, Delhi' );
	$facebook     = get_theme_mod( 'ame_bazaar_facebook_url', 'https://www.facebook.com/amebazaar' );
	$instagram    = get_theme_mod( 'ame_bazaar_instagram_url', 'https://www.instagram.com/amebazaar' );

	// Build Schema Array
	$schema = array(
		'@context'     => 'https://schema.org',
		'@type'        => 'ClothingStore',
		'name'         => $brand_name,
		'url'          => home_url( '/' ),
		'telephone'    => $phone,
		'priceRange'   => '$$',
		'hasMap'       => $maps_url,
		'address'      => array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => $street,
			'addressLocality' => $city,
			'addressRegion'   => $state,
			'postalCode'      => $zip,
			'addressCountry'  => $country,
		),
		'openingHours' => $hours,
	);

	if ( $logo_url ) {
		$schema['logo']  = $logo_url;
		$schema['image'] = $logo_url;
	}

	// Parse areas served into schema array
	if ( $areas_served ) {
		$areas = array_map( 'trim', explode( ',', $areas_served ) );
		$schema['areaServed'] = $areas;
	}

	// Services & Socials
	$schema['makesOffer'] = array(
		array(
			'@type' => 'Offer',
			'itemOffered' => array(
				'@type' => 'Service',
				'name' => 'Custom Alterations & Tailoring',
			),
		),
		array(
			'@type' => 'Offer',
			'itemOffered' => array(
				'@type' => 'Product',
				'name' => 'Men\'s Wear, Women\'s Wear, Kids\' Wear & Fashion Accessories',
			),
		),
	);

	$same_as = array();
	if ( $facebook && '#' !== $facebook ) {
		$same_as[] = $facebook;
	}
	if ( $instagram && '#' !== $instagram ) {
		$same_as[] = $instagram;
	}
	if ( ! empty( $same_as ) ) {
		$schema['sameAs'] = $same_as;
	}

	return apply_filters( 'ame_bazaar_clothing_store_schema', $schema );
}

/**
 * Get FAQ Page Schema if homepage questions are enqueued.
 *
 * @return array|bool
 */
function ame_bazaar_get_faq_schema() {
	if ( ! is_front_page() ) {
		return false;
	}

	$questions = array();
	for ( $index = 1; $index <= 3; $index++ ) {
		$q = get_theme_mod( 'ame_bazaar_about_faq' . $index . '_q' );
		$a = get_theme_mod( 'ame_bazaar_about_faq' . $index . '_a' );

		if ( $q && $a ) {
			$questions[] = array(
				'@type'          => 'Question',
				'name'           => $q,
				'acceptedAnswer' => array(
					'@type' => 'Answer',
					'text'  => $a,
				),
			);
		}
	}

	if ( empty( $questions ) ) {
		return false;
	}

	$schema = array(
		'@context'   => 'https://schema.org',
		'@type'      => 'FAQPage',
		'mainEntity' => $questions,
	);

	return apply_filters( 'ame_bazaar_faq_schema', $schema );
}

/**
 * Get Breadcrumb schema list.
 *
 * @return array
 */
function ame_bazaar_get_breadcrumb_schema() {
	$brand_name = ame_bazaar_get_brand_name();
	
	$schema = array(
		'@context'        => 'https://schema.org',
		'@type'           => 'BreadcrumbList',
		'itemListElement' => array(
			array(
				'@type'    => 'ListItem',
				'position' => 1,
				'name'     => $brand_name,
				'item'     => home_url( '/' ),
			),
		),
	);

	if ( ! is_front_page() && is_singular() ) {
		$schema['itemListElement'][] = array(
			'@type'    => 'ListItem',
			'position' => 2,
			'name'     => get_the_title(),
			'item'     => get_permalink(),
		);
	}

	return apply_filters( 'ame_bazaar_breadcrumb_schema', $schema );
}

/**
 * Output combined structured data in the header.
 */
function ame_bazaar_output_schema() {
	if ( is_admin() ) {
		return;
	}

	$schemas = array(
		ame_bazaar_get_organization_schema(),
		ame_bazaar_get_clothing_store_schema(),
		ame_bazaar_get_breadcrumb_schema(),
	);

	$faq = ame_bazaar_get_faq_schema();
	if ( $faq ) {
		$schemas[] = $faq;
	}

	foreach ( $schemas as $schema ) {
		if ( $schema ) {
			echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
		}
	}
}
add_action( 'wp_head', 'ame_bazaar_output_schema', 20 );
