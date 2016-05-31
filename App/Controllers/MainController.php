<?php

namespace App\Controllers;

use \App\View as View;
use \App\Modul\Item as Item;
use \App\Modul\Agnedb as Image;


/**
 * making a view with/without variables to render
 * @return object View
 */
class MainController {
    
    public static function index(){ 
        return View::make('index', [
            'items'  => Item::all(),
            'images' => Image::all()->desc(),
        ]);
    }
    
    public static function test(){
        return View::make('test');   
    }
    
    public static function post(){
        //Image::all()->first()->delete();
        Image::insert([
            'ball' => uniqid(),
            'snerk_id' => $_POST['subittetButton'],
            'ultra_snerk' => 'veldig'
        ]);
        
        return self::index();
    }
}