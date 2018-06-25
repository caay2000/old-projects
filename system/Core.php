<?php

	class Core{
		
		private static $defaultController = array('path' => array(), 'class' => DEFAULT_CONTROLLER_SYS, 'method' => DEFAULT_CONTROLLER_METHOD_SYS, 'query' => array());
		
		public static function init(){
			//carreguem el controlador
			spl_autoload_register(array('Core', 'auto_load'));
			//parsejem la url correcte, apartant els parametres per GET
			$qs = array_filter(explode("&", substr($_SERVER['QUERY_STRING'],1)));
			isset($qs[0])? $url = array_filter(explode("/", $qs[0])): $url = array();
			//busquem el controllador correcte amb la funcio recursiva
			$controller = self::parseURL(array('path' => $url, 'class' => DEFAULT_CONTROLLER_SYS, 'method' => DEFAULT_CONTROLLER_METHOD_SYS, 'query' => array()));
			
			try{
				$controller['class'] .= 'Controller';
				$class = $controller['class']::__init($controller['class']);

				session_start();
				session_regenerate_id();
				
// 				Locales::init();
				
				self::parseParameters($controller['class']);
				
				$view = call_user_func_array(array($class,$controller['method']), array($controller['query']));

				$view->__render();
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}
		
		private static function parseURL($controller){
			//funcio recursiva per a parsejar correctament la url
			//exemple d'execucio  PATH   CONT   METO   QUER
			//					  a/b/   Def    Def     -
			//					   a/     b     Def     -
			//					   -      a      b      -
			//					   -     Def     a      b
			//contr. defecte	   -     Def    Def    a/b/
			//per a debugar decomentar -> print_r($controller);echo '<br/>';
			if(sizeOf($controller['path'])===0 && $controller['class'] == DEFAULT_CONTROLLER_SYS 
					&& $controller['method'] == DEFAULT_CONTROLLER_METHOD_SYS){
				//si la mida de path es zero, i el metode i el controllador son els per defecte, no hi ha resultat, retornem controller per defecte
				return self::$defaultController;
			} else {
				if(self::findController($controller)){
					//si existeix el path/controllador i methode, el retornem
					if($controller['class'] == DEFAULT_CONTROLLER_SYS && $controller['method'] == ucfirst(DEFAULT_CONTROLLER_METHOD_SYS)
							&& sizeOf($controller['query']) > 0 ) {
						$controller['method'] = 'error404';
					}
					return $controller;
				} else {
					//generem el seguent pas a buscar i cridem a la mateix funcio
					return self::parseURL(self::nextStep($controller));
				}
			}
		}
		
		private static function nextStep($controller){
			//generem el seguent pas de la funcio recursiva passant elements de path->class->method->query
			if(strtolower($controller['method']) !== DEFAULT_CONTROLLER_METHOD_SYS) array_unshift($controller['query'], $controller['method']);
			if($controller['class'].'Controller' !== DEFAULT_CONTROLLER_SYS) $controller['method'] = $controller['class'];
			$controller['class'] = array_pop($controller['path']);
			//si el controllador o el metode son nulls, posem els per defecte
			if($controller['class'] === null) $controller['class'] = DEFAULT_CONTROLLER_SYS;
			if($controller['method'] === null) $controller['method'] = DEFAULT_CONTROLLER_METHOD_SYS;
			return $controller;
		}
		
		private static function findController($controller){
			//recorrem l'array de path i creem una ruta (ex. array('a', 'b', 'c') -> 'a/b/c/')
			$path = '';
			foreach ($controller['path'] as $pathStep) $path .= $pathStep.'/';
			//busquem el fitxer del controllador al path adequat;
			if(file_exists(SERVER_ROOT.CONTROLLER_PATH.$path.ucfirst($controller['class']).'Controller.php')){
				//si existeix el fitxer, comprobem si conte el metode
				$class = ucfirst($controller['class'].'Controller');
				return method_exists($class::__init($class), $controller['method']);
			} else return false;
		}

		static function auto_load($className){
			self::nested_auto_load($className, CONTROLLER_PATH);
			self::nested_auto_load($className, MODEL_PATH);
// 			self::nested_auto_load($className, SERVICE_PATH);
		}
		
		private static function nested_auto_load($className, $path)  {
			self::load($className, SERVER_ROOT.$path);
			$handle = opendir(SERVER_ROOT.$path);
			while (false !== ($entry = readdir($handle))) {
				if ($entry != "." && $entry != ".." && substr($entry, strlen($entry)-4) !== '.php')
					if(self::load(ucfirst($className), SERVER_ROOT.$path.$entry.'/') !== false) return;
			}
			closedir($handle);
		}

		private static function load($className, $path){
			if(file_exists($path.$className.'.php')) include $path.$className.'.php';
			else return false;
		}
		
		private static function parseParameters($controller){
			if(isset($_SESSION['params'])){
				$controller::setParameters($_SESSION['params']);
				unset($_SESSION['params']);
			}
		}
		
	}