<?php
/**
 * Homepage rendering functions.
 *
 * @package Ame_Bazaar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// 1. Hero
function ame_bazaar_render_hero() {
	get_template_part( 'components/hero/hero' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_hero', 10 );

// 2. Trust Section
function ame_bazaar_render_trust() {
	get_template_part( 'components/trust/trust' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_trust', 20 );

// 3. Shop By Category
function ame_bazaar_render_categories() {
	get_template_part( 'components/categories/categories' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_categories', 30 );

// 4. Featured Collections
function ame_bazaar_render_featured_collections() {
	get_template_part( 'components/featured-collections/featured-collections' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_featured_collections', 40 );

// 5. Why Choose AME Bazaar
function ame_bazaar_render_why_choose_us() {
	get_template_part( 'components/why-choose-us/why-choose-us' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_why_choose_us', 50 );

// 6. About Preview
function ame_bazaar_render_about_preview() {
	get_template_part( 'components/about-preview/about-preview' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_about_preview', 60 );

// 7. Customer Testimonials
function ame_bazaar_render_testimonials() {
	get_template_part( 'components/testimonials/testimonials' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_testimonials', 70 );

// 8. Google Reviews
function ame_bazaar_render_google_reviews() {
	get_template_part( 'components/google-reviews/google-reviews' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_google_reviews', 80 );

// 9. Store Experience
function ame_bazaar_render_store_experience() {
	get_template_part( 'components/store-experience/store-experience' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_store_experience', 90 );

// 10. Frequently Asked Questions
function ame_bazaar_render_faq() {
	get_template_part( 'components/faq/faq' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_faq', 100 );

// 11. Blog Preview
function ame_bazaar_render_blog_preview() {
	get_template_part( 'components/blog-preview/blog-preview' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_blog_preview', 110 );

// 12. Contact Information
function ame_bazaar_render_contact_info() {
	get_template_part( 'components/contact-info/contact-info' );
}
add_action( 'ame_bazaar_homepage', 'ame_bazaar_render_contact_info', 120 );
