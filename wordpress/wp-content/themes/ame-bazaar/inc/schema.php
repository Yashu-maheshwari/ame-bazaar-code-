<?php
/**
 * Structured data helpers and connected JSON-LD Entity Graph generator.
 *
 * @package Ame_Bazaar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get WebSite entity schema.
 *
 * @return array
 */
function ame_bazaar_get_website_schema() {
	$brand_name = ame_bazaar_get_brand_name();

	$schema = array(
		'@type'     => 'WebSite',
		'@id'       => home_url( '/#website' ),
		'url'       => home_url( '/' ),
		'name'      => $brand_name,
		'publisher' => array(
			'@id' => home_url( '/#organization' ),
		),
	);

	return apply_filters( 'ame_bazaar_website_schema', $schema );
}

/**
 * Get Organization entity schema.
 *
 * @return array
 */
function ame_bazaar_get_organization_schema() {
	$brand_name = ame_bazaar_get_brand_name();
	$logo_url   = ame_bazaar_get_custom_logo_url();
	$facebook   = get_theme_mod( 'ame_bazaar_facebook_url', 'https://www.facebook.com/amebazaar' );
	$instagram  = get_theme_mod( 'ame_bazaar_instagram_url', 'https://www.instagram.com/amebazaar' );

	$schema = array(
		'@type' => 'Organization',
		'@id'   => home_url( '/#organization' ),
		'name'  => $brand_name,
		'url'   => home_url( '/' ),
	);

	if ( $logo_url ) {
		$schema['logo'] = array(
			'@type'   => 'ImageObject',
			'@id'     => home_url( '/#logo' ),
			'url'     => $logo_url,
			'caption' => $brand_name,
		);
		$schema['image'] = array(
			'@id' => home_url( '/#logo' ),
		);
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
 * Get ClothingStore / LocalBusiness entity schema.
 *
 * @return array
 */
function ame_bazaar_get_clothing_store_schema() {
	$brand_name = ame_bazaar_get_brand_name();
	$phone      = get_theme_mod( 'ame_bazaar_phone', '+91 99999 99999' );
	$maps_url   = get_theme_mod( 'ame_bazaar_maps_url', 'https://maps.google.com/?q=AME+Bazaar+Kirari+Delhi' );

	// Address details
	$street  = get_theme_mod( 'ame_bazaar_street_address', 'Mubarakpur Road' );
	$city    = get_theme_mod( 'ame_bazaar_locality', 'Kirari' );
	$state   = get_theme_mod( 'ame_bazaar_region', 'Delhi' );
	$zip     = get_theme_mod( 'ame_bazaar_postal_code', '110086' );
	$country = get_theme_mod( 'ame_bazaar_country', 'IN' );

	// Additional info
	$hours        = get_theme_mod( 'ame_bazaar_store_hours', 'Mo-Su 09:00–22:00' );
	$areas_served = get_theme_mod( 'ame_bazaar_areas_served', 'Kirari, Mubarakpur, Meer Vihar, Baljit Vihar, Prem Nagar, Nangloi, Budh Vihar, Rohini' );
	$price_range  = get_theme_mod( 'ame_bazaar_price_range', '₹100–₹1000' );
	$facebook     = get_theme_mod( 'ame_bazaar_facebook_url', 'https://www.facebook.com/amebazaar' );
	$instagram    = get_theme_mod( 'ame_bazaar_instagram_url', 'https://www.instagram.com/amebazaar' );

	$schema = array(
		'@type'              => 'ClothingStore',
		'@id'                => home_url( '/#store' ),
		'name'               => $brand_name,
		'url'                => home_url( '/' ),
		'telephone'          => $phone,
		'priceRange'         => $price_range,
		'hasMap'             => $maps_url,
		'parentOrganization' => array(
			'@id' => home_url( '/#organization' ),
		),
		'address'            => array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => $street,
			'addressLocality' => $city,
			'addressRegion'   => $state,
			'postalCode'      => $zip,
			'addressCountry'  => $country,
		),
		'openingHours'       => $hours,
	);

	if ( ame_bazaar_get_custom_logo_url() ) {
		$schema['image'] = array(
			'@id' => home_url( '/#logo' ),
		);
	}

	if ( $areas_served ) {
		$areas = array_map( 'trim', explode( ',', $areas_served ) );
		$schema['areaServed'] = $areas;
	}

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
 * Get FAQ Page entity schema if homepage questions exist.
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
		'@type'      => 'FAQPage',
		'@id'        => home_url( '/#faq' ),
		'mainEntity' => $questions,
	);

	return apply_filters( 'ame_bazaar_faq_schema', $schema );
}

/**
 * Get Breadcrumb entity schema.
 *
 * @return array
 */
function ame_bazaar_get_breadcrumb_schema() {
	$brand_name = ame_bazaar_get_brand_name();

	$schema = array(
		'@type'           => 'BreadcrumbList',
		'@id'             => get_permalink() . '#breadcrumbs',
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
 * Output combined connected JSON-LD Entity Graph in the head.
 */
function ame_bazaar_output_schema() {
	if ( is_admin() ) {
		return;
	}

	// Bypass theme schema entirely if Rank Math, Yoast SEO, or SEOPress is active.
	if ( class_exists( 'RankMath' ) || defined( 'WPSEO_VERSION' ) || class_exists( 'WPSEO_Frontend' ) || defined( 'SEOPRESS_VERSION' ) ) {
		return;
	}

	$graph = array();

	// 1. WebSite Entity
	$website = ame_bazaar_get_website_schema();
	if ( $website ) {
		$graph[] = $website;
	}

	// 2. Organization Entity
	$org = ame_bazaar_get_organization_schema();
	if ( $org ) {
		$graph[] = $org;
	}

	// 3. ClothingStore (LocalBusiness) Entity
	$store = ame_bazaar_get_clothing_store_schema();
	if ( $store ) {
		$graph[] = $store;
	}

	// 3b. BlogPosting / Article Entity (Single Posts Only)
	if ( is_singular( 'post' ) ) {
		$article = ame_bazaar_get_article_schema();
		if ( $article ) {
			$graph[] = $article;
		}
	}

	// 4. Breadcrumbs Entity
	$breadcrumbs = ame_bazaar_get_breadcrumb_schema();
	if ( $breadcrumbs ) {
		$graph[] = $breadcrumbs;
	}

	// 5. FAQ Page Entity (Front Page Only)
	$faq = ame_bazaar_get_faq_schema();
	if ( $faq ) {
		$graph[] = $faq;
	}

	if ( empty( $graph ) ) {
		return;
	}

	$output = array(
		'@context' => 'https://schema.org',
		'@graph'   => $graph,
	);

	echo '<script type="application/ld+json">' . wp_json_encode( $output, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}
add_action( 'wp_head', 'ame_bazaar_output_schema', 20 );

/**
 * Get BlogPosting / Article entity schema for single blog posts.
 *
 * @return array|bool
 */
function ame_bazaar_get_article_schema() {
	if ( ! is_singular( 'post' ) ) {
		return false;
	}

	$schema = array(
		'@type'            => 'BlogPosting',
		'@id'              => get_permalink() . '#article',
		'isPartOf'         => array(
			'@id' => home_url( '/#website' ),
		),
		'mainEntityOfPage' => get_permalink(),
		'headline'         => get_the_title(),
		'datePublished'    => get_the_date( 'c' ),
		'dateModified'     => get_the_modified_date( 'c' ),
		'author'           => array(
			'@type' => 'Person',
			'name'  => get_the_author(),
			'url'   => get_author_posts_url( get_the_author_meta( 'ID' ) ),
		),
		'publisher'        => array(
			'@id' => home_url( '/#organization' ),
		),
		'description'      => wp_strip_all_tags( get_the_excerpt() ),
	);

	if ( has_post_thumbnail() ) {
		$schema['image'] = array(
			'@type' => 'ImageObject',
			'url'   => get_the_post_thumbnail_url( null, 'full' ),
		);
	}

	return apply_filters( 'ame_bazaar_article_schema', $schema );
}
