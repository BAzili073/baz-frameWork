<? 
class Autoloader {

  function __construct(){
    spl_autoload_register('Autoloader::_autoload');
  
  }

  static public function _autoload($name){
    require_once ($name.".php");
  }
  
  
  
  
}