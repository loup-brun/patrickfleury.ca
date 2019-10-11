
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
  <div data-collapse="medium" data-animation="over-right" data-duration="400" data-doc-height="1" class="navbar w-nav">
    <div class="w-layout-grid navbar-row1"><a href="index.html" id="w-node-348566b9f745-66b9f741" class="brand w-nav-brand w--current"></a><img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/Logo.svg" height="50" alt="PFleury" id="w-node-348566b9f747-66b9f741" class="p-logo">
      <div id="w-node-0eedaaa78c05-66b9f741" class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
      <nav role="navigation" id="w-node-348566b9f748-66b9f741" class="w-nav-menu"><a href="#" data-w-id="82b64436-12c9-6f7f-1907-348566b9f749" class="nav-link w-nav-link">Follow</a><a href="#" data-w-id="82b64436-12c9-6f7f-1907-348566b9f74b" class="nav-link w-nav-link">Contact</a><a href="#" class="nav-link w-nav-link">̶ Fr</a></nav>
    </div>

    <?php
    // Header Menu
    wp_nav_menu( array(
      'theme_location'=> 'header-menu',
      'menu_class'    => 'w-layout-grid follow-media',
      ''              => '',
    ) );
    ?>


    <?php
    // Header Menu
    wp_nav_menu( array(
      'theme_location'=> 'social-menu',
      'menu_class'    => 'w-layout-grid follow-media',
      ''              => '',
    ) );
    ?>

    <div class="nav-row2"><a href="design.html" class="nav-biglink">Design</a><a id="w-node-348566b9f752-66b9f741" href="studio.html" class="nav-biglink">Studio</a></div>
  </div>
  <div class="header-img"><img src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/header-home.jpg" width="1240" srcset="<?php echo get_theme_root_uri() . '/' . get_template() ?>/assets/header-home-p-500.jpeg 500w, assets/header-home-p-800.jpeg 800w, assets/header-home-p-1600.jpeg 1600w, assets/header-home-p-2000.jpeg 2000w, assets/header-home.jpg 2480w" sizes="84vw" alt="" class="image"></div>
</header>

