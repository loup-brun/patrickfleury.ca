<?php

define('UENO_THEME_VERSION', '0.1');

// and make sure we're not leaking on stage/prod
if (!defined('UENO_CONFIG_SET')) {
  ini_set('display_errors', 0);
  define('WP_DEBUG_DISPLAY', false);
  define('SCRIPT_DEBUG', false);
  define('WP_DEBUG', false);
}

require_once('lib/clean.php');

// If we're running a development version this will be set, otherwise it's not
if (!defined('IS_DEV')) {
  define('IS_DEV', false);
}

add_action('wp_enqueue_scripts', function() {
  // in development styles are injected via development build of main.js
  if (!IS_DEV) {
    wp_enqueue_style('styles', get_stylesheet_uri(), array(), UENO_THEME_VERSION);
  }
  wp_enqueue_script('scripts', get_theme_file_uri('/js/main.js'), array(), UENO_THEME_VERSION);
});

// Add pages to menu under Appearance > Menus
add_action('init', function() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),   // top left
      'main-menu'   => __( 'Main Menu' ),     // content categories
      'social-menu' => __( 'Social Menu' ),   // social media, email
      'footer-menu' => __( 'Footer Menu' )    // footer links
    )
  );
});

// Allow SVG uploads
add_filter('upload_mimes', function($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
});

/**
 * Add theme support for header images
 */
//add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );

/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
function theme_customizer( $wp_customize ) {
  $wp_customize->add_section(
    'theme_settings',
    array(
      'title' => 'Theme Settings',
      'description' => 'Theme-specific settings for customization',
      'priority' => 35,
    )
  );

  $wp_customize->add_setting(
    'copyright_text',
      array(
        'default' => 'Default copyright text'
      )
  );

  $wp_customize->add_control(
    'copyright_text',
    array(
        'label' => 'Copyright text',
        'section' => 'theme_settings',
        'type' => 'text',
    )
  );

  $wp_customize->add_section(
    'social_settings',
    array(
      'title' => 'Social Settings',
      'description' => 'Theme-specific settings for customization',
      'priority' => 35
    )
  );

  $wp_customize->add_setting(
    'follow_facebook',
      array(
        'default' => '',
        'placeholder' => 'https://facebook.com/username'
      )
  );

  $wp_customize->add_control(
    'follow_facebook',
    array(
        'label' => 'Facebook URL',
        'section' => 'social_settings',
        'type' => 'text',
    )
  );
}
add_action( 'customize_register', 'theme_customizer' );

