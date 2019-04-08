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
?>

<section class="customer customer__quote">
  <div class="grid-container">
    <div class="flex-container flex-dir-column large-flex-dir-row">
      <div class="flex-child-auto">
        <div class="customer__image" style="background-image:url('<?php echo get_template_directory_uri() . '/assets/img/default-headshot.jpg' ?>');">
        </div>
      </div>
      <div class="flex-child-auto">
        <div class="customer__text customer__text--blockquote">
          <div class="text">It really saves me time and effort. Chamer is exactly what our business has been lacking. Chamer was worth a fortune to my company. Absolutely wonderful!</div>
          <div class="name">Alex Parkinson</div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
//global footer
get_footer();

?>

