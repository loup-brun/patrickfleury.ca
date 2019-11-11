<?php
// Template Name: Homepage

get_header(); ?>

<div class="container-fluid">

  <div class="header-img">
    <img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/header-home.jpg" width="1240" srcset="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/header-home-p-500.jpeg 500w" sizes="84vw" alt="" class="img-fluid">
  </div>
</div>
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

    <div class="row">
      <div class="col col-md-8">
        <figure class="figure-featured">
          <div class="figure-featured__image-wrapper">
            <a class="figure-featured__link overlay" href="#">
              <?php _e('View project', 'pfleury-wordpress'); ?>
              <span class="icon icon-arrow-medium-right"></span>
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
              <span class="icon icon-arrow-medium-right"></span>
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
              <span class="icon icon-arrow-medium-right"></span>
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
      <a class="h3" href="/work/">
        <?php _e('See All Projects', 'pfleury-wordpress'); ?> <span class="icon icon-arrow-medium-right"></span>
      </a>
    </footer>
  </div>
</section>


<section id="about" class="py-5 my-3">
  <div class="container">
    <div class="row">
      <div class="col col-sm-6">
        <p class="lead">
          I am a passionnate designer who loves helping you finding your way.
        </p>
      </div>
      <div class="col col-sm-6 d-flex flex-column align-items-end justify-content-end">
        <p class="lead">

          <a href="#" class="">
            <strong>About me</strong> <span class="icon icon-arrow-medium-right"></span>
          </a>

        </p>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <h3 class="text-center">What clients are saying</h3>

  <div class="swipe-js">
    <div class="swipe-js-wrap d-flex flex-row">
      <?php
      if (have_posts()) {
        while (have_posts()) { ?>
          <section class="swipe-js-slide d-flex flex-column justify-content-center">
            <div class="container d-flex justify-content-center">
              <blockquote class="big-quote">
                <p>Nous avons aimé travailler avec Patrick.</p>
                <cite>John Doe</cite>
              </blockquote>
              <?php
                    the_post();
                  //  the_content();
                ?>
            </div>
          </section>
          <section class="swipe-js-slide d-flex flex-column justify-content-center">
            <div class="container d-flex justify-content-center">
              <blockquote class="big-quote">
                <p>Nous avons aimé travailler avec Patrick.</p>
                <cite>John Doe</cite>
              </blockquote>
              <?php
                  //  the_content();
                ?>
            </div>
          </section>
        <?php
        }
      }
      ?>
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
<?php
get_footer();
