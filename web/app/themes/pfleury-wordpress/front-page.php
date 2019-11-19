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
      the_post_thumbnail('full', array('class'=> 'img-fluid'));
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

  <section id="curated-projects" class="py-5">
    <div class="container">

      <h2 class="text-center mb-5">Latest additions</h2>

      <?php
      $latestProjects = new WP_Query( array('tags' => 'featured') );
      wp_reset_query();
      ?>

      <div class="row">
        <div class="col col-md-8">
          <figure class="figure-featured">
            <div class="figure-featured__image-wrapper">
              <a class="figure-featured__link overlay" href="#">
                <?php _e('View project', 'pfleury-wordpress'); ?>
              </a>
              <img class="figure-featured__img img-fluid"
                   src="https://source.unsplash.com/random/1200x900"
                   alt="Project title" />
            </div>
            <figcaption class="figure-featured__caption mt-2">
              <strong class="figure-featured__title">Project Title</strong>

              —
              <span class="figure-featured__tags">Branding, Print</span>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="row">
        <div class="col col-md-5 mt-5 ml-md-4">
          <figure class="figure-featured">
            <div class="figure-featured__image-wrapper">
              <a class="figure-featured__link overlay" href="#">
                <?php _e('View project', 'pfleury-wordpress'); ?>
              </a>
              <img class="figure-featured__img img-fluid"
                   src="https://source.unsplash.com/random/900x900"
                   alt="Project title" />
            </div>
            <figcaption class="figure-featured__caption mt-2">
              <strong class="figure-featured__title">Project Title</strong>

              —
              <span class="figure-featured__tags">Branding, Print</span>
            </figcaption>
          </figure>
        </div>
        <div class="col col-md-6">
          <figure class="figure-featured">
            <div class="figure-featured__image-wrapper">
              <a class="figure-featured__link overlay" href="#">
                <?php _e('View project', 'pfleury-wordpress'); ?>
              </a>
              <img class="figure-featured__img img-fluid"
                   src="https://source.unsplash.com/random/1600x900"
                   alt="Project title" />
            </div>
            <figcaption class="figure-featured__caption mt-2">
              <strong class="figure-featured__title">Project Title</strong>

              —
              <span class="figure-featured__tags">Branding, Print</span>
            </figcaption>
          </figure>
        </div>
      </div>

      <footer class="footer--all-projects text-center mt-5">
        <a class="h3 bold-link" href="<?php if (pll_current_language() === 'en') { echo get_permalink( get_page_by_path( 'work' ) ); } else { echo get_permalink( get_page_by_path( 'travail' ) ); } ?>">
          <?php _e('See All Projects', 'pfleury-wordpress'); ?> <span class="icon icon-arrow-medium-right"></span>
        </a>
      </footer>
    </div>
  </section>

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
      $testimonialsQuery = new WP_Query( array('category_name' => 'Témoignages') );
    } else if (pll_current_language() === 'en') {
      $testimonialsQuery = new WP_Query( array('category_name' => 'Testimonies') );
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
      <button class="swipe-js-btn -prev">
        <div class="icon icon-arrow-left"></div>
      </button>
      <button class="swipe-js-btn -next">
        <div class="icon icon-arrow-right"></div>
      </button>
      <nav class="swipe-js-nav text-center">
      </nav>
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
        Convinced? Reach out!
      </span>

      <p class="lead">
        <nav class="nav nav-links">
          <a href="mailto:info@patrickfleury.ca" class="mr-4">
            Email
          </a>
          <a href="tel:+1514 865-7775" class="mr-4">
            +514&nbsp;865-7775
          </a>
        </nav>
      </p>
    </div>
  </section>
</main>
<?php
get_footer();
