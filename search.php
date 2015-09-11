<?php
/**
 * The template for displaying search results pages
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
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
		/**
		 * Fire template_content_top hook
		 */
		template_content_top();
		?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/**
			 * Fire template_content_while_before hook
			 */
			template_content_while_before();
			?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
	</section><!-- .content-area -->
	<?php
	/**
	 * Fire template_content_after hook
	 */
	template_content_after();
	?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
