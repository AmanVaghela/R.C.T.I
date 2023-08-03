<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package easyconsulting
 */

/**
 *
 * @hooked easyconsulting_footer_start
 */
do_action( 'easyconsulting_action_before_footer' );

/**
 * Hooked - easyconsulting_footer_top_section -10
 * Hooked - easyconsulting_footer_section -20
 */
do_action( 'easyconsulting_action_footer' );

/**
 * Hooked - easyconsulting_footer_end. 
 */
do_action( 'easyconsulting_action_after_footer' );

wp_footer(); ?>

</body>  
</html>