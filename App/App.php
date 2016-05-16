<?php

namespace App;

use \App\Direct as Direct;

/**
 * Die and Dump
 * @param any $str
 */
function dd($str){
    die("<pre>".__CLASS__.print_r($str, true)."</pre>");
}

spl_autoload_register(function($class){
    $file = implode('/', explode('\\', "{$class}.php"));
    if(file_exists($file)){
        require_once($file);
    } else {
        dd("class not found: $class, ($file)");   
    }
});



include('app/RouteSetup.php');

class App {
    
    private $url;
    
    public function __construct(){
        $this->url = $_SERVER['REQUEST_URI'];

        $view = explode('@', Direct::getCurrentRoute($this->url));
        echo call_user_func([$view[0], $view[1]]);
    }
    
}
new App();