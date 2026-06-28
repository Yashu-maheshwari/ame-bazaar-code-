<?php
/**
 * AME Bazaar Child Theme functions and definitions.
 *
 * @package AMEBazaarChild
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'AME_BAZAAR_CHILD_VERSION', '0.1.0' );
define( 'AME_BAZAAR_CHILD_DIR', trailingslashit( get_stylesheet_directory() ) );
define( 'AME_BAZAAR_CHILD_URI', trailingslashit( get_stylesheet_directory_uri() ) );

require_once AME_BAZAAR_CHILD_DIR . 'inc/helpers.php';

add_action(
	'wp_enqueue_scripts',
	static function (): void {
		$theme = wp_get_theme();
		$parent_version = '1.0.0';

		if ( $theme->parent() ) {
			$parent_version = (string) $theme->parent()->get( 'Version' );
		}

		wp_enqueue_style(
			'astra-theme-css',
			get_template_directory_uri() . '/style.css',
			[],
			$parent_version
		);

		wp_enqueue_style(
			'ame-bazaar-child-style',
			get_stylesheet_uri(),
			[ 'astra-theme-css' ],
			AME_BAZAAR_CHILD_VERSION
		);

		$script_path = AME_BAZAAR_CHILD_DIR . 'assets/js/theme.js';
		if ( file_exists( $script_path ) ) {
			wp_enqueue_script(
				'ame-bazaar-child-theme',
				AME_BAZAAR_CHILD_URI . 'assets/js/theme.js',
				[],
				AME_BAZAAR_CHILD_VERSION,
				true
			);
		}
	}
);

add_action(
	'after_setup_theme',
	static function (): void {
		load_child_theme_textdomain( 'ame-bazaar-child', AME_BAZAAR_CHILD_DIR . 'languages' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'html5', [ 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'search-form' ] );
	}
);

add_filter(
	'body_class',
	static function ( array $classes ): array {
		$classes[] = 'ame-bazaar-child-theme';
		return array_values( array_unique( $classes ) );
	}
);

add_filter(
	'the_generator',
	static function (): string {
		return '';
	}
);

add_filter(
	'xmlrpc_enabled',
	'__return_false'
);
