<?php
/**
 * Template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php
/**
 * Fire template_entry_before hook
 */
template_entry_before();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * Fire template_entry_top hook
	 */
	template_entry_top();
	?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php if ( has_excerpt() ) : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	<?php endif; ?>

	<?php twentysixteen_post_thumbnail(); ?>

	<?php
	/**
	 * Fire template_entry_content_before hook
	 */
	template_entry_content_before();
	?>
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' != get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</div><!-- .entry-content -->
	<?php
	/**
	 * Fire template_entry_content_after hook
	 */
	template_entry_content_after();
	?>

	<footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'twentysixteen' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
	<?php
	/**
	 * Fire template_entry_top hook
	 */
	template_entry_bottom();
	?>
</article><!-- #post-## -->
<?php
/**
 * Fire template_entry_after hook
 */
template_entry_after();