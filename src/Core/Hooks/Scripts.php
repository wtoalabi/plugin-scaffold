<?php
	/**
	 * Created by Alabi Olawale
	 * Date: 08/07/2020
	 */
	
	namespace App\Core\Hooks;
	
	
	use function Config\config;
	
	class Scripts {
		public static function Load() {
			$name = config( "plugin" );
			$version = config( "plugin_version" );
			$path = config( "plugin_assets" ) . 'js/app.js';
			wp_enqueue_script( $name,$path , [], $version , true );
			wp_localize_script( $name, "globals",[
				'token'=>wp_create_nonce("wp_rest"),
				'siteRestUrl' => config( "rest_url") . config( "rest_namespace"),
			]);
			
		}
	}