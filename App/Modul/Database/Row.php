<?php

namespace App\Modul\Database;

use \App\Modul\Database\Database as Database;
use \App\Modul\Database\Modul as Modul;


class Row extends Database{
    public $table = null,
           $id = null,
           $rows = []; // Cols
    
    public function __construct(array $array, $table){
        $this->table = $table;
        $this->id = $array[0];
        
        foreach($array as $key => $value){
            $this->rows[$key] = $value;
        }
    }
    
    public function delete($col = 'id'){
        Modul::deleteWhere($col, $this->id, $this->table);
    }
}
