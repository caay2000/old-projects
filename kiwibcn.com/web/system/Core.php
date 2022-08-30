<?php

	class Core{
		
		public static function init(){
			
			$aux = "  --  ";
			//carreguem el controlador
			$url = array_filter(explode("/", substr($_SERVER['PATH_INFO'],1)));
			$controller = array();
			//class selector
			if(isset($url[0])){
				$class = ucfirst(strtolower($url[0])).'_Controller';
				if(file_exists(SERVER_ROOT.CONTROLLER_PATH.$class.'.php')){
					//el controllador existeix, el seleccionem
					$controller['class'] = $class; 
				} else {
					//el controlador no existeix, posem controlador per defecte i com a metode el controller;
					$controller['class'] = DEFAULT_CONTROLLER_SYS."_Controller";
					array_unshift($url, NULL);
				}
			//no hi ha controlador a la url, controlador per defecte
			} else $controller['class'] = DEFAULT_CONTROLLER_SYS."_Controller";
			//method selector
			$controller['method'] = strtolower((isset($url[1])? $url[1]: DEFAULT_CONTROLLER_METHOD_SYS));
			//query selector
			$controller['query'] = (isset($url[2])? $url[2]: NULL);
			
 			//print_r($controller);
			try{								
				spl_autoload_register(array('Core', 'auto_load'));
				$class = $controller['class']::__init($controller['class']);
				
				spl_autoload_register(array('Core', 'model_auto_load'));
				$view = call_user_func_array(array($class,$controller['method']), array($controller['query']));

				$view->__render();
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}
		
		private static function auto_load($className){
			self::load($className, SERVER_ROOT.CONTROLLER_PATH);			
		}
		
		private static function model_auto_load($className)  {
			self::load($className, SERVER_ROOT.MODEL_PATH);			
		}
		
		private static function load($className, $path){
			if(file_exists($path.$className.'.php')) include $path.$className.'.php';
			else return false;
		}
		
	}
	
