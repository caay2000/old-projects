<?php

	//cal recordar, que primer de tot s'ha de modificar el .htacess del directori.
	//cal modificar la propietat RewriteBase
	define('MAINTENANCE', FALSE);
		
	define('PAGE_ROOT', '');
	define('SERVER_ROOT', __DIR__);
	
	define('CONTROLLER_PATH', '/app/controller/');
	define('MODEL_PATH', '/app/model/');
	
	define('LOCALES_PATH', '/app/views/locales/');
	define('TEMPLATE_PATH', '/app/views/template/');
	define('VIEWS_PATH', '/app/views/web/');
	
	define('MEDIA_PATH', PAGE_ROOT.'/media');
	
	define('DEFAULT_CONTROLLER', 'index');
	define('DEFAULT_CONTROLLER_METHOD', 'index');
	
	define('DEFAULT_TEMPLATE', 'default');

	define('DEFAULT_LOCALE', 'ca');
	
	if(MAINTENANCE===TRUE) include 'app/views/web/landing.php';
	else require_once 'system/system.php';