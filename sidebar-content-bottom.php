<?php
/**
 * The content bottom widget areas on posts and pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php
if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}

// If we get this far, we have widgets. Let do this.
?>
<div id="content-bottom-widgets" class="content-bottom-widgets" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div class="widget-area">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div class="widget-area">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- .widget-area -->
	<?php endif; ?>
</div><!-- .content-bottom-widgets -->
