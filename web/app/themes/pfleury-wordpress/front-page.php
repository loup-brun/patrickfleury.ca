<?php
// Template Name: Homepage

get_header(); ?>

<main class="main">
  <?php
  // Featured header image
  while (have_posts()): the_post();
  if (has_post_thumbnail()): ?>
  <header class="header-img">
    <div class="container-fluid content">

      <?php
      $homeFeaturedImage = get_the_post_thumbnail( $size = 'full' );
      the_post_thumbnail('full', array('class'=> 'img-fluid mb-3'));
      ?>
    </div>
  </header>
  <?php
  endif;
  endwhile;
  ?>

  <?php
  // Query projects
  $featured_projects = get_field('featured_projects');
  $featured_counter = 1;
  if ( $featured_projects ):
  ?>
  <section id="curated-projects" class="py-5">
    <div class="container">

      <h2 class="text-center mb-5"><?php _e('Latest additions', 'pfleury-wordpress'); ?></h2>

      <div class="row d-flex flex-row flex-wrap">
        <?php
        // variable must be called `$post`
        // see documentation: https://www.advancedcustomfields.com/resources/relationship/
        foreach($featured_projects as $post) {
          setup_postdata($post); ?>

        <?php if ($featured_counter % 3 === 0) { ?>
        <div class="col col-12 col-md-6">
        <?php } else if ($featured_counter % 2 === 0) { ?>
        <div class="col col-10 col-md-5 ml-md-3 mt-md-5">
        <?php } else { ?>
        <div class="col col-12 col-md-8">
        <?php } ?>

          <?php get_template_part('components/figure-featured'); ?>

        <?php $featured_counter++; ?>
        </div>
        <?php
        } // end forEach
        wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      </div>

      <footer class="footer--all-projects text-center mt-5">
        <a class="h3 bold-link" href="<?php if (pll_current_language() === 'en') { echo get_permalink( get_page_by_path( 'projects' ) ); } else { echo get_permalink( get_page_by_path( 'projets' ) ); } ?>">
          <?php _e('See All Projects', 'pfleury-wordpress'); ?> <span class="icon icon-arrow-medium-right"></span>
        </a>
      </footer>
    </div>
  </section>
  <?php wp_reset_query(); ?>
  <?php endif; ?>

  <?php
  // Link to about page
  $aboutPage = array();

  if (pll_current_language() === 'en') {
    $aboutPage = get_page_by_path('about');
  } else if (pll_current_language() === 'fr') {
    $aboutPage = get_page_by_path('a-propos');
  }

  if (!empty($aboutPage)) {
  ?>
  <section id="about" class="py-5 my-3">
    <div class="container content">
      <div class="row">
        <div class="col-lg-7 col-12">
          <p class="lead large-text">
            <?php echo get_the_excerpt($aboutPage->ID); ?>
          </p>
        </div>
        <div class="col-lg-5 col-12 d-flex flex-column align-items-end justify-content-end">
          <p class="lead">
            <a href="<?php the_permalink($aboutPage->ID); ?>" class="bold-link">
              <?php _e('About me', 'pfleury-wordpress'); ?> <span class="icon icon-arrow-medium-right"></span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <?php
  }
  ?>

  <?php
  while (have_posts()) : the_post();
  if (!empty(the_content())):
  ?>
  <section class="py-5" id="home-content">
    <div class="container content">
      <?php
      the_content();
      ?>
    </div>
  </section>
  <?php
  endif;
  endwhile;
  ?>

  <?php // Begin WIP

  $wipQuery = array();
  $wipQuery = new WP_Query( array('post_type' => 'wip', 'nopaging' => true) );

  if ($wipQuery->have_posts()) {
    $output = ''; // setup output string

    $output .= '<section id="instagram" class="py-3">';

    $output .= '
    <div class="container">
      <h2 class="h4 text-center">' . __('What I’ve been up to lately', 'pfleury-wordpress') . '</h2>
    </div>';

    $wip_posts_counter = 0;

    $output .= '
    <div class="swipe-js instagram-swipe" id="instagram-swipe">
      <div class="swipe-js-wrap d-flex flex-row">';

    while ($wipQuery->have_posts()) : $wipQuery->the_post();
      if ($wip_posts_counter % 4 === 0) {
        $output .= '
        <section class="swipe-js-slide d-flex flex-row align-items-start justify-content-between flex-wrap instagram-feed-slide">';
      }
      if ($wip_posts_counter < 12) { // max 12 posts
        if ($wip_posts_counter % 2) { // alternate class on even slides
        $output .= '
          <figure class="instagram-feed-figure mt-md-5">';
        } else {
        $output .= '
          <figure class="instagram-feed-figure">';
        }

        $output .= '<div class="instagram-feed-image" style="background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium_large')[0] . ')" role="img"></div>';
        $output .= '
            <figcaption>
              <small>
                — ' . the_date('Y.m.d', '', '', false) . '
              </small>
            </figcaption>
          </figure>';
        if ($wip_posts_counter % 4 === 3) {
          $output .= '
          </section>'; // close for each 4 posts
        }
        $wip_posts_counter++; // increment posts counter
      }
    endwhile; // End while().
    $output .= '
      </div>

      <footer class="swipe-js-numbers text-center">
        <span class="slider-number-current"></span>
        &nbsp;
        <span class="slider-number-separator">/</span>
        &nbsp;
        <span class="slider-number-total"></span>
      </footer>';

    if ($wip_posts_counter > 4) {
      $output .= '
      <button class="swipe-js-btn -prev">
        <div class="icon icon-arrow-left"></div>
      </button>
      <button class="swipe-js-btn -next">
        <div class="icon icon-arrow-right"></div>
      </button>';
    }
    $output .= '
    </div>
  </section>';

    // Return the HTML block.
    echo $output;
  } // End if().

  wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
  // End WIP ?>

</main>
<?php
get_footer();
