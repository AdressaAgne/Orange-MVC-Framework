<?php

namespace App\Controllers;

use \App\View as View;
use \App\Modul\Item as Item;
use \App\Modul\Image as Image;


/**
 * making a view with/without variables to render
 * @return object View
 */
class MainController {
    
    public static function index(){
        return View::make('index', [
            'items' => Item::all(),
            'images' => Image::all()
        ]);
    }
    
    public static function test(){
        return View::make('test');   
    }
    
}