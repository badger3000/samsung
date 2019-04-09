<?php
$args = array(
  'category_name' => 'bottom-posts',
  'posts_per_page' => 3,
);
$query_bottom_posts = new WP_Query($args);
?>

<footer>
  <section class="client-blog">
    <div class="grid-container">
      <div class="flex-container flex-dir-column large-flex-dir-row">
        <?php
        // The Loop
        if ($query_bottom_posts->have_posts()) {
          //trying to get a "stagger effect" for each card to animate in, but looks like I would need to build something custom
          $number = 60;
          while ($query_bottom_posts->have_posts()) {

            $query_bottom_posts->the_post(); ?>
            <div data-aos="fade-up" data-aos-delay="<?php echo $number += 60?>" data-aos-offset="<?php echo $number += 60?>" data-aos-easing="ease-in" class="client-blog__item">
              <!-- check to see if a thumbnail is set-->
              <?php if (has_post_thumbnail($post->ID)) : ?>
                <!-- If there is, get the source URL for the thumbnail size-->
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>
                <div class="image" style="background-image:url('<?php echo $image[0]; ?>');"></div>
                <!-- If no thumbnail is set, use the default image in the theme-->
              <?php else : ?>
                <div class="image" style="background-image:url('<?php echo get_template_directory_uri() . '/assets/img/default-headshot.jpg' ?>');"></div>
              <?php endif; ?>

              <div class="author">
                <h5><?php the_author_meta('display_name', $user_id); ?></h5>
                <div class="company"><?php the_author_meta('company', $user_id); ?></div>
                <div class="quote">
                  <?php the_excerpt(); ?>
                </div>
              </div>
            </div>
          <?php }
      } else {
        echo 'sorry, no post found';
      }
      /* Restore original Post Data */
      wp_reset_postdata();
      ?>
      </div>
      <div class="client-blog__button">
        <button href="/" class="button button--full">view more</button>
      </div>
    </div>
  </section>
  
</footer>
<?php wp_footer(); ?>
</body>

</html>