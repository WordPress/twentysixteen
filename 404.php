<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<?php
	/**
	 * Fire template_content_before hook
	 */
	template_content_before();
	?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			/**
			 * Fire template_content_top hook
			 */
			template_content_top();
			?>

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		<?php
		/**
		 * Fire template_content_bottom hook
		 */
		template_content_bottom();
		?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
	<?php
	/**
	 * Fire template_content_after hook
	 */
	template_content_after();
	?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
