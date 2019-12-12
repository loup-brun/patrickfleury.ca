<?php
// Template Name: Projects List (Work)
// Index page to display work (projects)

get_header();
?>

<main class="main content">
  <article class="container-fluid">

    <h1 class="mb-5">
      <?php
      if(is_tag()) {
        single_tag_title(_e('Explore my work', 'pfleury-wordpress') . ' / ');
      } else if (is_404()) {
        echo 'Whoops! 404';
      } else {
        _e('Explore my work', 'pfleury-wordpress');
      }
      ?>
    </h1>

    <?php
    if (is_home() || is_archive() || is_tag()) {
      // Query projects
      $projectsQuery = array();
      $projectsCounter = 1;
      $tags = '';

      if (is_tag()) {
        $tags =single_tag_title('', false);
      }

      if (pll_current_language() === 'fr') {
        $projectsQuery = new WP_Query( array('category_name' => 'projets', 'orderby' => 'weight', 'order' => 'ASC', 'nopaging' => true, 'tag' => $tags) );
      } else if (pll_current_language() === 'en') {
        $projectsQuery = new WP_Query( array('category_name' => 'projects', 'order' => 'weight', 'order_by' => 'ASC', 'nopaging' => true, 'tag' => $tags) );
      }

      if ($projectsQuery->have_posts()): ?>
      <div class="row">
        <?php while ($projectsQuery->have_posts()) : $projectsQuery->the_post(); ?>

        <?php // Cycle through the different layouts ?>
        <?php if ($projectsCounter % 7 === 0) { ?>
        <div class="col-12 col-md-8 mb-3">
        <?php } else if ($projectsCounter % 6 === 0) { ?>
        <div class="col-12 col-md-4 align-items-center mb-3">
        <?php } else if ($projectsCounter % 5 === 0) { ?>
        <div class="col-12 col-md-4 d-flex flex-column justify-content-center mb-3">
        <?php } else if ($projectsCounter % 4 === 0) { ?>
        <div class="col-12 col-md-8 align-items-center mb-3">
        <?php } else if ($projectsCounter % 3 === 0) { ?>
        <div class="col-12 col-md-5 mb-3">
        <?php } else if ($projectsCounter % 2 === 0) { ?>
        <div class="col-12 col-md-6 mr-auto mb-3">
        <?php } else { ?>
        <div class="col-12 col-md-12 mb-3">
        <?php } ?>
          <?php get_template_part('components/figure-featured'); ?>
        </div>
        <?php $projectsCounter++; ?>
        <?php if ($projectsCounter === 8) { $projectsCounter = 1; } ?>
        <?php endwhile; // end of the projects loop. ?>
      </div>
      <?php endif; ?>

    <?php } ?>

    <?php if (is_404()) { ?>
    <p class="lead text-center mt-5 pt-5">
      <?php  _e('We Could Not Find That :(', 'pfleury-wordpress'); ?>
    </p>
    <p class="lead text-center mt-5">
      <a href="<?php echo home_url(); ?>" class="bold-link">
        <span class="icon icon-arrow-medium-left"></span>
        <?php  _e('Go Back Home?', 'pfleury-wordpress'); ?></a>
    </p>
    <?php } ?>
    <?php wp_reset_postdata(); ?>
  </article>
</main>

<?php
get_footer();
