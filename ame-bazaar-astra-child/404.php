<?php
/**
 * 404 template.
 *
 * @package Ame_Bazaar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="primary" class="site-main" role="main">
	<div class="ame-bazaar-container ame-bazaar-section">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Page not found', 'ame-bazaar' ); ?></h1>
		</header>

		<p><?php esc_html_e( 'The page you are looking for does not exist or has been moved.', 'ame-bazaar' ); ?></p>
		<?php get_search_form(); ?>
	</div>
</main>
<?php
get_footer();
