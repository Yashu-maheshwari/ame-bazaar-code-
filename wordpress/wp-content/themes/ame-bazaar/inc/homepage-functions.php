<?php
/**
 * Homepage rendering functions.
 *
 * @package Ame_Bazaar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// 1. Hero Section
function ame_bazaar_render_hero() {
	get_template_part( 'components/hero/hero' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_hero', 10 );

// 2. Category Section
function ame_bazaar_render_categories() {
	get_template_part( 'components/categories/categories' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_categories', 20 );

// 3. Why AME Bazaar
function ame_bazaar_render_why_choose_us() {
	get_template_part( 'components/why-choose-us/why-choose-us' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_why_choose_us', 30 );

// 4. Featured Collections
function ame_bazaar_render_featured_collections() {
	get_template_part( 'components/featured-collections/featured-collections' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_featured_collections', 40 );

// 5. Customer Reviews
function ame_bazaar_render_reviews() {
	get_template_part( 'components/reviews/reviews' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_reviews', 50 );

// 6. Call To Action
function ame_bazaar_render_cta() {
	get_template_part( 'components/cta/cta' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_cta', 60 );
