<?php

	class Locales{
	
		static private $dicc;
	
		public static function init(){
			//carreguem el llenguatge adequat
			$lang = DEFAULT_LANG;
			//si ens canvien l'idioma, mirem si existeix, i si no existeix carreguem el catala
			if(isset($_GET['lang'])){
				if(file_exists(SERVER_ROOT.LOCALES_PATH . $_GET['lang'] . '.php')) $lang = $_GET['lang'];
				//si ja tenien un idioma predefinit, el carreguem
			} elseif(isset($_SESSION['lang'])) $lang = $_SESSION['lang'];
			//actualitzem el llenguatge de la sessi� i al atribut
			$_SESSION['lang'] = $lang;
			//carreguem el diccionari
			require_once SERVER_ROOT.LOCALES_PATH . $lang . '.php';
			self::$dicc = $dicc;
		}
		
		public static function __getKey($key){
			//retornem l'htmlentities de la key pasada
			return htmlentities(self::$dicc[$key]);
		}
		
	}
	
	function __($key){
		echo Locales::__getKey($key);
	}