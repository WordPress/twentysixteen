<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			/**
			 * Fire template_content_while_before hook
			 */
			template_content_while_before();
			?>
		
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;

			/**
			 * Fire template_content_while_after hook
			 */
			template_content_while_after();

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => esc_html__( 'Previous page', 'twentysixteen' ),
				'next_text'          => esc_html__( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

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
