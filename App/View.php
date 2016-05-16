<?php

namespace App;

class View {
    
    
    public static function make($url, $vars = null){
        $url = preg_replace("/\\./uimx", "/", $url);
        return self::includeFile("view/{$url}.php", $vars);
    }
    
    /**
     * Return a php file in the view folder
     * @param  string  $filename      
     * @param  array   [$vars         = null]
     * @return string/boolean
     */
    public static function includeFile($filename, $vars = null){
        if (is_file($filename)) {
            ob_start();
            if($vars !== null ) extract($vars);
            include $filename;
            return ob_get_clean();
        }
        return false;
    }
}