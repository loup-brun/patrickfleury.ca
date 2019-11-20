<?php
// Template Name: Homepage

get_header(); ?>

<main class="main">
  <?php
  // Featured header image
  while (have_posts()): the_post();
  if (has_post_thumbnail()): ?>

  <header class="header-img">
    <div class="container-fluid">

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
  <section id="instagram" class="py-3">
    <div class="container">
      <h3 class="text-center"><?php _e('What I’ve been up to lately'); ?></h3>
    </div>

    <div class="swipe-js instagram-swipe" id="instagram-swipe">
      <div class="swipe-js-wrap d-flex flex-row">
        <section class="swipe-js-slide d-flex flex-row align-items-start justify-content-between flex-wrap instagram-feed-slide">
          <figure class="instagram-feed-figure">
            <a href="#" class="instagram-anchor">
              <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
              </div>
            </a>
            <figcaption>
              <small>
                — 2019.09.01
              </small>
            </figcaption>
          </figure>
          <figure class="instagram-feed-figure mt-md-5">
            <a href="#" class="instagram-anchor">
              <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
              </div>
            </a>
            <figcaption>
              <small>
                — 2019.09.01
              </small>
            </figcaption>
          </figure>
          <figure class="instagram-feed-figure">
            <a href="#" class="instagram-anchor">
              <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
              </div>
            </a>
            <figcaption>
              <small>
                — 2019.09.01
              </small>
            </figcaption>
          </figure>
          <figure class="instagram-feed-figure mt-md-5">
            <a href="#" class="instagram-anchor">
              <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
              </div>
            </a>
            <figcaption>
              <small>
                — 2019.09.01
              </small>
            </figcaption>
          </figure>
        </section>
        <section class="swipe-js-slide d-flex flex-row align-items-start justify-content-between flex-wrap instagram-feed-slide">
          <figure class="instagram-feed-figure">
            <a href="#" class="instagram-anchor">
              <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
              </div>
            </a>
            <figcaption>
              <small>
                — 2019.09.01
              </small>
            </figcaption>
          </figure>
          <figure class="instagram-feed-figure mt-md-5">
            <a href="#" class="instagram-anchor">
              <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
              </div>
            </a>
            <figcaption>
              <small>
                — 2019.09.01
              </small>
            </figcaption>
          </figure>
          <figure class="instagram-feed-figure">
            <a href="#" class="instagram-anchor">
              <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
              </div>
            </a>
            <figcaption>
              <small>
                — 2019.09.01
              </small>
            </figcaption>
          </figure>
          <figure class="instagram-feed-figure mt-md-5">
            <a href="#" class="instagram-anchor">
              <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
              </div>
            </a>
            <figcaption>
              <small>
                — 2019.09.01
              </small>
            </figcaption>
          </figure>
        </section>
        <section class="swipe-js-slide d-flex flex-row align-items-start justify-content-between flex-wrap instagram-feed-slide">
          <figure class="instagram-feed-figure">
            <a href="#" class="instagram-anchor">
              <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
              </div>
            </a>
            <figcaption>
              <small>
                — 2019.09.01
              </small>
            </figcaption>
          </figure>
          <figure class="instagram-feed-figure mt-md-5">
            <a href="#" class="instagram-anchor">
              <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
              </div>
            </a>
            <figcaption>
              <small>
                — 2019.09.01
              </small>
            </figcaption>
          </figure>
          <figure class="instagram-feed-figure">
            <a href="#" class="instagram-anchor">
              <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
              </div>
            </a>
            <figcaption>
              <small>
                — 2019.09.01
              </small>
            </figcaption>
          </figure>
          <figure class="instagram-feed-figure mt-md-5">
            <a href="#" class="instagram-anchor">
              <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
              </div>
            </a>
            <figcaption>
              <small>
                — 2019.09.01
              </small>
            </figcaption>
          </figure>
        </section>
      </div>
      <footer class="swipe-js-numbers text-center">
        <span class="slider-number-current"></span>
        &nbsp;
        <span class="slider-number-separator">/</span>
        &nbsp;
        <span class="slider-number-total"></span>
      </footer>
      <button class="swipe-js-btn -prev">
        <div class="icon icon-arrow-left"></div>
      </button>
      <button class="swipe-js-btn -next">
        <div class="icon icon-arrow-right"></div>
      </button>
    </div>
  </section>

  <?php
  // Query projects
  $featuredProjectsQuery = array();
  $featuredProjectsCounter = 1;

  if (pll_current_language() === 'fr') {
    $featuredProjectsQuery = new WP_Query( array('category_name' => 'projets', 'orderby' => 'weight', 'order' => 'ASC', 'meta_key' => 'featured') );
  } else if (pll_current_language() === 'en') {
    $featuredProjectsQuery = new WP_Query( array('category_name' => 'projects', 'order' => 'weight', 'order_by' => 'ASC') );
  }

  if ($featuredProjectsQuery->have_posts()): ?>
  <section id="curated-projects" class="py-5">
    <div class="container">

      <h2 class="text-center mb-5">Latest additions</h2>

      <div class="row d-flex flex-row flex-wrap">
        <?php while ($featuredProjectsQuery->have_posts()) : $featuredProjectsQuery->the_post(); ?>

        <?php // Cycle through the different layouts ?>
        <?php if ($featuredProjectsCounter % 3 === 0) { ?>
        <div class="col col-12 col-md-6">
        <?php } else if ($featuredProjectsCounter % 2 === 0) { ?>
        <div class="col col-10 col-md-5 ml-md-3 mt-md-5">
        <?php } else { ?>
        <div class="col col-12 col-md-8">
        <?php } ?>
          <?php get_template_part('components/figure-featured'); ?>
        </div>
        <?php $featuredProjectsCounter++; ?>
        <?php endwhile; // end of the projects loop. ?>
      </div>

      <footer class="footer--all-projects text-center mt-5">
        <a class="h3 bold-link" href="<?php if (pll_current_language() === 'en') { echo get_permalink( get_page_by_path( 'work' ) ); } else { echo get_permalink( get_page_by_path( 'travail' ) ); } ?>">
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
        <div class="col col-sm-7">
          <p class="lead large-text">
            <?php echo get_the_excerpt($aboutPage->ID); ?>
          </p>
        </div>
        <div class="col col-sm-5 d-flex flex-column align-items-end justify-content-end">
          <p class="lead">
            <a href="<?php the_permalink($aboutPage->ID); ?>" class="bold-link">
              About me <span class="icon icon-arrow-medium-right"></span>
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

  <section class="py-5" id="testimonials">
    <h3 class="text-center"><?php _e('What clients are saying', 'pfleury-wordpress'); ?></h3>
    <?php
    // Query testimonials
    $testimonialsQuery = array();

    if (pll_current_language() === 'fr') {
      $testimonialsQuery = new WP_Query( array('category_name' => 'Témoignages', 'nopaging' => true, 'orderby' => 'weight', 'order' => 'ASC') );
    } else if (pll_current_language() === 'en') {
      $testimonialsQuery = new WP_Query( array('category_name' => 'Testimonials', 'nopaging' => true, 'orderby' => 'weight', 'order' => 'ASC' ) );
    }

    if ($testimonialsQuery->have_posts()) { ?>
    <div class="swipe-js">
      <div class="swipe-js-wrap d-flex flex-row">
        <?php while ($testimonialsQuery->have_posts()) : $testimonialsQuery->the_post(); ?>

        <section class="swipe-js-slide d-flex flex-column justify-content-center">
          <div class="container d-flex justify-content-center">
            <blockquote class="big-quote">
              <?php the_content(); ?>
              <?php if (get_field('testimony_author')): ?>
              <cite><?php echo get_field('testimony_author'); ?></cite>
              <?php endif; ?>
            </blockquote>
          </div>
        </section>

        <?php endwhile; ?>
      </div>
      <?php if (sizeof($testimonialsQuery->posts) > 1): ?>
      <button class="swipe-js-btn -prev">
        <div class="icon icon-arrow-left"></div>
      </button>
      <button class="swipe-js-btn -next">
        <div class="icon icon-arrow-right"></div>
      </button>
      <nav class="swipe-js-nav text-center">
      </nav>
      <?php endif; ?>
    </div>
    <?php } else  { ?>
    <div class="text-center">
      No slides!
    </div>
    <?php } ?>
  </section>

  <section class="section-cta py-5 bg-yellow">
    <div class="container">
      <span class="h2 font-weight-normal mb-3">
        <?php _e('Convinced? Reach out!'); ?>
      </span>

      <p class="lead">
        <nav class="nav nav-links">
          <?php if (get_theme_mod('business_email')) { ?>
          <!-- Email -->
          <a href="mailto:<?php echo get_theme_mod('business_email'); ?>" class="mr-4">
            <?php _e('Email'); ?>
          </a>
          <?php } ?>
          <?php if (get_theme_mod('business_phone')) { ?>
          <!-- Phone -->
          <a href="tel:<?php echo get_theme_mod('business_phone'); ?>">
            <?php echo get_theme_mod('business_phone'); ?>
          </a>
          <?php } ?>
        </nav>
      </p>
    </div>
  </section>
</main>
<?php
get_footer();
