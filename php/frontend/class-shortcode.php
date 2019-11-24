<?php
/**
 * Create and output a shortcode.
 *
 * @package   Sample_WPAjax_Plugin
 */

namespace Sample_WPAjax_Plugin\Frontend;

/**
 * Load Frontend Shortcode
 */
class Shortcode {

	/**
	 * Register hooks needed for this class.
	 */
	public function register_hooks() {
		add_shortcode( 'swpajax_form', array( $this, 'output_shortcode' ) );
	}


	/**
	 * Output a simple form shortcode.
	 *
	 * @param array  $atts Passed shortcode parameters.
	 * @param string $content Passed content item.
	 *
	 * @return string Shortcode html.
	 */
	public function output_shortcode( $atts = array(), $content = '' ) {
		$defaults = shortcode_atts(
			array(),
			$atts,
			'swpajax_form'
		);
		ob_start();
		?>
		<form action="<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>" id="swpajax-form">
			<label for="swpajax-name">
				<?php esc_html_e( 'Enter your name', 'sample-wpajax-plugin' ); ?>:
			</label>
			<br />
			<input id="swpajax-name" name="swpajax-name" value="" placeholder="<?php esc_attr( __( 'Enter your name', 'sample-wpajax-plugin' ) ); ?>" />
			<br />
			<button id="swpajax-submit">
				<?php esc_html_e( 'Submit', 'sample-wpajax-plugin' ); ?>
			</button>
		</form>
		<?php
		return ob_get_clean();
	}
}
