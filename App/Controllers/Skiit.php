<?php

namespace App\Controllers;
    
use \App\View as View;
use \App\Modul\Test as Test;


class Skiit {
    
    public static function Sekk(){
        return View::make('skiit', [
            'skiit' => test::all()
        ]);
    }
    
}