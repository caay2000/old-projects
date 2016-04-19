<?php
	
	require_once ('View.php');

	/*Controller*/
	class Controller{

		private static $className;
		
		private static $parameter = array();
		
		public static function __init($className){
			self::$className = $className;
			return new $className;
		}
		
		public function __toString(){
			return self::$className;
		}
		
		public static function setParameters($params){
			self::$parameter = $params;
		}
		protected function getParameters(){
			return self::$parameter;
		}
		
		public function __call($method, $args){
			throw new Exception("Error loading method ".$method." of class ".self::$className);
		}
		
		function error404(){
			return new View(ERROR_PAGE_404);
		}
		
	}