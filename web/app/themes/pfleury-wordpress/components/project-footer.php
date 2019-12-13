<footer class="footer-project py-5 mt-5">

  <section class="footer-project__credits">
    <div class="row">
      <div class="col-12 col-md-6 mb-3">
        <span class="h1"><?php _e('Thank You!', 'pfleury-wordpress'); ?></span>
      </div>

      <?php
      $credits = get_field('project_credits');

      if ($credits) {
      ?>
      <!-- Credits -->
      <div class="col-12 col-md-6 mt-md-5">
        <h5 class="mb-2 mb-md-3"><?php _e('Complete Credits', 'pfleury-wordpress'); ?></h5>

        <div class="content ml-md-5 small">
          <?php
            echo $credits;
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  <?php
      $related_projects = get_field('related_projects');
      $related_counter = 0;
      if ( $related_projects && $related_counter < 1 ) {
  ?>
  <section class="footer-project__related py-5">
    <h3 class="text-center mb-5"><?php _e('You Might Also Enjoy These Projects', 'pfleury-wordpress'); ?></h3>
    <div class="row">
      <?php
        // variable must be called `$post`
        // see documentation: https://www.advancedcustomfields.com/resources/relationship/
        foreach($related_projects as $post) {
          setup_postdata($post); ?>

      <div class="col-12 col-md-6">
        <?php get_template_part('components/figure-featured'); ?>
      </div>

      <?php
          $related_counter++;
        } // end forEach
        wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
      ?>
    </div>
  </section>
  <?php } // end if ?>

  <div class="footer-project__back text-center mt-5">
    <?php // get projects index page
    $work_url = pll_current_language() === 'fr' ? '/fr/projets/' : '/en/projects/';
    ?>
    <a class="h3 bold-link" href="<?php echo $work_url; ?>">
      <span class="icon icon-arrow-medium-left"></span> <?php _e('Back to all projects', 'pfleury-wordpress'); ?>
    </a>
  </div>
</footer>
