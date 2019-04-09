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
      //keep track of the post count 
      $postcount = 1;
      //Get all the post
      while ($query_top_posts->have_posts()) :
        //for ever other post, set some values
        if (($postcount % 2) == 0) {
          $animate_val1 = 'fade-left';
          $animate_val2 = 'fade-right';
        } else {
          $animate_val1 = 'fade-right';
          $animate_val2 = 'fade-left';
        }
        //get the post and render it
        $query_top_posts->the_post();
        ?>
        <article class="feedback__quote">
          <div class="grid-x grid-margin-x">
            <div data-aos="<?php echo $animate_val1; ?>" <?php post_class('cell small-12 large-6'); ?>>
              <!-- check to see if a thumbnail is set-->
              <?php if (has_post_thumbnail($post->ID)) : ?>
                <!-- If there is, get the source URL for the thumbnail size-->
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>
                <div class="feedback__image" style="background-image:url('<?php echo $image[0]; ?>');">
                  <!-- If no thumbnail is set, use the default image in the theme-->
                <?php else : ?>
                  <div class="feedback__image" style="background-image:url('<?php echo get_template_directory_uri() . '/assets/img/default-headshot.jpg' ?>');">
                  <?php endif; ?>
                  <svg width="412" height="293" xmlns="http://www.w3.org/2000/svg">
                    <g stroke-width="4" fill="none" fill-rule="evenodd" stroke-dasharray="0,16" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M2.842 2v300M17.92 2v300M32.999 2v300M48.077 2v300M63.155 2v300M78.234 2v300M93.312 2v300M108.39 2v300M123.468 2v300M138.547 2v300M153.625 2v300M168.703 2v300M183.781 2v300M198.86 2v300M213.938 2v300M229.016 2v300M244.094 2v300M259.173 2v300M274.251 2v300M289.33 2v300M304.407 2v300M319.486 2v300M334.564 2v300M349.642 2v300M364.72 2v300M379.799 2v300M394.877 2v300M409.955 2v300" />
                    </g>
                  </svg>
                </div>
              </div>
              <div data-aos="<?php echo $animate_val2; ?>" class="cell small-12 large-6">
                <div class="text"><?php the_excerpt(); ?></div>
                <span class="name"><?php the_author_meta('display_name', $user_id); ?></span>
                <span class="title"><?php the_author_meta('title', $user_id); ?>, <?php the_author_meta('company', $user_id); ?></span>
              </div>
            </div>
        </article>
        <?php
        //incament post
        $postcount++;
        //end when all post have been rendored
      endwhile;
    } else {
      echo 'sorry, no post found';
    }
    //Restore original Post Data
    wp_reset_postdata();
    ?>
    <!-- if have time will hook this up to an archive page -->
    <div class="feedback__button">
      <button class="button">View More</button>
    </div>
  </div>
</section>