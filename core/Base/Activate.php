<?php
/**
 * @package Block_Bindings_Demo
 */
namespace Block_Bindings_Demo\Base;

/**
 * The activate class for the plugin.
 *
 * This class is responsible for handling the activation of the plugin.
 */
class Activate {

	/**
	 * Activate the plugin.
	 *
	 * @return void
	 */
	public static function activate() {
		flush_rewrite_rules();
	}
}
