<?php
	define('PAGE_ROOT', '/russia2018');
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
	
	define('ADMIN_USER', '***********');
	define('ADMIN_PSW', '***********');
	
	define('DEFAULT_TEMPLATE', 'default');
	define('DEFAULT_LANG', 'en');

	define('DB_DRIVER', 'pdo_mysql');
	define('DB_HOST', '***********');
	define('DB_USER', '***********');
	define('DB_PASS', '***********');
	define('DB_NAME', '***********');
	
	define('DATE_FORMAT', 'd-m-Y');
	define('DATE_EXPIRE', '14-6-2018 17:00');
