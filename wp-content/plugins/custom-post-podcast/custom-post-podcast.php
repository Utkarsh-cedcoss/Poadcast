<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              utkarsh-plugin
 * @since             1.0.0
 * @package           Custom_Post_Podcast
 *
 * @wordpress-plugin
 * Plugin Name:       custom podcast
 * Plugin URI:        custom-podcast
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Utkarsh
 * Author URI:        utkarsh-plugin
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       custom-post-podcast
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CUSTOM_POST_PODCAST_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-custom-post-podcast-activator.php
 */
function activate_custom_post_podcast() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-post-podcast-activator.php';
	Custom_Post_Podcast_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-custom-post-podcast-deactivator.php
 */
function deactivate_custom_post_podcast() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-post-podcast-deactivator.php';
	Custom_Post_Podcast_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_custom_post_podcast' );
register_deactivation_hook( __FILE__, 'deactivate_custom_post_podcast' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-custom-post-podcast.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_custom_post_podcast() {

	$plugin = new Custom_Post_Podcast();
	$plugin->run();

}
run_custom_post_podcast();

//--------------------------------------------------------------------------------------------------------------------------
// registering custom post type.
function register_post()
{
register_post_type(
'podcast',
array(
'public' => true,
'show_in_nav_menus' => true,
'has_archive' => false,
'taxonomies' => array( 'category', 'post_tag' ),
'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
'labels' =>
array(
'name' => ('Podcasts'),
'singular_name' => __('Podcast'),
),
)
);
}
add_action('init','register_post');

//--------------------------------------------------------------------------------------------------------------------------
// registering custom taxonomy.
function wporg_taxonomy(){
	$labels = [
		'name' => _x('Pod_types', 'taxonomy general name'),
		'singular_name' => _x('Pod_type', 'taxonomy singular name'),
		'search_items' => __('Search Pod_types'),
		'all_items' => __('All Pod_types'),
		'parent_item' => __('Parent Pod_type'),
		'parent_item_colon' => __('Parent Pod_type:'),
		'edit_item' => __('Edit Pod_type'),
		'update_item' => __('Update Pod_type'),
		'add_new_item' => __('Add New Pod_type'),
		'new_item_name' => __('New Pod_type Name'),
		'menu_name' => __('Pod_type'),
		];

		$args = [
			'hierarchical' => true, // make it hierarchical (like categories)
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => ['slug' => 'Pod_type'],
			];
			register_taxonomy('Pod_type', ['podcast'], $args );	
}
add_action('init','wporg_taxonomy');
