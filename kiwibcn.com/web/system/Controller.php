<?php
	
	include_once ('View.php');

	/*Controller*/
	class Controller{

		private static $className;
		
		public static function __init($className){
			self::$className = $className;
			return new $className;
		}
		
		public function __toString(){
			return self::$className;
		}
		
		public function __call($method, $args){
			throw new Exception("Error loading method ".$method." of class ".self::$className);
		}
		
	}