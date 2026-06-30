<?php
/**
 * Single post template.
 *
 * @package Ame_Bazaar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="primary" class="site-main" role="main">
	<div class="ame-blog-single-wrapper">
		<div class="ame-bazaar-container">
			
			<!-- Breadcrumbs -->
			<?php get_template_part( 'components/breadcrumbs/breadcrumbs' ); ?>

			<div class="ame-blog-single-layout">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'ame-blog-post-article' ); ?>>
						
						<!-- Header -->
						<header class="ame-blog-post-header">
							<div class="ame-blog-post-meta-top">
								<?php
								$categories = get_the_category();
								if ( ! empty( $categories ) ) :
									foreach ( $categories as $cat ) :
										?>
										<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" class="ame-blog-post-cat-badge"><?php echo esc_html( $cat->name ); ?></a>
										<?php
									endforeach;
								endif;
								?>
								<span class="ame-blog-post-date"><?php echo ame_bazaar_get_post_meta_data(); ?></span>
							</div>
							<h1 class="ame-blog-post-title"><?php the_title(); ?></h1>
							
							<div class="ame-blog-post-author-meta">
								<?php echo get_avatar( get_the_author_meta( 'ID' ), 40, '', '', array( 'class' => 'ame-author-avatar-small' ) ); ?>
								<span class="ame-author-by"><?php esc_html_e( 'By', 'ame-bazaar' ); ?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="ame-author-name-link"><?php echo esc_html( get_the_author() ); ?></a></span>
							</div>
						</header>

						<!-- Featured Image -->
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="ame-blog-post-featured-image-wrap">
								<?php the_post_thumbnail( 'full', array( 'class' => 'ame-blog-post-featured-image', 'loading' => 'eager' ) ); ?>
							</div>
						<?php endif; ?>

						<!-- Content -->
						<div class="entry-content ame-blog-post-entry-content">
							<?php the_content(); ?>
						</div>

						<!-- Reusable widgets at the bottom of the article -->
						<footer class="ame-blog-post-footer">
							<!-- Author Info Box -->
							<?php get_template_part( 'components/blog/author-info' ); ?>
							
							<!-- Related Products Block -->
							<?php get_template_part( 'components/blog/related-products' ); ?>

							<!-- Store Internal Link Widget -->
							<?php get_template_part( 'components/blog/internal-linking' ); ?>
						</footer>

					</article>

					<!-- Related Articles -->
					<?php get_template_part( 'components/blog/related-articles' ); ?>

					<?php
				endwhile;
				?>
			</div>

		</div>
	</div>
</main>
<?php
get_footer();
