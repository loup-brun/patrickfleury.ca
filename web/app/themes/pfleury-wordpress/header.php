
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

  <?php
  // random background classes
  $classes = [
    'skyblue',
    'violet',
    'blue',
    'turquoise',
    'terracota',
    'yellow'
  ];

  $randomClass = $classes[rand(0, sizeof($classes)-1)];
  ?>

  <script>
    window.pfClasses = [
      <?php
      foreach($classes as $color) { ?>
      '<?php echo $color; ?>',
      <?php } ?>
    ]
  </script>

  <?php
  $backgroundClass = 'bg-' . $randomClass;
  ?>
</head>

<body <?php body_class(array($backgroundClass)); ?>>
  <div id="swup" class="transition-fade"><!-- #swup -->

    <header class="header accordion" id="toggle-big-links">
      <nav class="navbar navbar-expand-lg navbar--primary align-items-center">
        <div class="row flex-fill">
          <div class="col-10 col-lg-6 pr-3">
            <a href="<?php echo home_url(); ?>" class="navbar-brand navbar-brand-primary row d-flex flex-row align-items-center align-content-start">
              <span class="sr-only"><?php bloginfo('name'); ?></span>

              <?php
              // Custom icon depending on theme language
              $iconPath = get_theme_root_uri() . '/' . get_template() . '/assets/Nom.svg'; // default img

              pll_current_language() === 'fr' ?
                $iconPath = get_theme_root_uri() . '/' . get_template() . '/assets/Nom-fr.svg' : // fr
                $iconPath = get_theme_root_uri() . '/' . get_template() . '/assets/Nom-en.svg'; // en
              ?>

              <div class="col-6 col-lg-9">
                <img src="<?php echo get_theme_mod( 'brand_name_img', $iconPath); ?>"
                     alt="<?php bloginfo('name'); ?>"
                     class="brand-name">
              </div>

              <div class="col p-lg-0">
                <img src="<?php echo get_theme_mod( 'brand_logo_img', get_theme_root_uri() . '/' . get_template() . '/assets/Logo.svg'); ?>"
                     alt="Logo"
                     class="brand-logo" />
              </div>
            </a>
          </div>

          <button class="navbar-toggler element-hamburger ml-auto col-2" role="button" data-toggle="collapse" aria-expanded="false" data-target="#topNav">
            <span></span>
            <span></span>
            <span></span>
          </button>

          <!-- Expandable links menu -->
          <div class="collapse navbar-collapse expand-into-menu col-lg-5 ml-auto" id="topNav">
            <ul class="navbar-nav d-flex flex-column align-items-end justify-content-between align-content-between flex-lg-row flex-grow-1">
              <li class="nav-item mr-lg-3 mr-lg-3">
                <a href="#" class="nav-link collapsed" data-toggle="collapse" role="button" aria-expanded="false" data-target="#follow" aria-controls="follow"><?php _e('Follow', 'pfleury-wordpress'); ?></a>
              </li>
              <li class="nav-item mr-lg-3 mr-lg-3">
                <a href="#" class="nav-link collapsed" data-toggle="collapse" role="button" aria-expanded="false" data-target="#contact" aria-controls="contact"><?php _e('Contact', 'pfleury-wordpress'); ?></a>
              </li>
              <li class="nav-item">
                <!-- Language switch -->
                <?php
                $translations = pll_the_languages( array('raw' => 1) );

                foreach ($translations as $translation) {
                  if (!$translation['current_lang']) { ?>
                    <a href="<?php echo $translation['url']; ?>" class="nav-link">—<?php echo strtoupper($translation['slug']); ?></a>
                  <?php } ?>
                <?php } ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="nav-giantlinks">
        <div class="container-fluid">
          <div id="follow" class="collapse" aria-expanded="false" data-parent="#toggle-big-links">

            <!-- Facebook -->
            <?php if (get_theme_mod('follow_facebook')) { ?>
            <a href="<?php echo get_theme_mod('follow_facebook'); ?>" class="nav-item" target="_blank" rel="nofollow noopener">Facebook</a>
            <?php } ?>
            <!-- Twitter -->
            <?php if (get_theme_mod('follow_twitter')) { ?>
            <a href="https://twitter.com/<?php echo get_theme_mod('follow_twitter'); ?>" class="nav-item" target="_blank" rel="nofollow noopener">Twitter</a>
            <?php } ?>
            <!-- Instagram -->
            <?php if (get_theme_mod('follow_instagram')) { ?>
            <a href="https://instagram.com/<?php echo get_theme_mod('follow_instagram'); ?>" class="nav-item" target="_blank" rel="nofollow noopener">Instagram</a>
            <?php } ?>
            <!-- LinkedIn -->
            <?php if (get_theme_mod('follow_linkedin')) { ?>
            <a href="<?php echo get_theme_mod('follow_linkedin'); ?>" class="nav-item" target="_blank" rel="nofollow noopener">LinkedIn</a>
            <?php } ?>
            <!-- Behance -->
            <?php if (get_theme_mod('follow_behance')) { ?>
            <a href="https://behance.net/<?php echo get_theme_mod('follow_behance'); ?>" class="nav-item" target="_blank" rel="nofollow noopener">Behance</a>
            <?php } ?>
            <!-- Pinterest -->
            <?php if (get_theme_mod('follow_pinterest')) { ?>
            <a href="https://behance.net/<?php echo get_theme_mod('follow_pinterest'); ?>" class="nav-item" target="_blank" rel="nofollow noopener">Pinterest</a>
            <?php } ?>
            <!-- News -->
            <?php if (get_theme_mod('follow_news')) { ?>
            <a href="<?php echo get_theme_mod('follow_news'); ?>" class="nav-item" target="_blank" rel="nofollow noopener"><?php _e('News'); ?></a>
            <?php } ?>
          </div>

          <div id="contact" class="collapse collapse--contact" aria-expanded="false" data-parent="#toggle-big-links">

            <?php if (get_theme_mod('business_email')) { ?>
            <!-- Email -->
            <a href="mailto:<?php echo get_theme_mod('business_email'); ?>" class="link-animated">
              <?php _e('Email', 'pfleury-wordpress'); ?>
            </a>
            <?php } ?>
            <?php if (get_theme_mod('business_phone')) { ?>
              <!-- Phone -->
            <a href="tel:<?php echo get_theme_mod('business_phone'); ?>" class="link-animated">
              <?php echo get_theme_mod('business_phone'); ?>
            </a>
            <?php } ?>
          </div>
        </div>
      </section>

      <nav class="navbar navbar--secondary">
        <!-- Main Nav -->
        <?php
        $work_url = pll_current_language() === 'fr' ? '/fr/projets/' : '/en/projects/';
        $about_url = pll_current_language() === 'fr' ? '/en/a-propos/' : '/en/about/';
        ?>
        <ul class="navbar-nav nav--secondary d-flex flex-row row flex-fill">
          <li class="nav-item col-5 col-lg-4
            <?php if (
            is_home() || is_tag() || get_post_type() === 'projet'
            ) { echo ' current_page_item'; } ?>">
            <a href="<?php echo $work_url; ?>" class="nav-link">
              <?php _e('Design', 'pfleury-wordpress'); ?>
              <span class="link-animated-superscript d-none d-sm-block">
                <?php _e('Explore my work', 'pfleury-wordpress'); ?>
              </span>
            </a>
          </li>
          <li class="nav-item col-5 col-lg-4<?php if (is_page( array('about', 'a-propos', 'studio') )) { echo ' current_page_item'; } ?>">
            <a href="<?php echo $about_url; ?>" class="nav-link">
              <?php _e('Studio', 'pfleury-wordpress'); ?>
              <span class="link-animated-superscript d-none d-sm-block">
                <?php _e('About', 'pfleury-wordpress'); ?>
              </span>
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
