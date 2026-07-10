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
	$primary_logo_url = ame_bazaar_get_visual_branding_image_url( 'primary_logo', 'full' );

	if ( $primary_logo_url ) {
		return $primary_logo_url;
	}

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

function ame_bazaar_get_visual_branding_image_id( $key ) {
	if ( ! function_exists( 'ame_bazaar_get_visual_branding_images' ) ) {
		return 0;
	}

	$images = ame_bazaar_get_visual_branding_images();
	$key    = sanitize_key( $key );

	return isset( $images[ $key ] ) ? absint( $images[ $key ] ) : 0;
}

function ame_bazaar_get_visual_branding_image_url( $key, $size = 'full' ) {
	$image_id = ame_bazaar_get_visual_branding_image_id( $key );

	if ( ! $image_id ) {
		return '';
	}

	$image_url = wp_get_attachment_image_url( $image_id, $size );

	return $image_url ? $image_url : '';
}

function ame_bazaar_get_visual_branding_image( $key, $size = 'full', $attr = array() ) {
	$image_id = ame_bazaar_get_visual_branding_image_id( $key );

	if ( ! $image_id ) {
		return '';
	}

	return wp_get_attachment_image( $image_id, $size, false, $attr );
}
