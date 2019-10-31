<?php
// Template Name: Homepage

get_header(); ?>

<div class="container-fluid">

  <div class="header-img">
    <img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/header-home.jpg" width="1240" srcset="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/header-home-p-500.jpeg 500w" sizes="84vw" alt="" class="img-fluid">
  </div>
</div>
<section id="instagram">
  <div class="container">
    <h3 class="text-center"><?php _e('What I’ve been up to lately'); ?></h3>
  </div>

  <div class="swipe-js instagram-swipe" id="instagram-swipe">
    <div class="swipe-js-wrap d-flex flex-row">
      <section class="swipe-js-slide d-flex flex-row align-items-start justify-content-between flex-wrap instagram-feed-slide">
        <figure class="instagram-feed-figure">
          <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
          </div>
          <figcaption>
            <small>
              –2019.09.01
            </small>
          </figcaption>
        </figure>
        <figure class="instagram-feed-figure mt-md-5">
          <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
          </div>
          <figcaption>
            <small>
              –2019.09.01
            </small>
          </figcaption>
        </figure>
        <figure class="instagram-feed-figure">
          <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
          </div>
          <figcaption>
            <small>
              –2019.09.01
            </small>
          </figcaption>
        </figure>
        <figure class="instagram-feed-figure mt-md-5">
          <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
          </div>
          <figcaption>
            <small>
              –2019.09.01
            </small>
          </figcaption>
        </figure>
      </section>
      <section class="swipe-js-slide d-flex flex-row align-items-start justify-content-between flex-wrap instagram-feed-slide">
        <figure class="instagram-feed-figure">
          <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
          </div>
          <figcaption>
            <small>
              –2019.09.01
            </small>
          </figcaption>
        </figure>
        <figure class="instagram-feed-figure mt-md-5">
          <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
          </div>
          <figcaption>
            <small>
              –2019.09.01
            </small>
          </figcaption>
        </figure>
        <figure class="instagram-feed-figure">
          <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
          </div>
          <figcaption>
            <small>
              –2019.09.01
            </small>
          </figcaption>
        </figure>
        <figure class="instagram-feed-figure mt-md-5">
          <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
          </div>
          <figcaption>
            <small>
              –2019.09.01
            </small>
          </figcaption>
        </figure>
      </section>
      <section class="swipe-js-slide d-flex flex-row align-items-start justify-content-between flex-wrap instagram-feed-slide">
        <figure class="instagram-feed-figure">
          <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
          </div>
          <figcaption>
            <small>
              –2019.09.01
            </small>
          </figcaption>
        </figure>
        <figure class="instagram-feed-figure mt-md-5">
          <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
          </div>
          <figcaption>
            <small>
              –2019.09.01
            </small>
          </figcaption>
        </figure>
        <figure class="instagram-feed-figure">
          <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
          </div>
          <figcaption>
            <small>
              –2019.09.01
            </small>
          </figcaption>
        </figure>
        <figure class="instagram-feed-figure mt-md-5">
          <div class="instagram-feed-image" style="background-image: url('https://source.unsplash.com/random')" role="img">
          </div>
          <figcaption>
            <small>
              –2019.09.01
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

<div class="container-fluid">

  <h1>Heading 1</h1>
  <h2 >Heading 2</h2>
  <h2 class="text-center">Heading 2</h2>
  <h3>Heading 3</h3>
  <h3 class="text-center">Heading 3</h3>
  <h4>Heading 4</h4><a href="#" class="cta-button-left w-inline-block w-clearfix">
  <img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/cta-arrow-left.svg" alt="" class="cta-arrow">


  <?php
    while (have_posts() ) : the_post();
      the_content();
    endwhile
  ?>


  <div class="cta-button-left link"><strong>About me</strong></div></a>

  <a href="#" class="cta-button-right w-inline-block">
    <div class="cta-button-right link">
      <strong>About me</strong> <span class="icon icon-arrow-medium-right"></span>
    </div>
    <img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/cta-arrow-right.svg" alt="" class="cta-arrow">
  </a>

  <a href="#" class="link">
      Text Link
  </a>
  <div class="p">This is some text inside of a div block.</div>

  <div class="link-social w-clearfix">
    <div class="animated-link">Facebook</div>

    <img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/hover-fleche.svg" alt="" class="fleche-media">
  </div>
</div>

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

<section class="section--projects">
  <div class="content container">
    <h2 class="text-center">Latest additions</h2>

    <footer class="footer--all-projects text-center">
      <a class="h3" href="/work/">
        <?php _e('See All Projects', 'pfleury-wordpress'); ?> <span class="icon icon-arrow-medium-right"></span>
      </a>
    </footer>
  </div>
</section>
<section class="about-me py-5">
  <div class="container-fluid content">
    <div class="desc-studio">I am a passionnate designer who loves helping you finding your way.</div>

    <a href="#" class="cta-button-right w-inline-block">
      <div class="cta-button-right link"><strong>About me</strong></div>
      <img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/cta-arrow-right.svg" data-w-id="91fe89bd-2882-2ec6-d642-c30fd3b6ba69" alt="" class="cta-arrow">
    </a>
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
