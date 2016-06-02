<?php

namespace App;

use \App\Routes\Direct as Direct;

define('YES', true);
define('NO', false);

define('POST', 'POST');
define('GET', 'GET');
define('DELETE', 'DELETE');
define('UPDATE', 'UPDATE');



/**
 * Die and Dump
 * @param any $str
 */
function dd($str){
    die("<pre>".__CLASS__.print_r($str, true)."</pre>");
}

$autoloader = spl_autoload_register(function($class){
    $file = implode('/', explode('\\', "{$class}.php"));
    if(file_exists($file)){
        require_once($file);
    } else {
        dd("class not found: $class, ($file)");   
    }
});



require_once('app/Routes/RouteSetup.php');


class App {
    
    private $url;
    
    public function __construct(){
        $this->url = $_SERVER['REQUEST_URI'];
        $route = Direct::getCurrentRoute($this->url);
        
        if(gettype($route) === 'array'){
            print_r($route);
            return;
        }
        
        $view = explode('@', $route);
        $obj = call_user_func([$view[0], $view[1]]);
        
        if(gettype($obj) !== 'string'){
            header('Content-type: application/json');
            echo json_encode($obj, JSON_UNESCAPED_UNICODE);
            return;
        } else {
            echo $obj;
        }
        
    }
    
}
new App();