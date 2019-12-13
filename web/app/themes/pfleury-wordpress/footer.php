  <!-- Pre-footer CTA -->
  <?php if (!the_field('hide_cta') && !is_404()) { ?>
  <section class="section-cta py-5 bg-yellow">
    <div class="container">
      <h2 class="font-weight-normal my-5">
        <?php _e('Convinced? Reach out!', 'pfleury-wordpress'); ?>
      </h2>

      <nav class="nav nav-links lead my-5">
        <?php if (get_theme_mod('business_email')) { ?>
        <!-- Email -->
        <a href="mailto:<?php echo get_theme_mod('business_email'); ?>" class="mr-4">
          <?php _e('Email', 'pfleury-wordpress'); ?>
        </a>
        <?php } ?>
        <?php if (get_theme_mod('business_phone')) { ?>
        <!-- Phone -->
        <a href="tel:<?php echo get_theme_mod('business_phone'); ?>">
          <?php echo get_theme_mod('business_phone'); ?>
        </a>
        <?php } ?>
      </nav>
    </div>
  </section>
  <?php } // end if ?>

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
          <?php if (get_theme_mod('business_email')) { ?>
          <!-- Email -->
          <li class="nav-item">
            <a href="mailto:<?php echo get_theme_mod('business_email'); ?>" class="nav-link">
              <?php _e('Email', 'pfleury-wordpress'); ?>
            </a>
          </li>
          <?php } ?>
          <?php if (get_theme_mod('business_phone')) { ?>
          <li class="nav-item">
            <!-- Phone -->
            <a href="tel:<?php echo get_theme_mod('business_phone'); ?>" class="nav-link">
              <?php _e('Phone', 'pfleury-wordpress') ?>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>

      <nav class="footer-links social-links mr-3">

        <ul class="nav">
          <?php if (get_theme_mod('follow_facebook')) { ?>
          <!-- Facebook -->
          <li class="nav-item">
            <a href="<?php echo get_theme_mod('follow_facebook'); ?>" class="nav-link text-uppercase" target="_blank" rel="nofollow noopener">Face</a>
          </li>
          <?php } ?>
          <?php if (get_theme_mod('follow_twitter')) { ?>
          <!-- Twitter -->
          <li class="nav-item">
            <a href="https://twitter.com/<?php echo get_theme_mod('follow_twitter'); ?>" class="nav-link text-uppercase" target="_blank" rel="nofollow noopener">Tw</a>
          </li>
          <?php } ?>
          <?php if (get_theme_mod('follow_instagram')) { ?>
          <!-- Instagram -->
          <li class="nav-item">
            <a href="https://instagram.com/<?php echo get_theme_mod('follow_instagram'); ?>" class="nav-link text-uppercase" target="_blank" rel="nofollow noopener">Inst</a>
          </li>
          <?php } ?>
          <?php if (get_theme_mod('follow_linkedin')) { ?>
          <!-- LinkedIn -->
          <li class="nav-item">
            <a href="<?php echo get_theme_mod('follow_linkedin'); ?>" class="nav-link text-uppercase" target="_blank" rel="nofollow noopener">Link</a>
          </li>
          <?php } ?>
          <?php if (get_theme_mod('follow_behance')) { ?>
          <!-- Behance -->
          <li class="nav-item">
            <a href="https://behance.net/<?php echo get_theme_mod('follow_behance'); ?>" class="nav-link text-uppercase" target="_blank" rel="nofollow noopener">Beha</a>
          </li>
          <?php } ?>
          <?php if (get_theme_mod('follow_pinterest')) { ?>
          <!-- Pinterest -->
          <li class="nav-item">
            <a href="https://pinterest.com/<?php echo get_theme_mod('follow_pinterest'); ?>" class="nav-link text-uppercase" target="_blank" rel="nofollow noopener">Pint</a>
          </li>
          <?php } ?>
          <?php if (get_theme_mod('follow_news')) { ?>
          <!-- News -->
          <li class="nav-item">
            <a href="<?php echo get_theme_mod('follow_news'); ?>" class="nav-link text-uppercase" target="_blank" rel="nofollow noopener">News</a>
          </li>
          <?php } ?>
          </ul>
      </nav>

      <a href="http://sgiroux.net" class="nav-link">
        <?php _e('Credits', 'pfleury-wordpress'); ?>
      </a>
    </div>
  </footer>
</div><!-- /#swup -->

<?php wp_footer(); ?>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
