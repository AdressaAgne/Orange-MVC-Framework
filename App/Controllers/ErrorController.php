<?php
namespace App\Controllers;

use \App\View as View;
use \App\Modul\Agnedb as Agnedb;

class ErrorController{
    
    public static function pageNotFound(){
        return View::make("error.404");
    }
    
}//class