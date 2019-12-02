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

  <?php echo do_shortcode('[catch-instagram-feed-gallery-widget username="_loupbrun" access_token="2282534268.63da809.22f251ffa6c94c55822f9cfa90c28d3c" title="What I’ve been up to lately"]'); ?>

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

      <h2 class="text-center mb-5"><?php _e('Latest additions', 'pfleury-wordpress'); ?></h2>

      <div class="row d-flex flex-row flex-wrap">
        <?php while ($featuredProjectsQuery->have_posts()) : $featuredProjectsQuery->the_post(); ?>

        <?php // Cycle through the different layouts ?>
        <?php if ($featuredProjectsCounter % 3 === 0) { ?>
        <div class="col col-12 col-md-6">
        <?php } else if ($featuredProjectsCounter % 2 === 0) { ?>
        <div class="col col-10 col-md-5 ml-md-3 mt-md-5 -ratio-1-1">
        <?php } else { ?>
        <div class="col col-12 col-md-8">
        <?php } ?>
          <?php get_template_part('components/figure-featured'); ?>
        </div>
        <?php $featuredProjectsCounter++; ?>
        <?php endwhile; // end of the projects loop. ?>
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
        <div class="col col-md-7 col-12">
          <p class="lead large-text">
            <?php echo get_the_excerpt($aboutPage->ID); ?>
          </p>
        </div>
        <div class="col col-md-5 col-12 d-flex flex-column align-items-end justify-content-end">
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
</main>
<?php
get_footer();
