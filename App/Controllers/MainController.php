<?php

namespace App\Controllers;

use \App\View as View;
use \App\Routes\Direct as Direct;
use \App\Routes\Routes as Route;

use \App\Modul\Item as Item;
use \App\Modul\Agnedb as Image;

/**
 * making a view with/without variables to render
 * @return object View
 */
class MainController {
    // run on get /
    public static function index(){ 
        return View::make('index', [
            'items'  => Item::all(),
            'images' => Image::all()->desc(),
        ]);
    }
    
    // run on get /test
    public static function test(){
        return View::make('test',[
            'routes' => Route::lists()
        ]);
    }
    
    // This function is run on post /
    public static function insert(){
        Image::insert([
            'ball' => uniqid(),
            'snerk_id' => $_POST['submit'],
            'ultra_snerk' => 'veldig'
        ]);
        return Direct::re('/');
    }
    
    public static function delete(){
        Image::all()->where($_POST['id'])->delete();

        return Direct::re('/');
    }
    
    public static function api(){
        return Image::all()->desc();
    }
}