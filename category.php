<?php
/**
 * The template for displaying Category archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="archive-title"><?php single_cat_title(); ?></h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					</header><!-- .entry-header -->
				
					<?php if ( has_excerpt() ) { ?>
						<div class="entry-intro">
							<?php the_excerpt(); ?>
						</div><!-- .entry-intro -->
					<?php } ?>
				
					<?php twentysixteen_post_thumbnail(); ?>
				
					<div class="entry-content">
						<?php
							/* translators: %s: Name of current post */
							the_content( sprintf(
								wp_kses( __( 'Continue reading %s', 'twentysixteen' ), array( 'span' => array( 'class' => array() ) ) ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							) );
				
							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'twentysixteen' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'twentysixteen' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );
						?>
					</div><!-- .entry-content -->
				
					<footer class="entry-footer">
						<?php twentysixteen_entry_meta(); ?>
						<?php edit_post_link( esc_html__( 'Edit', 'twentysixteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->


			<?php
			endwhile;

			if ( have_posts() ) :
				// Previous/next page navigation.
				the_posts_pagination( array(
					'prev_text'          => esc_html__( 'Previous page', 'twentysixteen' ),
					'next_text'          => esc_html__( 'Next page', 'twentysixteen' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'twentysixteen' ) . ' </span>',
				) );
			endif;

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
