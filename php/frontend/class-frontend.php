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
		wp_enqueue_script(
			'sample_wpajax_plugin',
			SAMPLE_WPAJAX_URL . '/js/init.js',
			array( 'jquery' ),
			SAMPLE_WPAJAX_VERSION,
			true
		);
		wp_localize_script(
			'sample_wpajax_plugin',
			'swpajaxp',
			array(
				'phpversion' => PHP_VERSION,
				'ajaxurl'    => admin_url( 'admin-ajax.php' ),
			)
		);
	}
}
