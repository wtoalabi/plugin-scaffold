<?php
	/**
	 * Created by Alabi Olawale
	 * Date: 08/07/2020
	 */
	
	namespace App\Core\Hooks;
	
	
	use function Config\config;
	
	class Styles {
		public static function Load() {
			$name = config( "plugin" );
			$version = config( "plugin_version" );
			$path = config( "plugin_assets" ). 'styles/app.css';
      $fontsPath = config( "plugin_assets" ) .'fonts/fonts.css';
      wp_enqueue_style( $name.'-fonts',  $fontsPath, [],"0.0.1" , );
			wp_enqueue_style( $name.'-styles',  $path, [],$version , "all" );
		}
	}