<footer class="footer-project py-5 mt-5">

  <section class="footer-project__credits">
    <div class="row">
      <div class="col-12 col-md-6">
        <span class="h1 mb-3"><?php _e('Thank You!', 'pfleury-wordpress'); ?></span>
      </div>

      <div class="col-12 col-md-6 mt-5">
        <!-- Credits -->

        <h5><?php _e('Complete Credits', 'pfleury-wordpress'); ?></h5>

        <ul></ul>
      </div>
    </div>
  </section>

  <?php ?>
  <section class="footer-project__related py-5">
    <h3 class="text-center mb-5"><?php _e('You Might Also Enjoy These Projects', 'pfleury-wordpress'); ?></h3>
    <div class="row">
      <div class="col-12 col-md-6">
        <?php get_template_part('components/figure-featured'); ?>
      </div>
      <div class="col-12 col-md-6">
        <?php get_template_part('components/figure-featured'); ?>
      </div>
    </div>
  </section>
  <?php ?>

  <div class="footer-project__back text-center mt-5">
    <?php // get projects index page
    $work_url = pll_current_language() === 'fr' ? '/fr/travail/' : '/en/work/';
    $about_url = pll_current_language() === 'fr' ? '/en/a-propos/' : '/en/about/';
    ?>
    <a class="h3 bold-link" href="<?php echo $work_url; ?>">
      <span class="icon icon-arrow-medium-left"></span> <?php _e('Back to all projects', 'pfleury-wordpress'); ?>
    </a>
  </div>
</footer>
