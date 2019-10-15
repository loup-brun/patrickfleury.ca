<footer class="footer d-flex justify-content-between">
  <div class="copyright-text">
    &copy; <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?><?php if (!empty(get_bloginfo('description'))) { ?> &mdash; <?php echo bloginfo('description'); } ?>
    <?php
    if (!get_theme_mod('copyright_text')) {
      echo get_theme_mod('copyright_text');
    } else {
      echo __('All rights reserved.', 'pfleury-wordpress');
    }
    ?>
  </div>

  <nav class="footer-links contact-links">
    <a href="#"><?php __('phone', 'pfleury-wordpress'); ?></a>
    <a href="#"><?php __('email', 'pfleury-wordpress'); ?></a>
  </nav>

  <nav class="footer-links">
    <?php
    // Header Menu
    wp_nav_menu( array(
      'theme_location'=> 'footer-menu',
      'menu_class'    => 'navbar-nav',
      'container'     => 'ul',
    ) );
    ?>
  </nav>

  <a class="footer-credits-link ml-auto">
    <?php __('Credits', 'pfleury-wordpress'); ?>
  </a>
</footer>

<?php wp_footer(); ?>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
