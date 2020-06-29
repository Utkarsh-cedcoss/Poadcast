<?php
/**
 * pod_project functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pod_project
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'pod_project_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pod_project_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on pod_project, use a find and replace
		 * to change 'pod-project' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pod-project', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'pod-project' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'pod_project_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'pod_project_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pod_project_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'pod_project_content_width', 640 );
}
add_action( 'after_setup_theme', 'pod_project_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pod_project_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pod-project' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pod-project' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pod_project_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pod_project_scripts() {
	
	wp_enqueue_script('jquery.min',get_template_directory_uri() . '/js/jquery.min.js', array(), _S_VERSION,true);
	wp_enqueue_script('popper.min',get_template_directory_uri() . '/js/popper.min.js', array(), _S_VERSION,true);
	wp_enqueue_script( 'pod-project-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('bootstrap.min',get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION,true);
	wp_enqueue_script('imagesloaded.pkgd.min',get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), _S_VERSION,true);
	wp_enqueue_script('isotope.pkgd.min',get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), _S_VERSION,true);
	wp_enqueue_script('jarallax-video.min',get_template_directory_uri() . '/js/jarallax-video.min.js', array(), _S_VERSION,true);
	wp_enqueue_script('jarallax.min',get_template_directory_uri() . '/js/jarallax.min.js', array(), _S_VERSION,true);
	wp_enqueue_script('owl.carousel.min',get_template_directory_uri() . '/js/owl.carousel.min.js', array(), _S_VERSION,true);
	wp_enqueue_script('poca.bundle',get_template_directory_uri() . '/js/poca.bundle.js', array(), _S_VERSION,true);
	// wp_enqueue_script('jquery.easing.min',get_template_directory_uri() . '/js/jquery.easing.min.js', array(), '1.1',true);

	
	
	wp_enqueue_script('waypoints.min',get_template_directory_uri() . '/js/waypoints.min.js', array(), _S_VERSION,true);
	wp_enqueue_script('wow.min',get_template_directory_uri() . '/js/wow.min.js', array(), _S_VERSION,true);
	wp_enqueue_script('active',get_template_directory_uri() . '/js/default-assets/active.js', array(), _S_VERSION,true);
	wp_enqueue_script('audioplayer',get_template_directory_uri() . '/js/default-assets/audioplayer.js', array(), _S_VERSION,true);
	wp_enqueue_script('avoid.console.error',get_template_directory_uri() . '/js/default-assets/avoid.console.error.js', array(), _S_VERSION,true);
	wp_enqueue_script('jquery.scrollup.min',get_template_directory_uri() . '/js/default-assets/jquery.scrollup.min.js', array(), _S_VERSION,true);
	// wp_enqueue_script('classynav',get_template_directory_uri() . '/js/default-assets/classynav.js', array(), '1.1',true);
	

	

	wp_style_add_data( 'pod-project-style', 'rtl', 'replace' );
	wp_enqueue_style('audioplayer', get_template_directory_uri() . '/css/default-assets/audioplayer.css',array(),_S_VERSION,'all');
	wp_enqueue_style('classy-nav', get_template_directory_uri() . '/css/default-assets/classy-nav.css',array(),_S_VERSION,'all');
	wp_enqueue_style('hkgrotesk-fonts', get_template_directory_uri() . '/css/default-assets/hkgrotesk-fonts.css',array(),_S_VERSION,'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css',array(),_S_VERSION,'all');
	wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css',array(),_S_VERSION,'all');
	
	wp_enqueue_style('font-awesome.min.css', get_template_directory_uri() . '/css/font-awesome.min.css',array(),_S_VERSION,'all');
	wp_enqueue_style('owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css',array(),_S_VERSION,'all');
	//wp_enqueue_style( 'pod-project-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css',array(),_S_VERSION,'all');
	
	
	
	
	
	
	
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pod_project_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
function wp_theme_supports(){
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wp_theme_supports' );

