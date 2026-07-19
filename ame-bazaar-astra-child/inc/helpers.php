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
