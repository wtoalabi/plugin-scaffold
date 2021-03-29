<?php
	/**
	 * Created by Alabi Olawale
	 * Date: 08/07/2020
	 */
	
	namespace App\Core\Configs;
	
	
	use WP_REST_Server;
	use function Config\config;
	
	class Route {
		
		
		public static function Get( $endpoint, $controller, $autoAction = false ) {
			self::Register( $endpoint, $controller, WP_REST_Server::READABLE, $autoAction );
		}
		
		public static function Post( $endpoint, $controller, $autoAction = false ) {
			self::Register( $endpoint, $controller, WP_REST_Server::CREATABLE, $autoAction );
		}
		
		public static function PATCH( $endpoint, $controller, $autoAction = false ) {
			self::Register( $endpoint, $controller, WP_REST_Server::EDITABLE, $autoAction );
		}
		
		public static function PUT( $endpoint, $controller, $autoAction = false ) {
			self::Register( $endpoint, $controller, WP_REST_Server::EDITABLE, $autoAction );
		}
		
		public static function DELETE( $endpoint, $controller, $autoAction = false ) {
			self::Register( $endpoint, $controller, WP_REST_Server::DELETABLE, $autoAction );
		}
		
		public static function Rest( $endpoint, $controller ) {
			self::Get( $endpoint, $controller, "index" );
			self::Post( $endpoint, $controller, "post" );
			self::PUT( $endpoint, $controller, "update");
			self::PATCH( $endpoint, $controller, "update");
			self::DELETE( $endpoint, $controller, "delete");
			
		}
		
		protected static function Register( $endpoint, $controller, $method, $autoAction = false ) {
			$namespace       = config( "rest_namespace" );
			$controllersPath = config( "controllers_path" );
			[ $class, $action ] = get_action( $controller );
			if ( ! $action && $autoAction != false ) {
				$action = $autoAction;
			}
			
			register_rest_route( $namespace, $endpoint, [
				'methods'  => $method,
				'callback' => [ "$controllersPath\\$class", $action ],
			] );
			
			return null;
		}
	}
	
	function get_action( $controller ) {
		return preg_split( "/@/", $controller, "2" );
	}
