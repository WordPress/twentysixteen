<?php
/**
 * This template follows the rules of is_singular and is used for a single post, irregardless of post type.
 * https://make.wordpress.org/core/2015/07/06/singular-php-new-theme-template-in-wordpress-4-3/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

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

		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>