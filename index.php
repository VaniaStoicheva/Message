
<?php

session_start();
require_once 'include/config.php';
$requestParts=  explode('/',  parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
$controllerName='DEFAULT_CONTROLLER';
if(count($requestParts)>=2 && $requestParts[1]!=''){
    $controllerName=$requestParts[1];
}
$action='DEFAULT_ACTION';
if(count($requestParts)>=3 && $requestParts[2]!=''){
    $action=$requestParts[2];
}
$params=array_splice($requestParts,3);
$controllerClassName=  ucfirst(strtolower($controllerName)).'Controller';
$controllerFileName='controllers/'.$controllerClassName.'.php';
var_dump($controllerFileName);
 $controller=new $controllerClassName($controllerName,$action);
    var_dump($controller);

if(class_exists($controllerClassName)){
    $controller=new $controllerClassName($controllerName,$action);
    var_dump($controller);
die();
}else{
    die('Cannot find controller');
}
if(method_exists($controller,$action)){
    call_user_func_array(array($controller,$action),$params);
}else{
    die('cannot find action');
}
function __autoload($class_name){
    if(file_exists('controller/$class_name.php')){
        include 'controller/class_name.php';
    }
    if(file_exists('models/class_name.php')){
        include 'models/class_name.php';
    }
}
