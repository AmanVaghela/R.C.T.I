<?php
/**
 * Default theme options.
 *
 * @package easyconsulting
 */

if ( ! function_exists( 'easyconsulting_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function easyconsulting_get_default_theme_options() {

	$defaults = array();

	// Top Bar
	$defaults['show_header_contact_info'] 		= false;
    $defaults['show_header_social_links'] 		= false;
    $defaults['header_social_links']			= array();

	// Colors
	$defaults['top_bar_color'] 							= '#2196f3';
	$defaults['custom_theme_color'] 					= '#2196f3';

	// Theme Options
	$defaults['layout_options_blog']					= 'no-sidebar';
	$defaults['layout_options_archive']					= 'no-sidebar';
	$defaults['layout_options_page']					= 'no-sidebar';	
	$defaults['layout_options_single']					= 'right-sidebar';	
	$defaults['excerpt_length']							= 25;
	$defaults['readmore_text']							= esc_html__('Learn More','easyconsulting');
	$defaults['show_blog_posts_image']		    		= 'image-enable';
	$defaults['show_blog_posts_category']				= 'category-enable';
	$defaults['show_blog_posts_title']		    		= 'title-enable';
	$defaults['show_blog_posts_content']				= 'content-enable';
	$defaults['show_blog_posts_button']		    		= 'button-enable';

	//Footer section 		
	$defaults['copyright_text']							= esc_html__( '&copy; Copyright 2021 easyconsulting. All Rights Reserved.', 'easyconsulting' );

	// Pass through filter.
	$defaults = apply_filters( 'easyconsulting_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'easyconsulting_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function easyconsulting_get_option( $key ) {

		$default_options = easyconsulting_get_default_theme_options();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;