<?php
/**
 * @package Block_Bindings_Demo
 */
namespace Block_Bindings_Demo\Admin;

/**
 * The BlockBindingsDemo class for the plugin.
 */
class BlockBindingsDemo {

	/**
	 * Registers the custom meta field for the 'post' post type.
	 *
	 * @return void
	 */
	public function register() {
		add_action( 'init', array( $this, 'block_bindings_demo_register_meta' ) );
	}

	/**
	 * Registers a custom meta field for the 'post' post type.
	 *
	 * This function registers a meta field named 'block_bindings_demo_meta' for the 'post' post type,
	 * allowing it to be used in the REST API and ensuring it is sanitized properly.
	 *
	 * @return void
	 */
	public function block_bindings_demo_register_meta() {
		register_meta(
			'post',
			'block_bindings_demo_meta',
			array(
				'show_in_rest'      => true,
				'single'            => true,
				'type'              => 'string',
				'sanitize_callback' => 'wp_strip_all_tags',
				'default'           => 'Test Meta Value',
			)
		);
		register_meta(
			'post',
			'block_bindings_demo_image_url',
			array(
				'show_in_rest'      => true,
				'single'            => true,
				'type'              => 'string',
				'sanitize_callback' => 'esc_url_raw',
				'default'           => $this->plugin_path . 'assets/images/placeholder.jpg',
			)
		);
	}
}
