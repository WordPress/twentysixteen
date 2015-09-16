<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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

			<?php
			/**
			 * Fire template_content_while_before hook
			 */
			template_content_while_before();
			?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			// End of the loop.
			endwhile;

			/**
			 * Fire template_content_while_after hook
			 */
			template_content_while_after();
			?>

		<?php
		/**
		 * Fire template_content_bottom hook
		 */
		template_content_bottom();
		?>
		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->
	<?php
	/**
	 * Fire template_content_after hook
	 */
	template_content_after();
	?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
