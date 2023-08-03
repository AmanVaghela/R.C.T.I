<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package easyconsulting
 */
/**
* Hook - easyconsulting_action_doctype.
*
* @hooked easyconsulting_doctype -  10
*/
do_action( 'easyconsulting_action_doctype' );
?>
<head>
<?php
/**
* Hook - easyconsulting_action_head.
*
* @hooked easyconsulting_head -  10
*/
do_action( 'easyconsulting_action_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<?php

/**
* Hook - easyconsulting_action_before.
*
* @hooked easyconsulting_page_start - 10
*/
do_action( 'easyconsulting_action_before' );

/**
*
* @hooked easyconsulting_header_start - 10
*/
do_action( 'easyconsulting_action_before_header' );

/**
*
*@hooked easyconsulting_site_branding - 10
*@hooked easyconsulting_header_end - 15 
*/
do_action('easyconsulting_action_header');

/**
*
* @hooked easyconsulting_content_start - 10
*/
do_action( 'easyconsulting_action_before_content' );

/**
 * Banner start
 * 
 * @hooked easyconsulting_banner_header - 10
*/
do_action( 'easyconsulting_banner_header' );  
