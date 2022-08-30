<?php

	class Service{
	
		static private $instance = array();
		
		public static function getInstance(){
			$class = get_called_class();
			if(!isset(self::$instance[$class])){
				self::$instance[$class] = new $class();
			}
			return self::$instance[$class];
		}
	
	}