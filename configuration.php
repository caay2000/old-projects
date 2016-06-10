<?php
	define('PAGE_ROOT', '/brazil2014');
	define('SERVER_ROOT', __DIR__);
	
	define('DEV_MODE', true);
	
	define('APP_PATH', SERVER_ROOT.'/app/');
	define('CONTROLLER_PATH', '/app/controller/');
	define('MODEL_PATH', '/app/model/');
	define('SERVICE_PATH', '/app/service/');
	
	define('LOCALES_PATH', '/app/views/locales/');
	define('TEMPLATE_PATH', '/app/views/template/');
	define('VIEWS_PATH', '/app/views/web/');
	
	define('MEDIA_PATH', PAGE_ROOT.'/media');
	
	define('DEFAULT_CONTROLLER', 'index');
	define('DEFAULT_CONTROLLER_METHOD', 'index');
	
	define('ERROR_PAGE_404', 'error404');
	
	define('ADMIN_USER', 'admin');
	define('ADMIN_PSW', 'asdf');
	
	define('DEFAULT_TEMPLATE', 'default');
	define('DEFAULT_LANG', 'en');

	define('DB_DRIVER', 'pdo_mysql');
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'france2016');
	
	define('DATE_FORMAT', 'd-m-Y');
	define('DATE_EXPIRE', '10-6-2016 14:00');