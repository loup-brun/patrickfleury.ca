<?php
// Template Name: Page

get_header();
?>

<main class="main">
  <?php while (have_posts()) : the_post(); ?>
  <article class="content">

    <header class="header-page-article container-fluid">

      <?php
      if (has_post_thumbnail()) {
        the_post_thumbnail('full');
      }
      ?>

      <section class="row mb-5">
        <div class="col-md-5">
          <h1 class="mt-0">
            <?php the_title(); ?>
          </h1>
        </div>

        <div class="col-md-7 section-page-meta mt-5 pb-3 lead">
          <?php the_excerpt(); ?>
        </div>
      </section>
    </header>

    <section class="container-fluid content">
      <?php the_content(); ?>
    </section>

    <?php if (get_field('show_testimonials')): ?>
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
    <?php endif; // end testimonials ?>
  </article>

  <?php endwhile // end of the loop. ?>
</main>
<?php
get_footer();

