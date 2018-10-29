<?php
// cli-config.php
require_once "configuration.php";
require_once "system/Core.php";

use Doctrine\ORM\Tools\Setup;
require_once __DIR__ .  "../vendor/autoload.php";

spl_autoload_register(array('Core', 'auto_load'));

$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__.MODEL_PATH), DEV_MODE);
$conn = array( 'driver' => DB_DRIVER, 'host' => DB_HOST, 'user' => DB_USER, 'password' => DB_PASS, 'dbname' => DB_NAME );
$em = \Doctrine\ORM\EntityManager::create($conn, $config);

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));
