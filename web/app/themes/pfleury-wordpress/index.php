<?php get_header(); ?>

<div class="container-fluid">

  <div class="header-img">
    <img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/header-home.jpg" width="1240" srcset="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/header-home-p-500.jpeg 500w" sizes="84vw" alt="" class="img-fluid"></div>
  <h1>Heading 1</h1>
  <h2 >Heading 2</h2>
  <h2 class="text-center">Heading 2</h2>
  <h3>Heading 3</h3>
  <h3 class="text-center">Heading 3</h3>
  <h4>Heading 4</h4><a href="#" class="cta-button-left w-inline-block w-clearfix"><img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/cta-arrow-left.svg" alt="" class="cta-arrow"><div class="cta-button-left link"><strong>About me</strong></div></a>
  <a href="#" class="cta-button-right w-inline-block">
    <div class="cta-button-right link"><strong>About me</strong></div><img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/cta-arrow-right.svg" alt="" class="cta-arrow"></a><a href="#" class="link">Text Link</a>
  <div class="p">This is some text inside of a div block.</div>
  <div class="link-social w-clearfix">
    <div class="link-social">Facebook</div><img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/hover-fleche.svg" alt="" class="fleche-media"></div>
</div>

<section class="py-5">
  <h3 class="text-center"><strong>What I’ve been up to lately</strong></h3>

  <div class="swipe-js" data-animation="slide" data-duration="500" data-infinite="1" >
    <div class="swipe-js-wrap">
      <?php
      if (have_posts()) {
        while (have_posts()) { ?>
          <section class="swipe-js-slide">
            <div class="container">
              <?php the_post();
                    the_content();
                ?>
            </div>
          </section>
        <?php
        }
      }
      ?>
    </div>
    <button class="swipe-js-btn -prev">
      <div class="icon w-icon-slider-left"></div>
    </button>
    <button class="swipe-js-btn -next">
      <div class="icon-2 w-icon-slider-right"></div>
    </button>
    <nav class="swipe-js-nav">
    </nav>
  </div>
</section>

<section class="section--projects">
  <div class="content container">
    <h2 class="text-center">Latest additions</h2>
    <div class="w-dyn-list">
      <div class="w-dyn-items">
        <div class="w-dyn-item"><img src="" alt="" class="img-accueil">
          <div class="identification---projet w-clearfix">
            <div class="footer-titre-projet"></div><img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/tiret.svg" alt="Separateur" class="tiret">
            <div class="footer-tag-projets"></div>
          </div>
        </div>
      </div>
      <div class="w-dyn-empty">
        <div>No items found.</div>
      </div>
    </div>
    <a href="#" class="cta-button-right w-inline-block">
      <div class="cta-button-right link"><strong>See all projects</strong></div><img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/cta-arrow-right.svg" alt=""></a>
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
