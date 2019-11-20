<footer class="text-center">
  <?php // get projects index page
  $work_url = pll_current_language() === 'fr' ? '/fr/travail/' : '/en/work/';
  $about_url = pll_current_language() === 'fr' ? '/en/a-propos/' : '/en/about/';
  ?>
  <a class="h3 bold-link" href="<?php echo $work_url; ?>">
    <span class="icon icon-arrow-medium-left"></span> <?php _e('Back to all projects', 'pfleury-wordpress'); ?>
  </a>
</footer>
