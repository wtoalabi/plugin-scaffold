<?php
	/**
	 * Created by Alabi Olawale
	 * Date: 08/07/2020
	 */
	
	namespace App\Core\Hooks;
	
	use App\Core\Configs\Route;
	use Globals;
	use function Config\config;
	
	class Endpoints {
		public static function Load() {
			add_action( 'rest_api_init', function () {
				self::Register();
			} );
		}
		
		private static function Register() {
			Route::Get( "dashboard", "Dashboard\DashboardControllers@index" );
			Route::Post( "dashboard", "Dashboard\DashboardControllers@store" );
			Route::PATCH( "dashboard", "Dashboard\DashboardControllers@update" );
			Route::DELETE( "dashboard", "Dashboard\DashboardControllers@delete" );
		}
	}
