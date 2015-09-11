<?php
/**
 * The template for displaying all single posts and attachments
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

			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next', 'twentysixteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . esc_html__( 'Next post:', 'twentysixteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous', 'twentysixteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'twentysixteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

		// End of the loop.
		endwhile;
		?>

		<?php
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
