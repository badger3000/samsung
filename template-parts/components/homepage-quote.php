<?php 
// Grab values from the theme settings page 
$quote_url     = get_option('samsungnxt_image_url');
$quote_text   = get_option('samsungnxt_homepage_quote');
$quote_author  = get_option('samsungnxt_field_author');

?>
<section data-aos="zoom-in-up" class="customer customer__quote">
  <div class="grid-container">
    <div class="flex-container flex-dir-column large-flex-dir-row">
      <div class="flex-child-auto">
        <div class="customer__image" style="background-image:url('<?php echo $quote_url ?>');">
        </div>
      </div>
      <div class="flex-child-auto">
        <div class="customer__text customer__text--blockquote">
          <div class="text"><?php echo $quote_text ?></div>
          <div class="name"><?php echo $quote_author ?></div>
        </div>
      </div>
    </div>
  </div>
</section>