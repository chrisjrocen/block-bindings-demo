<?php
/**
 * @package Block_Bindings_Demo
 */
namespace Block_Bindings_Demo\Base;

/**
 * The deactivate class for the plugin.
 *
 * This class is responsible for handling the deactivation of the plugin.
 */
class Deactivate {

	/**
	 * Deactivate the plugin.
	 *
	 * @return void
	 */
	public static function deactivate() {
		flush_rewrite_rules();
	}
}