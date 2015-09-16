<?php
/**
 * The template used for displaying page content
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
		?>
	</div><!-- .entry-content -->
	<?php
	/**
	 * Fire template_entry_content_after hook
	 */
	template_entry_content_after();
	?>

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'twentysixteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
	?>

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
