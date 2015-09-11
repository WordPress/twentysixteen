<?php
/**
 * Theme template hooks
 *
 * ADD DESCRIPTION TEXT HERE
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Declare Theme support for template hooks
 * 
 * Use 'all' to declare support for all
 * template hooks. Support for the following
 * template hooks can also be declared
 * explicitly:
 * 	'html'
 *	'body'
 *	'html_head'
 *	'header'
 *	'content'
 *	'entry'
 *	'comments'
 *	'sidebars'
 *	'sidebar'
 *	'footer'
 */
add_theme_support( 'template_hooks', array( 'all' ) );

/**
 * HTML <html> hook
 * Special case, useful for <DOCTYPE>, etc.
 * current_theme_supports( 'template_hooks' ) = 'html';
 */
function template_html_before() {
	do_action( 'template_html_before' );
}
/**
 * HTML <body> hooks
 * current_theme_supports( 'template_hooks' ) = 'body';
 * 
 * Note: for HTML body bottom,
 * use wp_footer()
 */
function template_body_top() {
	do_action( 'template_body_top' );
}
/**
 * HTML <head> hooks
 * 
 * Note: for HTML head bottom, 
 * use wp_head()
 *
 * current_theme_supports( 'template_hooks' ) = 'html_head';
 */
function template_html_head_top() {
	do_action( 'template_head_top' );
}
/**
 * Semantic <header> hooks
 *
 * current_theme_supports( 'template_hooks' ) = 'header';
 */
function template_header_before() {
	do_action( 'template_header_before' );
}
function template_header_after() {
	do_action( 'template_header_after' );
}
function template_header_top() {
	do_action( 'template_header_top' );
}
function template_header_bottom() {
	do_action( 'template_header_bottom' );
}
/**
 * Semantic <content> hooks
 *
 * current_theme_supports( 'template_hooks' ) = 'content';
 */
function template_content_before() {
	do_action( 'template_content_before' );
}
function template_content_after() {
	do_action( 'template_content_after' );
}
function template_content_top() {
	do_action( 'template_content_top' );
}
function template_content_bottom() {
	do_action( 'template_content_bottom' );
}
function template_content_while_before() {
	do_action( 'template_content_while_before' );
}
function template_content_while_after() {
	do_action( 'template_content_while_after' );
}
/**
 * Semantic <entry> hooks
 *
 * current_theme_supports( 'template_hooks' ) = 'entry';
 */
function template_entry_before() {
	do_action( 'template_entry_before' );
}
function template_entry_after() {
	do_action( 'template_entry_after' );
}
function template_entry_content_before() {
	do_action( 'template_entry_content_before' );
}
function template_entry_content_after() {
	do_action( 'template_entry_content_after' );
}
function template_entry_top() {
	do_action( 'template_entry_top' );
}
function template_entry_bottom() {
	do_action( 'template_entry_bottom' );
}
/**
 * Comments block hooks
 *
 * current_theme_supports( 'template_hooks' ) = 'comments';
 */
function template_comments_before() {
	do_action( 'template_comments_before' );
}
function template_comments_after() {
	do_action( 'template_comments_after' );
}
/**
 * Semantic <sidebar> hooks
 *
 * current_theme_supports( 'template_hooks' ) = 'sidebar';
 */
function template_sidebars_before() {
	do_action( 'template_sidebars_before' );
}
function template_sidebars_after() {
	do_action( 'template_sidebars_after' );
}
function template_sidebar_top() {
	do_action( 'template_sidebar_top' );
}
function template_sidebar_bottom() {
	do_action( 'template_sidebar_bottom' );
}
/**
 * Semantic <footer> hooks
 *
 * current_theme_supports( 'template_hooks' ) = 'footer';
 */
function template_footer_before() {
	do_action( 'template_footer_before' );
}
function template_footer_after() {
	do_action( 'template_footer_after' );
}
function template_footer_top() {
	do_action( 'template_footer_top' );
}
function template_footer_bottom() {
	do_action( 'template_footer_bottom' );
}
