<?php
/**
 * SAMSUNGNXT functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SAMSUNGNXT
 */

 // Uncomment to force error reporting (thwart White Screen of Death)
 //ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 'On');

// Register scripts and stylesheets
require_once(get_template_directory().'/inc/enqueue-scripts.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/inc/cleanup.php'); 

// Use this as a template for custom post types
require_once(get_template_directory().'/inc/custom-post-type.php');
 ?>