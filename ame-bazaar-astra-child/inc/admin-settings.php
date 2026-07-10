<?php
/**
 * Business settings admin screens.
 *
 * @package Ame_Bazaar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

const AME_BAZAAR_VISUAL_BRANDING_OPTION = 'ame_bazaar_visual_branding_images';

function ame_bazaar_get_visual_branding_image_fields() {
	return array(
		'primary_logo'              => __( 'Primary Logo', 'ame-bazaar' ),
		'sticky_header_logo'        => __( 'Sticky Header Logo', 'ame-bazaar' ),
		'footer_logo'               => __( 'Footer Logo', 'ame-bazaar' ),
		'hero_desktop_image'        => __( 'Hero Desktop Image', 'ame-bazaar' ),
		'hero_mobile_image'         => __( 'Hero Mobile Image', 'ame-bazaar' ),
		'about_section_image'       => __( 'About Section Image', 'ame-bazaar' ),
		'visit_store_image'         => __( 'Visit Store Image', 'ame-bazaar' ),
		'mens_wear_image'           => __( "Men's Wear Image", 'ame-bazaar' ),
		'womens_wear_image'         => __( "Women's Wear Image", 'ame-bazaar' ),
		'boys_wear_image'           => __( 'Boys Wear Image', 'ame-bazaar' ),
		'girls_wear_image'          => __( 'Girls Wear Image', 'ame-bazaar' ),
		'tailoring_image'           => __( 'Tailoring Image', 'ame-bazaar' ),
		'accessories_image'         => __( 'Accessories Image', 'ame-bazaar' ),
		'ai_fashion_advisor_image'  => __( 'AI Fashion Advisor Image', 'ame-bazaar' ),
		'contact_page_banner'       => __( 'Contact Page Banner', 'ame-bazaar' ),
		'about_page_banner'         => __( 'About Page Banner', 'ame-bazaar' ),
		'faq_banner'                => __( 'FAQ Banner', 'ame-bazaar' ),
		'blog_banner'               => __( 'Blog Banner', 'ame-bazaar' ),
		'open_graph_default_image'  => __( 'Open Graph Default Image', 'ame-bazaar' ),
	);
}

function ame_bazaar_get_default_visual_branding_images() {
	$defaults       = array_fill_keys( array_keys( ame_bazaar_get_visual_branding_image_fields() ), 0 );
	$custom_logo_id = (int) get_theme_mod( 'custom_logo' );

	if ( $custom_logo_id > 0 ) {
		$defaults['primary_logo'] = $custom_logo_id;
	}

	return apply_filters( 'ame_bazaar_default_visual_branding_images', $defaults );
}

function ame_bazaar_get_visual_branding_images() {
	$saved = get_option( AME_BAZAAR_VISUAL_BRANDING_OPTION, array() );

	if ( ! is_array( $saved ) ) {
		$saved = array();
	}

	return wp_parse_args( array_map( 'absint', $saved ), ame_bazaar_get_default_visual_branding_images() );
}

function ame_bazaar_sanitize_visual_branding_images( $value ) {
	$sanitized = array();

	if ( ! is_array( $value ) ) {
		$value = array();
	}

	foreach ( ame_bazaar_get_visual_branding_image_fields() as $key => $label ) {
		$sanitized[ $key ] = isset( $value[ $key ] ) ? absint( $value[ $key ] ) : 0;
	}

	return $sanitized;
}

function ame_bazaar_register_business_settings() {
	register_setting(
		'ame_bazaar_visual_branding',
		AME_BAZAAR_VISUAL_BRANDING_OPTION,
		array(
			'type'              => 'array',
			'sanitize_callback' => 'ame_bazaar_sanitize_visual_branding_images',
			'default'           => ame_bazaar_get_default_visual_branding_images(),
		)
	);

	add_settings_section(
		'ame_bazaar_visual_branding_section',
		__( 'Visual Branding', 'ame-bazaar' ),
		'__return_false',
		'ame-bazaar-visual-branding'
	);

	foreach ( ame_bazaar_get_visual_branding_image_fields() as $key => $label ) {
		add_settings_field(
			'ame_bazaar_' . $key,
			$label,
			'ame_bazaar_render_visual_branding_image_field',
			'ame-bazaar-visual-branding',
			'ame_bazaar_visual_branding_section',
			array(
				'key'   => $key,
				'label' => $label,
			)
		);
	}
}
add_action( 'admin_init', 'ame_bazaar_register_business_settings' );

function ame_bazaar_register_business_settings_pages() {
	add_menu_page(
		__( 'Business Settings', 'ame-bazaar' ),
		__( 'Business Settings', 'ame-bazaar' ),
		'manage_options',
		'ame-bazaar-business-settings',
		'ame_bazaar_render_visual_branding_page',
		'dashicons-format-image',
		61
	);

	add_submenu_page(
		'ame-bazaar-business-settings',
		__( 'Visual Branding', 'ame-bazaar' ),
		__( 'Visual Branding', 'ame-bazaar' ),
		'manage_options',
		'ame-bazaar-business-settings',
		'ame_bazaar_render_visual_branding_page'
	);
}
add_action( 'admin_menu', 'ame_bazaar_register_business_settings_pages' );

function ame_bazaar_enqueue_visual_branding_admin_assets( $hook_suffix ) {
	if ( 'toplevel_page_ame-bazaar-business-settings' !== $hook_suffix ) {
		return;
	}

	wp_enqueue_media();
	wp_enqueue_script(
		'ame-bazaar-admin-image-manager',
		ame_bazaar_asset_uri( 'assets/js/admin-image-manager.js' ),
		array(),
		ame_bazaar_asset_version( 'assets/js/admin-image-manager.js' ),
		true
	);
}
add_action( 'admin_enqueue_scripts', 'ame_bazaar_enqueue_visual_branding_admin_assets' );

function ame_bazaar_render_visual_branding_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Business Settings', 'ame-bazaar' ); ?></h1>
		<h2><?php esc_html_e( 'Visual Branding', 'ame-bazaar' ); ?></h2>
		<form action="options.php" method="post">
			<?php
			settings_fields( 'ame_bazaar_visual_branding' );
			do_settings_sections( 'ame-bazaar-visual-branding' );
			submit_button();
			?>
		</form>
	</div>
	<?php
}

function ame_bazaar_render_visual_branding_image_field( $args ) {
	$key       = isset( $args['key'] ) ? sanitize_key( $args['key'] ) : '';
	$label     = isset( $args['label'] ) ? $args['label'] : '';
	$images    = ame_bazaar_get_visual_branding_images();
	$image_id  = isset( $images[ $key ] ) ? absint( $images[ $key ] ) : 0;
	$image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'thumbnail' ) : '';
	?>
	<div class="ame-bazaar-image-field" data-ame-bazaar-image-field>
		<input
			type="hidden"
			name="<?php echo esc_attr( AME_BAZAAR_VISUAL_BRANDING_OPTION . '[' . $key . ']' ); ?>"
			value="<?php echo esc_attr( (string) $image_id ); ?>"
			data-ame-bazaar-image-id
		/>
		<div data-ame-bazaar-image-preview>
			<?php if ( $image_url ) : ?>
				<img src="<?php echo esc_url( $image_url ); ?>" alt="" style="max-width: 160px; height: auto;" />
			<?php endif; ?>
		</div>
		<p>
			<button type="button" class="button" data-ame-bazaar-select-image>
				<?php esc_html_e( 'Select image', 'ame-bazaar' ); ?>
			</button>
			<button type="button" class="button" data-ame-bazaar-remove-image>
				<?php esc_html_e( 'Remove image', 'ame-bazaar' ); ?>
			</button>
		</p>
		<p class="description">
			<?php
			printf(
				/* translators: %s: image field label */
				esc_html__( 'Choose the %s from the WordPress Media Library.', 'ame-bazaar' ),
				esc_html( $label )
			);
			?>
		</p>
	</div>
	<?php
}
