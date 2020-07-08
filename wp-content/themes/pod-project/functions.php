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
			//'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'before_widget' => '<div class="single-widget-area catagories-widget mb-80 catagories-list">',
			//'after_widget'  => '</section>',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
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

//--------------------------------------------------------------------------------------------------
// function to add feature image in posts.
function wp_theme_supports(){
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wp_theme_supports' );

// this function will register the menu.
function nav_menu(){
	register_nav_menus(  // function to register menu
		array(
			'primary-menu' => __( 'Primary_Menu' )
		)
	);
}
add_action( 'init', 'nav_menu' );


// function to register sidebar.
function func_sidebar(){
	register_sidebar(array(
		'name' => ('Header Sidebar'),
		'id' => 'sidebar-0',

	));
}
add_action("widgets_init","func_sidebar");

//--------------------------------------------------------------------------------------
// registering custom widgets.
// user defined function made to register the widget.
// widget for recent posts.
function register_my_widget(){
	
	
	register_widget('my_Widget');  // this function registers the widget and take class name as parameter.
}
add_action('widgets_init','register_my_widget'); // adding user defined function with action hook.

class my_Widget extends WP_Widget{   // Class which extends another class named 'WP_Widget'.

	function __construct()  // constructor of class
	{
		parent::__construct(  // parent class constructor. i.e. constructor of 'WP_Widget' class.
			'my_widget',  //id
			__('Custom_Recent_Post'),  //Menu title of the Widget. 
			array('description'=>__('Sample widget based on online web tutor'))  // discription
		);	
		
	}  // widget setting

	

	function form($instance){    // this function will make a form in backend so that user can provide title of the widget throug a text field they are making.

		if(isset($instance['title'])){    // $instance is an array which contains 'title' as key and the value is the name of the title we give. 
			$title=$instance['title'];

		} else{
			$title = __('New title','my_widget_domain');  // here a new value of title is assigned to $title.
		}
		// widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title');?>"><?php _e('Title:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<?php

	} // form for the widget options

	function update($new_instance, $old_instance){
		$instance=array();
		$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
		return $instance;


	} // update the widget.


	function widget($args,$instance){
		$title= apply_filters('widget_title',$instance['title']);  // assigning title to widget.

		// before and after widget argument are defined by themes.
		//echo $args['before_widget'];  //<aside>
		//if(!empty($title))
		//echo $args['before_title'] . $title . $args['after_title'];  // <h1>....</h1>

		// this is where you run the code and display the output.
		//echo __("Hello World");
		$recent_post=wp_get_recent_posts(array(
			'numberposts'=>3,
			'post_status'=>'publish'
		));

		?>
		<div class="single-widget-area news-widget mb-80">
              <h5 class="widget-title">Recent Posts</h5>
		<?php

		foreach($recent_post as $post){ ?>

				
			
		
			<div class="single-news-area d-flex">
                <div class="blog-thumbnail">
				<?php echo get_the_post_thumbnail($post['ID'],); ?>
                </div>
                <div class="blog-content">
                  <a href="<?php echo get_permalink($post['ID']);?>" class="post-title"><?echo $post['post_title'];?></a>
                  <span class="post-date"><?echo $post['post_date'];?></span>
                </div>
              </div>
		<?php } ?>
		</div>
		<?php
		wp_reset_query();


		//echo $args['after_widget'];  // </aside>

	} // display the widget -- front end user.

} //the example widget class.

//---------------------------------------------------------------------------------------------------
// Making one more widget for categories.

function register_my_widget1(){
	
	
	register_widget('my_Widget1');  // this function registers the widget and take class name as parameter.
}
add_action('widgets_init','register_my_widget1');

class my_Widget1 extends WP_Widget{

	function __construct()  // constructor of class
	{
		parent::__construct(  // parent class constructor. i.e. constructor of 'WP_Widget' class.
			'my_widget1',  //id
			__('Custom_Categories'),  //Menu title of the Widget. 
			array('description'=>__('Sample widget based on listing of Categories'))  // discription
		);	
		
	}  // widget setting



	function form($instance){    // this function will make a form in backend so that user can provide title of the widget throug a text field they are making.

		if(isset($instance['title'])){    // $instance is an array which contains 'title' as key and the value is the name of the title we give. 
			$title=$instance['title'];

		} else{
			$title = __('New title','my_widget_domain');  // here a new value of title is assigned to $title.
		}
		// widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title');?>"><?php _e('Title:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<?php

	} // form for the widget options


	function update($new_instance, $old_instance){
		$instance=array();
		$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
		return $instance;


	} // update the widget.


	function widget($args,$instance){
		$title= apply_filters('widget_title',$instance['title']);  // assigning title to widget.
		
		$categories=get_categories();
		// foreach($categories as $category){
		// 	echo '</br>';
		// 	echo $category->name;
		// }
		?>

<div class="single-widget-area catagories-widget mb-80">
        <h5 class="widget-title"><?php echo $title;?></h5>

              <!-- catagories list -->
    <ul class="catagories-list">
		<?php foreach($categories as $category){ ?>
			<?php //echo $category->term_id;
			//echo get_category_link($category->term_id); ?>
		<li><a href="<?php echo get_category_link($category->term_id); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php echo $category->name;?></a></li>   
		<?php } ?>
			  
               
                
                
			  </ul>
			 
            </div>


		<?php
		


		//echo $args['after_widget'];  // </aside>

	} // display the widget -- front end user.

}

//-------------------------------------------------------------------------------------------------------

// Making one more widgets for tags

function register_my_widget2(){
	
	
	register_widget('my_Widget2');  // this function registers the widget and take class name as parameter.
}
add_action('widgets_init','register_my_widget2');

class my_Widget2 extends WP_Widget{

	function __construct()  // constructor of class
	{
		parent::__construct(  // parent class constructor. i.e. constructor of 'WP_Widget' class.
			'my_widget2',  //id
			__('Custom_Tags'),  //Menu title of the Widget. 
			array('description'=>__('Sample widget based on listing of Tags'))  // discription
		);	
		
	}  // widget setting



	function form($instance){    // this function will make a form in backend so that user can provide title of the widget throug a text field they are making.

		if(isset($instance['title'])){    // $instance is an array which contains 'title' as key and the value is the name of the title we give. 
			$title=$instance['title'];

		} else{
			$title = __('New title','my_widget_domain');  // here a new value of title is assigned to $title.
		}
		// widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title');?>"><?php _e('Title:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<?php

	} // form for the widget options


	function update($new_instance, $old_instance){
		$instance=array();
		$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
		return $instance;


	} // update the widget.


	function widget($args,$instance){
		$title= apply_filters('widget_title',$instance['title']);  // assigning title to widget.
		
		$tags=get_tags();
		//print_r($tags); ?>

		<div class="single-widget-area tags-widget mb-80">
              <h5 class="widget-title"><?php echo $title;?></h5>

              <ul class="tags-list">
				  <?php foreach($tags as $tag){ ?>

				
				<li><a href="<?php echo get_tag_link($tag->term_id);?>"><?php echo $tag->name;?></a></li>
				<?php } ?>
              </ul>
            </div>
			<?php echo( home_url( '/' ) );?>
		
		<?php

		//echo $args['after_widget'];  // </aside>

	} // display the widget -- front end user.

}

//-----------------------------------------------------------------------------------------------------

// registering custom taxonomy named podcast

function func_podcast_custom(){
	$labels = [
        'name'              => _x('Podcasts', 'taxonomy general name'),
'singular_name'     => _x('Podcast', 'taxonomy singular name'),
'search_items'      => __('Search Podcasts'),
'all_items'         => __('All Podcasts'),
'parent_item'       => __('Parent Podcast'),
'parent_item_colon' => __('Parent Podcast:'),
'edit_item'         => __('Edit Podcast'),
'update_item'       => __('Update Podcast'),
'add_new_item'      => __('Add New Podcast'),
'new_item_name'     => __('New Podcast Name'),
'menu_name'         => __('Podcast'),
];

$args=[
	'labels' => $labels,
'public' => true,
'publicly_queryable' => true,
'show_ui' => true,
'show_in_menu' => true,
'query_var' => true,
'rewrite' => array( 'slug' => 'Podcast' ),
'capability_type' => 'post',
'has_archive' => true,
'hierarchical' => false,
'menu_position' => null,
'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
];
register_taxonomy('Podcast', ['post'], $args);
}
add_action('init','func_podcast_custom');

//--------------------------------------------------------------------------------------------------
function wpwa_comment_list($comment, $args, $depth){
         
	?>
	<li class="single_comment_area">
	<!-- Comment Content -->
	<?php 
		if($comment->comment_approved == '0'){

		}
	?>

		<div class="comment-content d-flex">
		<!-- Comment Author -->
			<div class="comment-author">
				<?php echo get_avatar($comment,$size='60');?>
			</div>
			<!-- Comment-meta -->
			<div class="comment-meta">
				<a href="#" class="post-date"><?php comment_date();?></a>
				<h5><?php comment_author();?></h5>
				<p><?php comment_text();?></p>
				<a href="#" class="like">Like</a>
				<?php comment_reply_link(array_merge($args,array(
					'reply_text' => __('Reply','textdomain'),
					'depth' => $depth,
				)
				));?>
			</div>
		</div>
	</li>
	<?php	 
}



