<?php
/**
 * Structured data helpers.
 *
 * @package Ame_Bazaar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ame_bazaar_get_organization_schema() {
	$schema = array(
		'@context' => 'https://schema.org',
		'@type'    => 'Organization',
		'name'     => ame_bazaar_get_brand_name(),
		'url'      => home_url( '/' ),
	);

	$logo_url = ame_bazaar_get_custom_logo_url();

	if ( $logo_url ) {
		$schema['logo'] = $logo_url;
	}

	return apply_filters( 'ame_bazaar_organization_schema', $schema );
}

function ame_bazaar_output_schema() {
	if ( is_admin() ) {
		return;
	}

	$schema = ame_bazaar_get_organization_schema();

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}
add_action( 'wp_head', 'ame_bazaar_output_schema', 20 );

function ame_bazaar_output_open_graph_default_image() {
	if ( is_admin() ) {
		return;
	}

	$image_url = ame_bazaar_get_visual_branding_image_url( 'open_graph_default_image', 'full' );

	if ( ! $image_url ) {
		return;
	}

	echo '<meta property="og:image" content="' . esc_url( $image_url ) . '">' . "\n";
}
add_action( 'wp_head', 'ame_bazaar_output_open_graph_default_image', 21 );
