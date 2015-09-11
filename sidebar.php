<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
	
<?php
/**
 * Fire template_sidebar_before hook
 */
template_sidebar_before();
?>
<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<?php
	/**
	 * Fire template_sidebar_top hook
	 */
	template_sidebar_top();
	?>
	<div id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- .sidebar .widget-area -->
	<?php
	/**
	 * Fire template_sidebar_bottom hook
	 */
	template_sidebar_bottom();
	?>
<?php endif; ?>
<?php
/**
 * Fire template_sidebar_after hook
 */
template_sidebar_after();
?>
