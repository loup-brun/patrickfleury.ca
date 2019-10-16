<footer class="footer">
  <div class="container-fluid d-flex flex-wrap md-flex-nowrap justify-content-between">
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
      <ul class="navbar-nav d-flex flex-row">
        <li>
          <a href="#"><?php echo __('phone', 'pfleury-wordpress'); ?></a>
        </li>
        <li>
          <a href="#"><?php echo __('email', 'pfleury-wordpress'); ?></a>
        </li>
      </ul>
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

    <a href="http://sgiroux.net" class="footer-credits-link">
      <?php echo __('Credits', 'pfleury-wordpress'); ?>
    </a>
  </div>
</footer>

<?php wp_footer(); ?>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!--<script src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/js/webflow.js" type="text/javascript"></script>-->
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
