<?php
/**
 * Primary plugin file.
 *
 * @package   Sample_WPAjax_Plugin
 */

namespace Sample_WPAjax_Plugin;

/**
 * Class Plugin
 */
class Plugin extends Plugin_Abstract {
	/**
	 * Execute this once plugins are loaded.
	 */
	public function plugin_loaded() {

		// Load frontend assets.
		$this->frontend = new Frontend\Frontend();
		$this->frontend->register_hooks();

		// Load shortcode assets.
		$this->frontend_shortcode = new Frontend\Shortcode();
		$this->frontend_shortcode->register_hooks();
	}
}
