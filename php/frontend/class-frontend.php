<?php
/**
 * Primary plugin file.
 *
 * @package   Sample_WPAjax_Plugin
 */

namespace Sample_WPAjax_Plugin\Frontend;

/**
 * Load Frontend Scripts/Styles
 */
class Frontend {

	/**
	 * Register hooks needed for this class.
	 */
	public function register_hooks() {
		add_action( 'wp_enqueue_scripts', array( $this, 'load_scripts' ) );
	}

	/**
	 * Load our Front-end scripts.
	 */
	public function load_scripts() {
		// Load any other scripts/styles here.
	}
}
