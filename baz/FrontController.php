<?
class Baz_FrontController {
  function dispatch(){
    $uri = $_SERVER['REQUEST_URI'];
    $arr = explode("/","$uri");
    if (!$arr[1])
      $arr[1] = "index";
    if (!$arr[2])
      $arr[2] = "index";
    $arr[1]=ucfirst(strtolower($arr[1]));
    $arr[2]=ucfirst(strtolower($arr[2]));
    $classname = $arr[1]."_Controller";
    $controller = new $classname;
    $action = $arr[2]."Action";
    $controller->$action();
  }

}