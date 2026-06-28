<?php
/**
 * Theme helper functions.
 *
 * @package AMEBazaarChild
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'ame_bazaar_child_asset_url' ) ) {
	function ame_bazaar_child_asset_url( string $relative_path ): string {
		return esc_url( trailingslashit( get_stylesheet_directory_uri() ) . ltrim( $relative_path, '/' ) );
	}
}

if ( ! function_exists( 'ame_bazaar_child_asset_path' ) ) {
	function ame_bazaar_child_asset_path( string $relative_path ): string {
		return trailingslashit( get_stylesheet_directory() ) . ltrim( $relative_path, '/' );
	}
}

if ( ! function_exists( 'ame_bazaar_child_get_svg_icon' ) ) {
	function ame_bazaar_child_get_svg_icon( string $icon ): string {
		$icons = [
			'arrow-right' => '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="img"><path d="M13.5 5l7 7-7 7" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 12h16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
		];

		return $icons[ $icon ] ?? '';
	}
}
