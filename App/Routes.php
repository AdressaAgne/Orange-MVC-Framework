<?php

namespace App;

class Routes {
    
    public static $routes = [];
    
    /**
     * Store all Directs in a array
     * @param  object $route Direct
     * @return string URI
     */
    public static function getCurrentRoute($route){
        return array_key_exists($route, self::$routes) ? self::$routes[$route] : null;
    } 
}