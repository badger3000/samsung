<?php 
/**
 * Template part for displaying the homepage
 */

//global header
get_header();

//first section 
get_template_part( 'template-parts/components/customer', 'feedback' );

//second section
get_template_part( 'template-parts/components/our-team');

//global footer
get_footer();

?>

