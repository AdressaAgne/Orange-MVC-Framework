<?php

namespace App\Modul\Database;

use \App\Modul\Database\Database as Database;
use \App\Modul\Database\Row as Row;

class Table extends Database{
    public $table = null,
           $rows = [];
    
    public function __construct(array $array, $table){
        $this->table = $table;

        foreach($array as $key => $value){
            $value = new Row($value, $this->table);
            $this->rows[$key] = $value;
        }
    }
    
    public function first(){
        return array_values($this->rows)[0];
    }
    
    public function last(){
        $arr = array_values($this->rows);
        return $arr[count($arr) - 1];
    }
    
    public function where($search, $col = 'id'){
        foreach($this->rows as $key => $val){
            if($val->{$col} == $search){
                return $val;
            }
        }
        
        return null;
    }
    
    public function desc($row = 'id', $desc = false){
        arsort($this->rows);
        return $this;
    }
}
