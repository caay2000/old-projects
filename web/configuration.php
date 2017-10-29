<?php
	define('PAGE_ROOT', '/mirmolinaadvocats');
	define('SERVER_ROOT', __DIR__);
	
	define('DEV_MODE', true);
	
	define('CONTROLLER_PATH', '/app/controller/');
	define('MODEL_PATH', '/app/model/');
	
	define('LOCALES_PATH', '/app/views/locales/');
	define('TEMPLATE_PATH', '/app/views/template/');
	define('VIEWS_PATH', '/app/views/web/');
	
	define('MEDIA_PATH', PAGE_ROOT.'/media');
	define('PDF_MEDIA_PATH', PAGE_ROOT.'/media/img/upload/');
	
	define('PDF_UPLOAD_PATH', SERVER_ROOT.'/media/img/upload/');
	
	define('DEFAULT_CONTROLLER', 'index');
	define('DEFAULT_CONTROLLER_METHOD', 'index');
	
	define('DEFAULT_TEMPLATE', 'default');
	
	define('DEFAULT_LOCALE', 'es');

	define('DB_DRIVER', 'pdo_mysql');
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', 'XXXXXXXX');
	define('DB_NAME', 'mirmolinaadvocats');
	
	define('MAX_UPLOAD_SIZE', 2000000);