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
 * Declare Theme support for template hooks. 
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
 * Reference current_theme_supports( 'template_hooks' ) = 'html';
 */
function template_html_before() {
	do_action( 'template_html_before' );
}
/**
 * HTML <body> hooks
 * Reference current_theme_supports( 'template_hooks' ) = 'body'; 
 * Note: for HTML body bottom,
 * use wp_footer()
 */
function template_body_top() {
	do_action( 'template_body_top' );
}
/**
 * HTML <head> hooks 
 * Note: for HTML head bottom, 
 * use wp_head().
 * Reference current_theme_supports( 'template_hooks' ) = 'html_head';
 */
function template_html_head_top() {
	do_action( 'template_head_top' );
}
/**
 * Semantic <header> hooks
 * Reference current_theme_supports( 'template_hooks' ) = 'header';
 */

/**
 * Before header container
 */
function template_header_before() {
	do_action( 'template_header_before' );
}

/**
 * After header container
 */
function template_header_after() {
	do_action( 'template_header_after' );
}

/**
 * Inside header container opening
 */
function template_header_top() {
	do_action( 'template_header_top' );
}

/**
 * Inside header container closing
 */
function template_header_bottom() {
	do_action( 'template_header_bottom' );
}
/**
 * Semantic <content> hooks
 * Reference current_theme_supports( 'template_hooks' ) = 'content';
 */

/**
 * Before content container
 */
function template_content_before() {
	do_action( 'template_content_before' );
}

/**
 * After header container
 */
function template_content_after() {
	do_action( 'template_content_after' );
}

/**
 * Inside header container opening
 */
function template_content_top() {
	do_action( 'template_content_top' );
}

/**
 * Inside header container closing
 */
function template_content_bottom() {
	do_action( 'template_content_bottom' );
}

/**
 * Before Loop while
 */
function template_content_while_before() {
	do_action( 'template_content_while_before' );
}

/**
 * After Loop endwhile
 */
function template_content_while_after() {
	do_action( 'template_content_while_after' );
}
/**
 * Semantic <entry> hooks
 * Reference current_theme_supports( 'template_hooks' ) = 'entry';
 */

/**
 * Before entry container
 */
function template_entry_before() {
	do_action( 'template_entry_before' );
}

/**
 * After entry container
 */
function template_entry_after() {
	do_action( 'template_entry_after' );
}

/**
 * Before entry content/container
 */
function template_entry_content_before() {
	do_action( 'template_entry_content_before' );
}

/**
 * After entry content/container
 */
function template_entry_content_after() {
	do_action( 'template_entry_content_after' );
}

/**
 * Inside entry container opening
 */
function template_entry_top() {
	do_action( 'template_entry_top' );
}

/**
 * Inside entry container closing
 */
function template_entry_bottom() {
	do_action( 'template_entry_bottom' );
}
/**
 * Comments block hooks
 * Reference current_theme_supports( 'template_hooks' ) = 'comments';
 */

/**
 * Before comments container
 */
function template_comments_before() {
	do_action( 'template_comments_before' );
}

/**
 * After comments container
 */
function template_comments_after() {
	do_action( 'template_comments_after' );
}
/**
 * Semantic <sidebar> hooks
 * Reference current_theme_supports( 'template_hooks' ) = 'sidebar';
 */

/**
 * Before sidebar container
 */
function template_sidebars_before() {
	do_action( 'template_sidebars_before' );
}

/**
 * After sidebar container
 */
function template_sidebars_after() {
	do_action( 'template_sidebars_after' );
}

/**
 * Inside sidebar container opening
 */
function template_sidebar_top() {
	do_action( 'template_sidebar_top' );
}

/**
 * Inside sidebar container closing
 */
function template_sidebar_bottom() {
	do_action( 'template_sidebar_bottom' );
}
/**
 * Semantic <footer> hooks
 * Reference current_theme_supports( 'template_hooks' ) = 'footer';
 */

/**
 * Before footer container
 */
function template_footer_before() {
	do_action( 'template_footer_before' );
}

/**
 * After footer container
 */
function template_footer_after() {
	do_action( 'template_footer_after' );
}

/**
 * Inside footer container opening
 */
function template_footer_top() {
	do_action( 'template_footer_top' );
}

/**
 * Inside footer container closing
 */
function template_footer_bottom() {
	do_action( 'template_footer_bottom' );
}
