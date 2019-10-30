
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="alternate" type="application/atom+xml" href="<?php bloginfo('atom_url'); ?>">

  <script src="https://use.typekit.net/qmt2yid.js" type="text/javascript"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){ console.error('Error loading Typekit', e); }</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->

  <link href="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/apple-touch-icon.png" rel="apple-touch-icon">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
  <nav class="navbar navbar-expand-md navbar--primary align-items-center">
    <div class="row flex-fill">
      <div class="col-8 col-md-6">
        <a href="<?php echo get_option('home'); ?>" class="navbar-brand navbar-brand-primary d-flex flex-row align-items-center align-content-start">
          <span class="sr-only"><?php bloginfo('name'); ?></span>

          <img src="<?php echo get_theme_mod( 'brand_name_img', get_theme_root_uri() . '/' . get_template() . '/assets/Nom.svg'); ?>" height="50" alt="<?php bloginfo('name'); ?>"
               class="brand-name">

          <img src="<?php echo get_theme_mod( 'brand_logo_img', get_theme_root_uri() . '/' . get_template() . '/assets/Logo.svg'); ?>"
               alt="Logo"
               class="brand-logo ml-3 ml-sm-5" />
        </a>
      </div>

      <button class="navbar-toggler element-hamburger ml-auto col-4" role="button" data-toggle="collapse" aria-expanded="false" data-target="#topNav">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <!-- Expandable links menu -->
      <div class="collapse navbar-collapse expand-into-menu col-md-5 col-lg-5 ml-md-auto" id="topNav">
        <ul class="navbar-nav d-flex flex-column align-items-start justify-content-between align-content-between flex-md-row flex-grow-1">
          <li class="nav-item mr-md-3 mr-lg-5">
            <a href="#" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" data-target="#follow" aria-controls="follow">Follow</a>
          </li>
          <li class="nav-item mr-md-3 mr-lg-5">
            <a href="#" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" data-target="#contact" aria-controls="contact">Contact</a>
          </li>
          <li class="nav-item">
            <!-- Language switch -->
            <a href="#" class="nav-link">–&nbsp;Fr</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <nav class="nav-giantlinks">
    <div class="container-fluid">
      <div id="follow" class="collapse">
        <div class="help-block text-bold small text-uppercase">&mdash; <?php _e('Follow Me', 'pfleury-wordpress'); ?></div>

        <a href="#" class="link-animated">
          Facebook
        </a>
        <a href="#" class="link-animated">
          Instagram
        </a>
        <a href="#" class="link-animated">
          LinkedIn
        </a>
        <a href="#" class="link-animated">
          Behance
        </a>
        <a href="#" class="link-animated">
          News
        </a>
        <!-- Facebook -->
        <?php if (get_option('follow_facebook')) { ?>
        <a href="<?php echo get_theme_mod('follow_facebook'); ?>" class="nav-item">Facebook</a>
        <?php } ?>
        <!-- Twitter -->
        <?php if (get_option('follow_twitter')) { ?>
        <a href="<?php echo get_theme_mod('follow_twitter'); ?>" class="nav-item">Twitter</a>
        <?php } ?>
        <!-- Instagram -->
        <?php if (get_option('follow_instagram')) { ?>
        <a href="<?php echo get_theme_mod('follow_instagram'); ?>" class="nav-item">Instagram</a>
        <?php } ?>
        <!-- LinkedIn -->
        <?php if (get_option('follow_linkedin')) { ?>
        <a href="<?php echo get_theme_mod('follow_linkedin'); ?>" class="nav-item">LinkedIn</a>
        <?php } ?>
        <!-- Behance -->
        <?php if (get_option('follow_behance')) { ?>
        <a href="<?php echo get_theme_mod('follow_behance'); ?>" class="nav-item">Behance</a>
        <?php } ?>
        <!-- News -->
        <?php if (get_option('follow_news')) { ?>
        <a href="<?php echo get_theme_mod('follow_news'); ?>" class="nav-item"><?php __('News'); ?></a>
        <?php } ?>
      </div>

      <div id="contact" class="collapse collapse--contact">
        <div class="help-block text-bold small text-uppercase">&mdash; <?php _e('Contact Me', 'pfleury-wordpress'); ?></div>
        <a href="mailto:info@patrickfleury.com" class="link-animated">
          <?php _e('Email', 'pfleury-wordpress'); ?>
        </a>
        <a href="tel:+1231231234" class="link-animated">
          <?php _e('Phone', 'pfleury-wordpress'); ?>
        </a>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar--secondary">
    <!-- Main Nav -->
    <ul class="navbar-nav nav--secondary d-flex flex-column flex-sm-row row flex-fill">
      <li class="nav-item col-sm-7<?php if (is_page('work')) { echo ' current_page_item'; } ?>">
        <a href="/work/" class="nav-link">
          Design
          <span class="link-animated-superscript">Explore my work</span>
        </a>
      </li>
      <li class="nav-item col-sm-5<?php if (is_page('about')) { echo ' current_page_item'; } ?>">
        <a href="/about/" class="nav-link">
          Studio
          <span class="link-animated-superscript">About</span>
        </a>
      </li>
    </ul>

    <?php
    // Header Menu
//    wp_nav_menu( array(
//      'theme_location'=> 'header-menu',
//      'menu_class'    => 'navbar-nav follow-media ml-auto d-flex flex-row',
//      'container'              => 'ul',
//    ) );
    ?>
  </nav>
</header>
