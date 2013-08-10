<?php	

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('WEBROOT_APP', str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__));
// $root_path = 'http://'.$_SERVER['HTTP_HOST'].(WEBROOT_APP).'/';
define("ROOT_URL", 'http://'.$_SERVER['HTTP_HOST'].(WEBROOT_APP).'/');

/* 
echo dirname(dirname(dirname(__FILE__)));

define('PROJECT_ROOT', realpath('.'));

// echo PROJECT_ROOT;

echo $_SERVER["SERVER_NAME"];



// echo __DIR__ ;

echo realpath(__DIR__);

if (!defined('WEBROOT_DIR')) {
	define('WEBROOT_DIR', basename(dirname(__FILE__)));
}

 //echo  $file = realpath(dirname(__FILE__));

 echo WEBROOT_DIR;*/

$url = $_GET['url'];
/*echo "<pre>";
print_r($_SERVER);

print_r($_GET);*/

$querydata = $_SERVER['REQUEST_URI'];


require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');
