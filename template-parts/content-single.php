<?php
/**
 * Template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php if ( has_excerpt() ) { ?>
		<div class="entry-intro">
			<?php the_excerpt(); ?>
		</div><!-- .entry-intro -->
	<?php } ?>

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' != get_the_author_meta( 'description' ) ) :
				get_template_part( 'template-parts/biography' );
			endif;
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'twentysixteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
