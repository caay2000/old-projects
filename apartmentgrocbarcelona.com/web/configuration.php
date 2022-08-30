<?php
	define('PAGE_ROOT', '');
	define('SERVER_ROOT', __DIR__);
	
	define('DEV_MODE', true);
	
	define('CONTROLLER_PATH', '/app/controller/');
	define('MODEL_PATH', '/app/model/');
	define('SERVICE_PATH', '/app/service/');
	
	define('LOCALES_PATH', '/app/views/locales/');
	define('TEMPLATE_PATH', '/app/views/template/');
	define('VIEWS_PATH', '/app/views/web/');
	
	define('MEDIA_PATH', PAGE_ROOT.'/media');
	define('UPLOAD_MEDIA_PATH', PAGE_ROOT.'/media/img/upload/');
	
	define('IMAGE_UPLOAD_PATH', SERVER_ROOT.'/media/img/upload/');
	
	define('DEFAULT_CONTROLLER', 'index');
	define('DEFAULT_CONTROLLER_METHOD', 'index');
	
	define('DEFAULT_TEMPLATE', 'default');
	
	define('DEFAULT_LOCALE', 'es');

	define('DB_DRIVER', 'pdo_mysql');
	define('DB_HOST', getenv('DB_HOST'));
	define('DB_NAME', getenv('DB_NAME'));
	define('DB_USER', getenv('DB_USER'));
	define('DB_PASS', getenv('DB_PASS'));

	define('MAX_NUM_APT', 8);

	define('USR_ADMIN', getenv('USR_ADMIN'));
	define('PSW_ADMIN', getenv('PSW_ADMIN'));

	define('MAIL_INFO', getenv('MAIL_INFO'));
	define('MAIL_TO', getenv('MAIL_TO'));