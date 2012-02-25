<? 
class Baz_Autoloader {

  function __construct(){
    spl_autoload_register('Baz_Autoloader::framework_autoload');
    spl_autoload_register('Baz_Autoloader::application_autoload');
  }

  static public function framework_autoload($name){
   // if (preg_match("/Baz_.*/",$name))
      $arr = explode("_",$name);
      if ($arr[0] == "Baz")
        require_once ($arr[1].".php");
  }
  
  static public function application_autoload($name){
    $arr = explode("_",$name);
    $dir = strtolower($arr[1]);
    $file = $arr[0].$arr[1].".php";
    require_once ("application/$dir/$file");
  }
  
  
}