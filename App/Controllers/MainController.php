<?php

namespace App\Controllers;

use \App\View as View;
use \App\Modul\Item as Item;


/**
 * making a view with/without variables to render
 * @return object View
 */
class MainController {
    
    public static function index(){
        return View::make('index', [
            'items' => Item::all()
        ]);
    }
    
    public static function test(){
        return View::make('test');   
    }
    
}