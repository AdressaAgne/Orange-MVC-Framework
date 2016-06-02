<?php

namespace App\Helpers;

class Form {
    
    
    public static function open( $url = "", $method = "POST", $attr = ""){
        //todo add CSRF token
        $html = "<form action='{$url}' method='{$method}'>";
        return $html.self::csrf();
        
    }
    
    public static function close(){
        
        return "</form>";
    }
    
    public static function csrf(){
        $token = sha1(uniqid());
        return "<input type='hidden' name='token' value='{$token}' />";
    }
    
}