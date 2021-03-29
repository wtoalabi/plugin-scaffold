<?php 
	
	/**
	 * Created by Alabi Olawale
	 * Date: 05/07/2020
	 * Plugin Name: Pluggin Scaffold
	 * Plugin URI: https://plugin-scaffold.appsbay.xyz
	 * Description: Boostrap your plugin development workflow
	 * Author: AppsBay
	 * Version: 0.0.1
	 * Author URI: https://appsbay.io
	 */
	require __DIR__  . '/vendor/autoload.php';
	
	use App\Core\Configs\Instance;
	
	\Config\doOrDie();
	
	register_activation_hook( __FILE__, 'apps_bay_activate_plugin' );
	register_deactivation_hook( __FILE__, 'apps_bay_deactivate_plugin' );
	Initialize();
	
	function Initialize() {
		add_action( 'init', [ "App\Core\Configs\Instance", "Initialize" ] );
	}
	
	function apps_bay_activate_plugin() {
		Instance::Activate();
	}
	
	function apps_bay_deactivate_plugin() {
		Instance::Deactivate();
	}
	
