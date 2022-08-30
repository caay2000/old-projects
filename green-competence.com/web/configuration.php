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

define('DB_ACTIVE', FALSE);

define('MAX_UPLOAD_SIZE', 2000000);

//define('MAIL_TO', 'm.mulero@apabcn.cat');
define('MAIL_TO', 'caay2000@gmail.com');