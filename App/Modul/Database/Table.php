<?php

namespace App\Modul\Database;

use \App\Modul\Database\Database as Database;
use \App\Modul\Database\Row as Row;

class Table extends Database{
    
    public function __construct(array $array){
        foreach($array as $key => $value){
            $value = new Row($value);
            $this->{$value->id} = $value;
        }
    }
    
}
