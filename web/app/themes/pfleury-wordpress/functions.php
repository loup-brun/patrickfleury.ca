<?php

define('PFLEURY_THEME_VERSION', '0.1');

// and make sure we're not leaking on stage/prod
if (!defined('UENO_CONFIG_SET')) {
  ini_set('display_errors', 0);
  define('WP_DEBUG_DISPLAY', false);
  define('SCRIPT_DEBUG', false);
  define('WP_DEBUG', false);
}

require_once('lib/clean.php');

/**
 * Try to increase upload limit
 */
@ini_set( 'upload_max_size' , '10M' );
@ini_set( 'post_max_size', '10M');
@ini_set( 'max_execution_time', '300' );


/**
 * Doctype for Open Graph
 */
function doctype_opengraph($output) {
    return $output . '
    xmlns:og="http://opengraphprotocol.org/schema/"
    xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'doctype_opengraph');

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */

require_once(get_template_directory() . '/lib/plugins/class-tgm-plugin-activation.php');
add_action( 'tgmpa_register', 'pfleury_wordpress_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function pfleury_wordpress_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
//		array(
//			'name'               => 'TGM Example Plugin', // The plugin name.
//			'slug'               => 'tgm-example-plugin', // The plugin slug (typically the folder name).
//			'source'             => get_template_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
//			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
//			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
//			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
//			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
//			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
//			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
//		),

		// This is an example of how to include a plugin from an arbitrary external source in your theme.
		array(
			'name'         => 'Advanced Custom Fields', // The plugin name.
			'slug'         => 'advanced-custom-fields', // The plugin slug (typically the folder name).
			'source'       => 'https://downloads.wordpress.org/plugin/advanced-custom-fields.5.8.6.zip', // The plugin source.
			'required'     => true, // If false, the plugin is only 'recommended' instead of required.
		),

//		array(
//			'name'         => 'PFLEURY Catch Instagram Feed',
//			'slug'         => 'catch-instagram-feed',
//			'source'       => get_stylesheet_directory() . '/lib/plugins/pfleury-instagram-feed-gallery-widget.zip',
//			'required'     => true,
//		),

		array(
			'name'         => 'Post Types Order',
			'slug'         => 'post-types-order',
			'required'     => false,
		),

		array(
			'name'         => 'Duplicate Page',
			'slug'         => 'duplicate-page',
			'required'     => false,
		),

		// This is an example of how to include a plugin from an arbitrary external source in your theme.
		array(
			'name'         => 'Page Builder by SiteOrigin', // The plugin name.
			'slug'         => 'siteorigin-panels', // The plugin slug (typically the folder name).
			'source'       => 'https://downloads.wordpress.org/plugin/siteorigin-panels.2.10.11.zip', // The plugin source.
			'required'     => true, // If false, the plugin is only 'recommended' instead of required.
		),

		// This is an example of how to include a plugin from an arbitrary external source in your theme.
		array(
			'name'         => 'Polylang', // The plugin name.
			'slug'         => 'polylang', // The plugin slug (typically the folder name).
			'source'       => 'https://downloads.wordpress.org/plugin/polylang.2.6.5.zip', // The plugin source.
			'required'     => true, // If false, the plugin is only 'recommended' instead of required.
		)

		// This is an example of how to include a plugin from a GitHub repository in your theme.
		// This presumes that the plugin code is based in the root of the GitHub repository
		// and not in a subdirectory ('/src') of the repository.
//		array(
//			'name'      => 'Adminbar Link Comments to Pending',
//			'slug'      => 'adminbar-link-comments-to-pending',
//			'source'    => 'https://github.com/jrfnl/WP-adminbar-comments-to-pending/archive/master.zip',
//		),

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
//		array(
//			'name'      => 'BuddyPress',
//			'slug'      => 'buddypress',
//			'required'  => false,
//		),

		// This is an example of the use of 'is_callable' functionality. A user could - for instance -
		// have WPSEO installed *or* WPSEO Premium. The slug would in that last case be different, i.e.
		// 'wordpress-seo-premium'.
		// By setting 'is_callable' to either a function from that plugin or a class method
		// `array( 'class', 'method' )` similar to how you hook in to actions and filters, TGMPA can still
		// recognize the plugin as being installed.
//		array(
//			'name'        => 'WordPress SEO by Yoast',
//			'slug'        => 'wordpress-seo',
//			'is_callable' => 'wpseo_init',
//		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'pfleury-wordpress',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'pfleury-wordpress' ),
			'menu_title'                      => __( 'Install Plugins', 'pfleury-wordpress' ),
			/* translators: %s: plugin name. * /
			'installing'                      => __( 'Installing Plugin: %s', 'pfleury-wordpress' ),
			/* translators: %s: plugin name. * /
			'updating'                        => __( 'Updating Plugin: %s', 'pfleury-wordpress' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'pfleury-wordpress' ),
			'notice_can_install_required'     => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'pfleury-wordpress'
			),
			'notice_can_install_recommended'  => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'pfleury-wordpress'
			),
			'notice_ask_to_update'            => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'pfleury-wordpress'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				/* translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'pfleury-wordpress'
			),
			'notice_can_activate_required'    => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'pfleury-wordpress'
			),
			'notice_can_activate_recommended' => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'pfleury-wordpress'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'pfleury-wordpress'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'pfleury-wordpress'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'pfleury-wordpress'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'pfleury-wordpress' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'pfleury-wordpress' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'pfleury-wordpress' ),
			/* translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'pfleury-wordpress' ),
			/* translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'pfleury-wordpress' ),
			/* translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'pfleury-wordpress' ),
			'dismiss'                         => __( 'Dismiss this notice', 'pfleury-wordpress' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'pfleury-wordpress' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'pfleury-wordpress' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);

	tgmpa( $plugins, $config );
}
/* END TGM_Plugin_Activation class */

// Add posts type for testimonials
function testimonials_posts_formats_setup() {
 add_theme_support( 'post-formats', array( 'testimonials' ) );
}
add_action( 'after_setup_theme', 'testimonials_posts_formats_setup' );

// If we're running a development version this will be set, otherwise it's not
if (!defined('IS_DEV')) {
  define('IS_DEV', false);
}

add_action('wp_enqueue_scripts', function() {
  // in development styles are injected via development build of main.js
  if (!IS_DEV) {
    wp_enqueue_style('styles', get_stylesheet_uri(), array(), PFLEURY_THEME_VERSION);
  }
  wp_enqueue_script('scripts', get_theme_file_uri('/js/main.js'), array(), PFLEURY_THEME_VERSION);
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
 * Custom post type: Projects
 */
function create_posttype_projets() {
  register_post_type( 'projet', array(
    'supports' =>  array(
      'title', // post title
      'editor', // post content
      'thumbnail', // featured images
      'excerpt', // post excerpt
      'custom-fields', // custom fields
      'revisions', // post revisions
      'editor' // support gutenberg editor
    ),
    'labels' => array(
      'name' => _x('Projets', 'plural'),
      'singular_name' => _x('Projet', 'singular'),
      'menu_name' => _x('Projets', 'admin menu'),
      'name_admin_bar' => _x('Projets', 'admin bar'),
      'add_new' => _x('Nouveau projet', 'add new'),
      'add_new_item' => __('Ajouter un nouveau projet'),
      'new_item' => __('Nouveau projet'),
      'edit_item' => __('Éditer le projet'),
      'view_item' => __('Voir le projet'),
      'all_items' => __('Tous les projets'),
      'search_items' => __('Chercher parmi les projets'),
      'not_found' => __('Aucun projet trouvé.'),
    ),
    'public' => true,
    'query_var' => true,
    'has_archive' => false,
    'hierarchical' => false,
    'show_in_rest' => true, // gutenberg editor
  ) );
  register_taxonomy_for_object_type( 'post_tag', 'projet' );
  register_taxonomy_for_object_type( 'category', 'projet' );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_projets' );

function create_posttype_testimonials() {
  register_post_type( 'temoignage', array(
    'supports' =>  array(
      'title', // post title
      'editor', // post content
      'custom-fields', // custom fields
      'editor'
    ),
    'labels' => array(
      'name' => _x('Témoignages', 'plural'),
      'singular_name' => _x('Témoignage', 'singular'),
      'menu_name' => _x('Témoignages', 'admin menu'),
      'name_admin_bar' => _x('Témoignages', 'admin bar'),
      'add_new' => _x('Nouveau témoignage', 'add new'),
      'add_new_item' => __('Ajouter un nouveau témoignage'),
      'new_item' => __('Nouveau témoignage'),
      'edit_item' => __('Éditer le témoignage'),
      'view_item' => __('Voir le témoignage'),
      'all_items' => __('Tous les témoignages'),
      'search_items' => __('Chercher parmi les témoignages'),
      'not_found' => __('Aucun témoignage trouvé.'),
    ),
    'public' => true,
    'query_var' => true,
    'has_archive' => false,
    'hierarchical' => false,
    'show_in_rest' => true
  ) );
}
add_action( 'init', 'create_posttype_testimonials' );

function create_posttype_wip() {
  register_post_type( 'wip', array(
    'supports' =>  array(
      'title', // post title
      'custom-fields', // custom fields
      'thumbnail',
    ),
    'labels' => array(
      'name' => _x('WIP', 'plural'),
      'singular_name' => _x('WIP', 'singular'),
      'menu_name' => _x('WIP', 'admin menu'),
      'name_admin_bar' => _x('WPI', 'admin bar'),
      'add_new' => _x('Nouveau WIP', 'add new'),
      'add_new_item' => __('Ajouter un nouveau WIP'),
      'new_item' => __('Nouveau WIP'),
      'edit_item' => __('Éditer le WIP'),
      'view_item' => __('Voir le WIP'),
      'all_items' => __('Tous les WIP'),
      'search_items' => __('Chercher parmi les WIP'),
      'not_found' => __('Aucun WIP trouvé.'),
    ),
    'public' => true,
    'query_var' => true,
    'has_archive' => false,
    'hierarchical' => false,
    'show_in_rest' => true
  ) );
}
add_action( 'init', 'create_posttype_wip' );

/**
 * Remove `posts` from admin menu
 */
add_action('admin_menu','remove_default_post_type');

function remove_default_post_type() {
	remove_menu_page('edit.php');
}

/**
 * Add theme support for header images
 */
//add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails', array('post', 'page', 'projet') );

// Add tags for pages
add_post_type_support( 'page', array(
    'author', 'excerpt', 'tag', 'weight'
) );
// Add tags for pages
add_post_type_support( 'projet', array(
    'author', 'excerpt', 'tag', 'weight'
) );

/**
 * Add page attributes to posts
 */
//add_post_type_support( 'projet', 'page-attributes' );

/**
 * ========================================================
 * SITE ORIGIN PAGE BUILDER
 * ========================================================
 */

/**
 * Register a custom layouts folder location.
 */
function siteorigin_layouts_folder( $layout_folders ) {
    $layout_folders[] = get_template_directory() . '/inc/layouts';
    return $layout_folders;
}
add_filter( 'siteorigin_panels_local_layouts_directories', 'siteorigin_layouts_folder' );

/**
 * ========================================================
 * </> END SITE ORIGIN PAGE BUILDER
 * ========================================================
 */

/**
 * TESTIMONIALS
 */

require_once(get_template_directory() . '/template-parts/testimonials.php');

add_shortcode('pfleury-testimonials', 'testimonials_shortcode');
function testimonials_shortcode() {
    return testimonials_template_code();
}


/**
 * i18n support
 */

//load_theme_textdomain( 'pfleury-wordpress', get_template_directory() . '/languages' );

add_action( 'after_setup_theme', 'pfleury_theme_setup' );
function pfleury_theme_setup() {
    load_theme_textdomain( 'pfleury-wordpress', get_template_directory() . '/languages' );
}

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

  // Business Settings
  // ---------------

  $wp_customize->add_section(
    'business_settings',
    array(
      'title' => 'Business Settings',
      'description' => 'Affaires',
      'priority' => 35
    )
  );

  // Email
  $wp_customize->add_setting(
    'business_email',
    array(
      'default' => '',
      'placeholder' => 'hello@patrickfleury.ca'
    )
  );

  $wp_customize->add_control(
    'business_email',
    array(
      'label' => 'Adresse courriel',
      'section' => 'business_settings',
      'type' => 'email',
    )
  );

  // Phone
  $wp_customize->add_setting(
    'business_phone',
    array(
      'default' => '',
      'placeholder' => '+514-SOO-COOL'
    )
  );

  $wp_customize->add_control(
    'business_phone',
    array(
      'label' => 'Téléphone',
      'section' => 'business_settings',
      'type' => 'text',
    )
  );

  // Social Settings
  // ---------------

  $wp_customize->add_section(
    'social_settings',
    array(
      'title' => 'Social Settings',
      'description' => 'Link to platforms elsewhere!',
      'priority' => 35
    )
  );

  // Facebook
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
        'label' => 'Facebook Full URL',
        'section' => 'social_settings',
        'type' => 'text',
    )
  );

  // Twitter
  $wp_customize->add_setting(
    'follow_twitter',
      array(
        'default' => '',
        'placeholder' => '@username'
      )
  );

  $wp_customize->add_control(
    'follow_twitter',
    array(
        'label' => 'Twitter Username',
        'section' => 'social_settings',
        'type' => 'text',
    )
  );

  // Instagram
  $wp_customize->add_setting(
    'follow_instagram',
      array(
        'default' => '',
        'placeholder' => '@username'
      )
  );

  $wp_customize->add_control(
    'follow_instagram',
    array(
        'label' => 'Instagram Username',
        'section' => 'social_settings',
        'type' => 'text',
    )
  );

  // LinkedIn
    $wp_customize->add_setting(
    'follow_linkedin',
      array(
        'default' => '',
        'placeholder' => 'https://LinkedIn.com/slug'
      )
  );

  $wp_customize->add_control(
    'follow_linkedin',
    array(
        'label' => 'LinkedIn Full URL',
        'section' => 'social_settings',
        'type' => 'text',
    )
  );

  // Behance
    $wp_customize->add_setting(
    'follow_behance',
      array(
        'default' => '',
        'placeholder' => '@username'
      )
  );

  $wp_customize->add_control(
    'follow_behance',
    array(
        'label' => 'Behance Username',
        'section' => 'social_settings',
        'type' => 'text',
    )
  );

  // Pinterest
    $wp_customize->add_setting(
    'follow_pinterest',
      array(
        'default' => '',
        'placeholder' => 'username'
      )
  );

  $wp_customize->add_control(
    'follow_pinterest',
    array(
        'label' => 'Pinterest Username',
        'section' => 'social_settings',
        'type' => 'text',
    )
  );

  // News
    $wp_customize->add_setting(
    'follow_news',
      array(
        'default' => '',
        'placeholder' => 'https://example.com'
      )
  );

  $wp_customize->add_control(
    'follow_news',
    array(
        'label' => 'News URL',
        'section' => 'social_settings',
        'type' => 'text',
    )
  );
}
add_action( 'customize_register', 'theme_customizer' );
