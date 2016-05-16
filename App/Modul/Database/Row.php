<?php

namespace App\Modul\Database;

use \App\Modul\Database\Database as Database;

class Row extends Database{
    public function __construct(array $array){
        foreach($array as $key => $value){
            $this->{$key} = $value;
        }
    }
    
}
