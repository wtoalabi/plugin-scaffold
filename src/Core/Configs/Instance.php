<?php
	/**
	 * Created by Alabi Olawale
	 * Date: 08/07/2020
	 */
	
	namespace App\Core\Configs;
	
	
	use App\Core\Hooks\Hooks;
	
	class Instance {
		public static function Activate() {
		}
		
		public static function Deactivate() {
		}
		
		public static function Initialize() {
			Hooks::Bootstrap();
		}
	}
