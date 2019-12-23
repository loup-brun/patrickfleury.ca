<?php
// Template Name: About

get_header();
?>

<main class="main">
  <?php while (have_posts()) : the_post(); ?>
  <article class="content container-fluid">

    <?php if (has_post_thumbnail()) { ?>
    <header class="header-page-article my-3">
      <?php
        the_post_thumbnail('full', array('class'=> 'img-fluid mb-5 mt-0'));
      ?>
    </header>
    <?php } ?>

    <div class="row content">
      <section class="col-lg-4 mb-3">
        <h1 class="mt-0">
          <?php the_title(); ?>
        </h1>
      </section>

      <?php if (get_field('about_intro')): ?>
      <section class="col-lg-8 lead mb-5">
        <?php
        the_field('about_intro');
        ?>
      </section>
      <?php endif; ?>
    </div>

    <section class="content">
      <?php the_content(); ?>
    </section>

    <?php if (get_field('show_testimonials')): ?>
    <section class="py-5" id="testimonials">
      <h3 class="text-center"><?php _e('What clients are saying', 'pfleury-wordpress'); ?></h3>
      <?php
      // Query testimonials
      $testimonialsQuery = array();

      if (pll_current_language() === 'fr') {
        $testimonialsQuery = new WP_Query( array('post_type' => 'temoignage', 'nopaging' => true, 'orderby' => 'weight', 'order' => 'ASC') );
      } else if (pll_current_language() === 'en') {
        $testimonialsQuery = new WP_Query( array('post_type' => 'temoignage', 'nopaging' => true, 'orderby' => 'weight', 'order' => 'ASC' ) );
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
                <cite><?php echo get_field('testimony_author'); ?>
                  <?php if (get_field('testimony_company')): ?>
                    <br><span class="font-weight-normal"><?php echo get_field('testimony_company'); ?></span>
                  <?php endif; ?>
                </cite>
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
    <?php endif; // end testimonials ?>
  </article>

  <?php endwhile // end of the loop. ?>
</main>
<?php
get_footer();

