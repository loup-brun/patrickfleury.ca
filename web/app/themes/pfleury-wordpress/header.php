
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
  <nav class="navbar navbar-fluid">
    <a href="<?php bloginfo('url'); ?>" class="navbar-brand navbar-brand-primary d-flex flex-row">
      <span class="sr-only"><?php bloginfo('name'); ?></span>

      <img src="<?php echo get_theme_mod( 'brand_name_img', get_theme_root_uri() . '/' . get_template() . '/assets/Nom.svg'); ?>" height="50" alt="<?php bloginfo('name'); ?>"
           class="brand-name">

      <img src="<?php echo get_theme_mod( 'brand_logo_img', get_theme_root_uri() . '/' . get_template() . '/assets/Logo.svg'); ?>"
           alt="Logo"
           class="brand-logo" />


    </a>
    <div id="w-node-0eedaaa78c05-66b9f741" class="w-nav-button">
      <div class="w-icon-nav-menu"></div>
    </div>

    <!-- Top menu -->
    <ul class="navbar-nav ml-auto d-flex flex-row">
      <li>
        <a href="#" class="nav-link ml-3">Follow</a>
      </li>
      <li>
        <a href="#" class="nav-link ml-3">Contact</a>
      </li>

      <!-- Language switch -->
      <li>
        <a href="#" class="nav-link ml-3">–Fr</a>
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

  <nav class="nav-row2">
    <!-- Secondary Nav -->
    <a href="design.html" class="nav-biglink">Design</a>
    <a id="w-node-348566b9f752-66b9f741" href="studio.html" class="nav-biglink">Studio</a>
  </nav>

  <div class="header-img"><img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/header-home.jpg" width="1240" srcset="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/header-home-p-500.jpeg 500w" sizes="84vw" alt="" class="image"></div>
</header>

