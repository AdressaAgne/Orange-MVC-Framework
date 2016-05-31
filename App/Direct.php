<?php

namespace App;

use \App\Routes as Routes;
use \App\Config as Config;

class Direct extends Routes{
    
    public function __construct($route, $callback, $type){
        if($type == 'get'){
            parent::$routes[$route] = Config::$controllers.$callback;
        }
        if($type == 'post'){
            parent::$post[$route] = Config::$controllers.$callback;
        }
        
    }

    /**
     * Create a new Direct
     * @param  integer  $a URI
     * @param  callback $b 
     * @return object   Direct Object
     */
    public static function to($a, $b){
        return new Direct($a, $b, 'get');
    }
   
    public static function post($a, $b){
        return new Direct($a, $b, 'post');
    }
    
    /**
     * Gets called when a method on \App\Direct does not exist
     * @private
     * @param string $func 
     * @param string $args 
     */
    public function __call($func, $args){
        die($func."(".implode(', ', $args).") is not a method of ".__CLASS__);
    }
    
}

