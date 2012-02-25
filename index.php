<?
define('ROOT_PATH', realpath(dirname(__FILE__)));
define('BAZ_PATH', ROOT_PATH."/baz");
set_include_path (ROOT_PATH.";".BAZ_PATH);
require_once ("Autoloader.php");
new Autoloader;
$front = new FrontController;
$front->dispatch();  


?>