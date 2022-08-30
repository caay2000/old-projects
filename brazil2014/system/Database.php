<?php
	use Doctrine\ORM\Tools\Setup;
	require_once "vendor/autoload.php";
	
	class Database{
		
		static private $em;
		
		public static function getEntityManager(){
			if(!isset(self::$em)){
				$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__.MODEL_PATH), DEV_MODE);
				$conn = array( 'driver' => DB_DRIVER, 'host' => DB_HOST, 'user' => DB_USER, 'password' => DB_PASS, 'dbname' => DB_NAME );
				self::$em = \Doctrine\ORM\EntityManager::create($conn, $config);
			}
			return self::$em;
		}
	
	}