<?php
$args = array(
  'category_name' => 'top-posts',
  'posts_per_page' => 3,
);
$query_top_posts = new WP_Query($args);
?>

<section class="feedback">
  <div class="grid-container">
    <header class="feedback__header">
      <h1><?php echo bloginfo('name'); ?></h1>
      <div class="sub-header"><?php echo bloginfo('description'); ?></div>
    </header>
    <?php
    // The Loop
    if ($query_top_posts->have_posts()) {

      while ($query_top_posts->have_posts()) {
        $query_top_posts->the_post(); ?>
        <article class="feedback__quote">
          <div class="grid-x grid-margin-x">
            <div <?php post_class('cell small-12 large-6');?>>
               <!-- check to see if a thumbnail is set-->
               <?php if (has_post_thumbnail( $post->ID ) ): ?>
              <!-- If there is, get the source URL for the thumbnail size-->
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>
                <div class="feedback__image" style="background-image:url('<?php echo $image[0]; ?>');"></div>
              <!-- If no thumbnail is set, use the default image in the theme-->
              <?php else: ?>
                <div class="feedback__image" style="background-image:url('<?php echo get_template_directory_uri() . '/assets/img/default-headshot.jpg' ?>');"></div>
              <?php endif; ?>
              <!-- <div class="feedback__image" style="background-image:url('<?php echo get_template_directory_uri() . '/assets/img/default-headshot.jpg' ?>');"></div> -->
            </div>
            <div class="cell small-12 large-6">
              <div class="text">Thank guys, keep up the great work! chamer should be nominated for service of the year. you won't regret it</div>
              <span class="name">Albert Donko</span>
              <span class="title">CEO, Squaround</span>
            </div>
          </div>
        </article>
      <?php }
  } else {
    echo 'sorry, no post found';
  }
  /* Restore original Post Data */
  wp_reset_postdata();
  ?>
    <!-- 
    <article class="feedback__quote">
      <div class="grid-x grid-margin-x">
        <div class="cell small-12 large-6 large-order-2">
          <div class="feedback__image">
            <img class="image" src="<?php echo get_template_directory_uri() . '/assets/img/default-headshot.jpg' ?>" />
          </div>
        </div>
        <div class="cell small-12 large-6">
          <p>Thank guys, keep up the great work! chamer should be nominated for service of the year. you won't regret it</p>
          <span class="name">Albert Donko</span>
          <span class="title">CEO, Squaround</span>
        </div>
      </div>
    </article>


    <article class="feedback__quote">
      <div class="grid-x grid-margin-x">
        <div class="cell small-12 large-6">
          <div class="feedback__image">
            <img class="image" src="<?php echo get_template_directory_uri() . '/assets/img/default-headshot.jpg' ?>" />
          </div>
        </div>
        <div class="cell small-12 large-6">
          <p>Thank guys, keep up the great work! chamer should be nominated for service of the year. you won't regret it</p>
          <span class="name">Albert Donko</span>
          <span class="title">CEO, Squaround</span>
        </div>
      </div>
    </article> -->


    <div class="feedback__button">
      <button class="button">View More</button>
    </div>
  </div>
</section>