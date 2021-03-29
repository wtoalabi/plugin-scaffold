<?php
	/**
	 * Created by Alabi Olawale
	 * Date: 08/07/2020
	 */
	
	namespace App\Core\Hooks;
	
	
	use WPHelper\AdminMenuPage;
	use function Config\config;
	
	class Menu {
		public static function Load() {
			self::MainMenu();
		}
		
		private static function MainMenu() {
			$main_menu        = [
				'title'      => 'Sample Menu',
				'menu_title' => 'Sample Menu',
				'capability' => 'manage_options',
				'slug'       => config( "plugin_page"),
				'render'     => config( "plugin_path") . "Templates/sample_page.php",
				'icon_url'   => "dashicons-networking",
				'position'   => 1000
			];
			
			$admin_main_menu  = new AdminMenuPage( $main_menu );
			$admin_main_menu->setup();
		}
	}
