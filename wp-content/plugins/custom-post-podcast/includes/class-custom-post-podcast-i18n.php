<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       utkarsh-plugin
 * @since      1.0.0
 *
 * @package    Custom_Post_Podcast
 * @subpackage Custom_Post_Podcast/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Custom_Post_Podcast
 * @subpackage Custom_Post_Podcast/includes
 * @author     Utkarsh <saxenautkarsh170@gmail.com>
 */
class Custom_Post_Podcast_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'custom-post-podcast',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
