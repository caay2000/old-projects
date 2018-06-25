<?php

	require_once ('Core.php');
	require_once ('Controller.php');
	require_once ('Locales.php');
	require_once ('Service.php');
	require_once ('AuthUtil.php');
	require_once ('Database.php');

	define('DEFAULT_CONTROLLER_SYS', ucfirst(strtolower(DEFAULT_CONTROLLER)));
	define('DEFAULT_CONTROLLER_METHOD_SYS', strtolower(DEFAULT_CONTROLLER_METHOD));
	
	Core::init();