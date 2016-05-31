<?php

namespace App;

class Routes {
    
    public static $routes = [];
    public static $post = [];
    
    /**
     * Store all Directs in a array
     * @param  object $route Direct
     * @return string URI
     */
    public static function getCurrentRoute($route){
        if(!empty($_POST)){
            if(array_key_exists($route, self::$post)){
                 return array_key_exists($route, self::$post) ? self::$post[$route] : null;
            } else {
                 return array_key_exists($route, self::$routes) ? self::$routes[$route] : null;
            }
        } else {
             return array_key_exists($route, self::$routes) ? self::$routes[$route] : null;
        }
       
    } 
}