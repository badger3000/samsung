<?php
$args = array(
  'post_type' => 'cards'
);
//custom post type Query
$query_cards = new WP_Query($args);
//custom post type object
$post_object = get_post_type_object('cards');
?>

<section class="ourTeam">
  <header class="ourTeam__header">
    <!-- use the post type description for the title -->
    <h2><?php echo  $post_object->description; ?></h2>
    <div class="ourTeam__navigation">
      <button class="flickity-button flickity-prev-next-button flickity-button--previous" type="button" aria-label="Previous">
        <svg class="flickity-button-icon" viewBox="0 0 100 100">
          <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
        </svg>
      </button>
      <button class="flickity-button flickity-prev-next-button flickity-button--next" type="button" aria-label="Next"><svg class="flickity-button-icon" viewBox="0 0 100 100">
          <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
        </svg>
      </button>
    </div>
  </header>

  <div class="ourTeam__cards">
    <?php
    // The Loop
    if ($query_cards->have_posts()) {

      while ($query_cards->have_posts()) {
        $query_cards->the_post(); ?>
        <div class="carousel-cell">
          <article data-aos="flip-left" data-aos-offset="400" class="card">
            <div class="blockquote">
              <?php echo get_the_excerpt(); ?>
            </div>
            <div class="author">
              <!-- check to see if a thumbnail is set-->
              <?php if (has_post_thumbnail($post->ID)) : ?>
                <!-- If there is, get the source URL for the thumbnail size-->
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                <div class="image" style="background-image:url('<?php echo $image[0]; ?>');"></div>
                <!-- If no thumbnail is set, use the default image in the theme-->
              <?php else : ?>
                <div class="image" style="background-image:url('<?php echo get_template_directory_uri() . '/assets/img/default-headshot.jpg' ?>');"></div>
              <?php endif; ?>
              <span class="name"><?php echo get_the_title() ?></span>
              <span class="title"><?php echo get_post_meta($post->ID, 'title', true); ?></span>
            </div>
          </article>
        </div>
      <?php }
  } else {
    echo 'sorry, no post found';
  }
  /* Restore original Post Data */
  wp_reset_postdata();
  ?>
  </div>
</section>