
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
  <link href="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/webclip.png" rel="apple-touch-icon">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
  <nav class="navbar navbar--primary align-items-center">
    <a href="<?php bloginfo('url'); ?>" class="navbar-brand navbar-brand-primary d-flex flex-row align-items-center">
      <span class="sr-only"><?php bloginfo('name'); ?></span>

      <img src="<?php echo get_theme_mod( 'brand_name_img', get_theme_root_uri() . '/' . get_template() . '/assets/Nom.svg'); ?>" height="50" alt="<?php bloginfo('name'); ?>"
           class="brand-name">

      <img src="<?php echo get_theme_mod( 'brand_logo_img', get_theme_root_uri() . '/' . get_template() . '/assets/Logo.svg'); ?>"
           alt="Logo"
           class="brand-logo flex-fill ml-5" />
    </a>

    <!-- Expandable links menu -->
    <ul class="navbar-nav nav-collapse ml-auto d-flex flex-row nav--expandable-links">
      <li class="ml-3">
        <a href="#" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" data-target="#follow" aria-controls="follow">Follow</a>
      </li>
      <li class="ml-3">
        <a href="#" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" data-target="#contact" aria-controls="contact">Contact</a>
      </li>
    </ul>

    <!-- Language switch -->
    <a href="#" class="nav-link ml-3">–Fr</a>

    <div class="hidden">
      <div class="w-icon-nav-menu">H</div>
    </div>
  </nav>

  <nav class="nav-giantlinks">
    <div class="container-fluid">
      <div id="follow" class="collapse">
        <a href="#" class="link-animated">
          Facebook
        </a>
        <a href="#" class="link-animated">
          Facebook
        </a>
        <a href="#" class="link-animated">
          Facebook
        </a>
        <a href="#" class="link-animated">
          Facebook
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
        <a href="mailto:info@patrickfleury.com" class="link-animated">
          <?php echo __('Email', 'pfleury-wordpress'); ?>
        </a>
        <a href="tel:+1231231234" class="link-animated">
          <?php echo __('Phone', 'pfleury-wordpress'); ?>
        </a>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar--secondary">
    <!-- Main Nav -->
    <ul class="navbar-nav nav--secondary d-flex flex-row">
      <li class="nav-item">
        <a href="design.htm" class="nav-link">
          Design
          <span class="link-animated-superscript">Explore my work</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="studio.html" class="nav-link">
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
