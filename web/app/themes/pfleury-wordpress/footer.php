<footer class="footer">
  <div class="container-fluid d-flex flex-wrap md-flex-nowrap justify-content-between">
    <div class="copyright-text mr-3">
      &copy; <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?><?php if (!empty(get_bloginfo('description'))) { ?> &mdash; <?php echo bloginfo('description'); } ?>
      <?php
      if (!get_theme_mod('copyright_text')) {
        echo get_theme_mod('copyright_text');
      } else {
        _e('All rights reserved.', 'pfleury-wordpress');
      }
      ?>
    </div>

    <nav class="footer-links contact-links">
            <?php
      // Footer Menu
//      wp_nav_menu( array(
//        'theme_location'=> 'footer-menu',
//        'menu_class'    => 'navbar-nav d-flex flex-row',
//        'container'     => 'ul',
//      ) );
      ?>
      <ul class="navbar-nav d-flex flex-row">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <?php _e('phone', 'pfleury-wordpress'); ?>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <?php _e('email', 'pfleury-wordpress'); ?>
          </a>
        </li>
      </ul>
    </nav>

    <nav class="footer-links social-links mr-3">

      <ul class="nav">
        <?php if (get_theme_mod('follow_facebook')) { ?>
        <!-- Facebook -->
        <li class="nav-item">
          <a href="<?php echo get_theme_mod('follow_facebook'); ?>" class="nav-link text-uppercase">Face</a>
        </li>
        <?php } ?>
        <?php if (get_theme_mod('follow_twitter')) { ?>
        <!-- Twitter -->
        <li class="nav-item">
          <a href="https://twitter.com/<?php echo get_theme_mod('follow_twitter'); ?>" class="nav-link text-uppercase">Tw</a>
        </li>
        <?php } ?>
        <?php if (get_theme_mod('follow_instagram')) { ?>
        <!-- Instagram -->
        <li class="nav-item">
          <a href="https://instagram.com/<?php echo get_theme_mod('follow_instagram'); ?>" class="nav-link text-uppercase">Inst</a>
        </li>
        <?php } ?>
        <?php if (get_theme_mod('follow_linkedin')) { ?>
        <!-- LinkedIn -->
        <li class="nav-item">
          <a href="<?php echo get_theme_mod('follow_linkedin'); ?>" class="nav-link text-uppercase">Link</a>
        </li>
        <?php } ?>
        <?php if (get_theme_mod('follow_behance')) { ?>
        <!-- Behance -->
        <li class="nav-item">
          <a href="https://behance.net/<?php echo get_theme_mod('follow_behance'); ?>" class="nav-link text-uppercase">Beha</a>
        </li>
        <?php } ?>
        <?php if (get_theme_mod('follow_pinterest')) { ?>
        <!-- Pinterest -->
        <li class="nav-item">
          <a href="https://pinterest.com/<?php echo get_theme_mod('follow_pinterest'); ?>" class="nav-link text-uppercase">Pint</a>
        </li>
        <?php } ?>
        <?php if (get_theme_mod('follow_news')) { ?>
        <!-- News -->
        <li class="nav-item">
          <a href="<?php echo get_theme_mod('follow_news'); ?>" class="nav-link text-uppercase">News</a>
        </li>
        <?php } ?>
        </ul>
    </nav>

    <a href="http://sgiroux.net" class="nav-link">
      <?php _e('Credits', 'pfleury-wordpress'); ?>
    </a>
  </div>
</footer>

<?php wp_footer(); ?>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!--<script src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/js/webflow.js" type="text/javascript"></script>-->
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
