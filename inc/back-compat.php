<?php
/**
 * Twenty Sixteen back compat functionality
 *
 * Prevents Twenty Sixteen from running on WordPress versions prior to 4.2,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.2.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Prevent switching to Twenty Sixteen on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'twentysixteen_upgrade_notice' );
}
add_action( 'after_switch_theme', 'twentysixteen_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Twenty Sixteen on WordPress versions prior to 4.2.
 *
 * @since Twenty Sixteen 1.0
 *
 * @global string $wp_version
 */
function twentysixteen_upgrade_notice() {
	$message = sprintf( esc_html__( 'Twenty Sixteen requires at least WordPress version 4.2. You are running version %s. Please upgrade and try again.', 'twentysixteen' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.2.
 *
 * @since Twenty Sixteen 1.0
 *
 * @global string $wp_version
 */
function twentysixteen_customize() {
	wp_die( sprintf( esc_html__( 'Twenty Sixteen requires at least WordPress version 4.2. You are running version %s. Please upgrade and try again.', 'twentysixteen' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'twentysixteen_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.2.
 *
 * @since Twenty Sixteen 1.0
 *
 * @global string $wp_version
 */
function twentysixteen_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( esc_html__( 'Twenty Sixteen requires at least WordPress version 4.2. You are running version %s. Please upgrade and try again.', 'twentysixteen' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'twentysixteen_preview' );
