<?php

	class Locales{
	
		static private $dicc;
	
		public static function init(){
			//carreguem el llenguatge adequat
			$lang = DEFAULT_LOCALE;
			$server = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, strpos($_SERVER["HTTP_ACCEPT_LANGUAGE"], ';'));
			foreach (explode(',', $server) as $lang_poss){
				if($lang === NULL && self::exists($lang_poss)) $lang = $lang_poss;
			}
			//si ens canvien l'idioma, mirem si existeix, i si no existeix carreguem el catal?
			if(isset($_GET['lang'])){
				if(file_exists(SERVER_ROOT.LOCALES_PATH . $_GET['lang'] . '.php')) $lang = $_GET['lang'];
				//si ja tenien un idioma predefinit, el carreguem
			} elseif(isset($_SESSION['lang'])) $lang = $_SESSION['lang'];
			//actualitzem el llenguatge de la sessi? i al atribut
			$_SESSION['lang'] = $lang;
			//carreguem el diccionari
			require_once SERVER_ROOT.LOCALES_PATH . $lang . '.php';
			self::$dicc = $dicc;
		}
		
		public static function __getKey($key){
			//retornem l'htmlentities de la key pasada
			return htmlentities(self::$dicc[$key], ENT_COMPAT, "ISO-8859-1");
		}
		
	}
	
	function __($key){
		echo Locales::__getKey($key);
	}