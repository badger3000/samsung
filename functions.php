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

// Theme support options
require_once(get_template_directory().'/inc/theme-support.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/inc/enqueue-scripts.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/inc/cleanup.php'); 

// Remove Emoji Support
require_once(get_template_directory().'/inc/disable-emoji.php');

// Use this as a template for custom post types
require_once(get_template_directory().'/inc/custom-post-type.php');

// Theme support options
require_once(get_template_directory().'/inc/admin/theme-settings.php'); 

// More Author fields
require_once(get_template_directory().'/inc/admin/author-fields.php'); 
 ?>