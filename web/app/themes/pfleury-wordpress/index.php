<?php
// Template Name: Projects List (Work)
// Index page to display work (projects)

get_header();
?>

<main class="main content">
  <article class="container-fluid">

    <h1 class="mb-5">
      <?php _e('Explore my work', 'pfleury-wordpress'); ?>
    </h1>

    <?php
    // Query projects
    $projectsQuery = array();
    $projectsCounter = 1;

    if (pll_current_language() === 'fr') {
      $projectsQuery = new WP_Query( array('category_name' => 'projets', 'orderby' => 'weight', 'order' => 'ASC') );
    } else if (pll_current_language() === 'en') {
      $projectsQuery = new WP_Query( array('category_name' => 'projects', 'order' => 'weight', 'order_by' => 'ASC') );
    }

    if ($projectsQuery->have_posts()): ?>
    <div class="row">
      <?php while ($projectsQuery->have_posts()) : $projectsQuery->the_post(); ?>

      <?php // Cycle through the different layouts ?>
      <?php if ($projectsCounter % 7 === 0) { ?>
      <div class="col col-md-8">
      <?php } else if ($projectsCounter % 6 === 0) { ?>
      <div class="col col-md-4 align-items-center">
      <?php } else if ($projectsCounter % 5 === 0) { ?>
      <div class="col col-md-4 d-flex flex-column justify-content-center">
      <?php } else if ($projectsCounter % 4 === 0) { ?>
      <div class="col col-md-8 align-items-center">
      <?php } else if ($projectsCounter % 3 === 0) { ?>
      <div class="col col-md-5">
      <?php } else if ($projectsCounter % 2 === 0) { ?>
      <div class="col col-6 mr-auto">
      <?php } else { ?>
      <div class="col col-md-12">
      <?php } ?>
        <?php get_template_part('components/figure-featured'); ?>
      </div>
      <?php $projectsCounter++; ?>
      <?php if ($projectsCounter === 8) { $projectsCounter = 1; } ?>
      <?php endwhile; // end of the projects loop. ?>
    </div>
    <?php endif; ?>

  </article>
</main>

<?php
get_footer();

