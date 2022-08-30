<?php

	require_once ('Core.php');
	require_once ('Controller.php');
	require_once ('Locales.php');
	
	define('DEFAULT_CONTROLLER_SYS', ucfirst(strtolower(DEFAULT_CONTROLLER)));
	define('DEFAULT_CONTROLLER_METHOD_SYS', strtolower(DEFAULT_CONTROLLER_METHOD));
	
	session_start();
	
	//carreguem els locales adequats
	Locales::init();	
	
	Core::init();