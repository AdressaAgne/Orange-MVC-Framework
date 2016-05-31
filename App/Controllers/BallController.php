<?php

namespace App\Controllers;
use \App\View as View;
use \App\Modul\Agnedb as Agnedb;

class BallController{
    
    public static function ball(){
        return View::make("ball2.ball", array(
            "skjiit" => Agnedb::all() 
        ));
    }
    
}//class