<footer class="footer">
    <?php
    // Header Menu
    wp_nav_menu( array(
      'theme_location'=> 'footer-menu',
      'menu_class'    => 'w-layout-grid grid-3 w-clearfix',
      ''              => '',
    ) );
    ?>
</footer>

<?php wp_footer(); ?>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
