<?php

namespace App;

class Config {
    
    /**
    *   MySQL settings
    */
    public static $db = [
        'host'      => 'localhost',
        'database'  => 'test',
        'username'  => 'root',
        'password'  => 'root',
    ];
    
    /**
    *   Namespace for controllers
    */
    public static $controllers = '\App\Controllers\\';
}