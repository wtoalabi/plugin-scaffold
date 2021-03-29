<?php
	/**
	 * Created by Alabi Olawale
	 * Date: 08/07/2020
	 */
	
	namespace App\Core\Hooks;
	
	class Hooks {
		public static function Bootstrap() {
			Endpoints::Load();
			Menu::Load();
			Scripts::Load();
			Locale::Load();
			Styles::Load();
			Plugs::Load();
		}
	}
