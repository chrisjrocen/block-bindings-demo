<?php
/**
 * Plugin Name:     Block Bindings Demo
 * Plugin URI:      https://www.ocenchris.com
 * Description:     A demo plugin to show how to use block bindings in WordPress.
 * Author:          Ocen Chris
 * Author URI:      https://www.ocenchris.com
 * Text Domain:     block-bindings-demo
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package Block_Bindings_Demo
 */
// If this file is called directly, abort!!!
defined( 'ABSPATH' ) || die( 'No Access!' );

// Require once the Composer Autoload.
if ( file_exists( __DIR__ . '/lib/autoload.php' ) ) {
	require_once __DIR__ . '/lib/autoload.php';
}

/**
 *  Runs during plugin activation.
 *
 * @return void
 */
function activate_block_bindings_demo_plugin() {
	Block_Bindings_Demo\Base\Activate::activate();
}

register_activation_hook( __FILE__, 'activate_block_bindings_demo_plugin' );

/**
 *  Runs during plugin deactivation.
 *
 * @return void
 */
function deactivate_block_bindings_demo_plugin() {
	Block_Bindings_Demo\Base\Deactivate::deactivate();
}

register_deactivation_hook( __FILE__, 'deactivate_block_bindings_demo_plugin' );


/**
 * Initialize all the core classes of the plugin.
 */
if ( class_exists( 'Block_Bindings_Demo\\Init' ) ) {
	Block_Bindings_Demo\Init::register_services();
}
