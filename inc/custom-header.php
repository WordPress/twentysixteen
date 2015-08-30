<?php
/**
 * Custom Header and Custom Background functionality for Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Set up the WordPress core custom header and custom background features.
 *
 * @uses twentysixteen_header_style()
 */
function twentysixteen_custom_header_and_background() {
	$color_scheme             = twentysixteen_get_color_scheme();
	$default_background_color = trim( $color_scheme[0], '#' );
	$default_text_color       = trim( $color_scheme[3], '#' );

	/**
	 * Filter Twenty Sixteen custom-background support argument.
	 *
	 * @since Twenty Sixteen 1.0
	 *
	 * @param array $args {
	 *     An array of custom-background support arguments.
	 *
	 *     @type string $default-color     Default color of the background.
	 * }
	 */
	add_theme_support( 'custom-background', apply_filters( 'twentysixteen_custom_background_args', array(
		'default-color' => $default_background_color,
	) ) );

	/**
	 * Filter Twenty Sixteen custom-header support arguments.
	 *
	 * @since Twenty Sixteen 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-text-color     Default color of the header text.
	 *     @type int    $width                  Width in pixels of the custom header image. Default 1200.
	 *     @type int    $height                 Height in pixels of the custom header image. Default 280.
	 *     @type bool   $flex-height            Whether to allow flexible-height header images. Default true.
	 *     @type string $wp-head-callback       Callback function used to styles the header image and text
	 *                                          displayed on the blog.
	 * }
	 */
	add_theme_support( 'custom-header', apply_filters( 'twentysixteen_custom_header_args', array(
		'default-text-color'     => $default_text_color,
		'width'                  => 1200,
		'height'                 => 280,
		'flex-height'            => true,
		'wp-head-callback'       => 'twentysixteen_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'twentysixteen_custom_header_and_background' );

if ( ! function_exists( 'twentysixteen_header_style' ) ) :
/**
 * Styles the header text displayed on the site
 *
 * @since Twenty Sixteen 1.0
 *
 * @see twentysixteen_custom_header_and_background().
 */
function twentysixteen_header_style() {
	// If the header text option is untouched, let's bail.
	if ( display_header_text() ) :
		return;

	// If the header text has been hidden.
	else :
	?>
		<style type="text/css" id="twentysixteen-header-css">
			.site-branding {
				margin: 0 auto 0 0;
			}

			.site-title,
			.site-description {
				clip: rect(1px, 1px, 1px, 1px);
				position: absolute;
			}
		</style>
	<?php
	endif;
}
endif; // twentysixteen_header_style
