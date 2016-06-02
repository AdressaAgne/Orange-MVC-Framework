<?php

namespace App\Modul\Database;

use IteratorAggregate,
    JsonSerializable,
    ArrayIterator,
    ArrayAccess,
    Countable;

class Database implements IteratorAggregate, ArrayAccess, Countable, JsonSerializable{
   
    /**
     * Do a foreach loop on the object
     * @return value
     */
    public function getIterator(){
        return new ArrayIterator($this->rows);
    }
    
    /**
     * $object[$key] = $value
     * @param integer  $offset
     * @param value    $value 
     */
    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->rows[] = $value;
        } else {
            $this->rows[$offset] = $value;
        }
    }

    /**
     * isset($object[$key])
     * @param  integer  $offset
     * @return boolean 
     */
    public function offsetExists($offset) {
        return isset($this->rows[$offset]);
    }

    /**
     * Remove Object variable
     * @param integer $offset
     */
    public function offsetUnset($offset) {
        unset($this->rows[$offset]);
    }

    /**
     * Get offest $object[$key]
     * @param  integer  $offset
     * @return value   
     */
    public function offsetGet($offset) {
        return isset($this->rows[$offset]) ? $this->rows[$offset] : null;
    }
    
    /**
     * Countable
     * @return integer
     */
    public function count(){
        return count($this->rows);
    }
    
    public function __call($func, $args){
        dd($func."(".implode(', ', $args).") is not a method of ".__CLASS__);
    }
    
    public function __toString(){
        return print_r($this->rows, true);
    }
    
    public function __get($offset){
        if(array_key_exists($offset, $this->rows)) {
            return $this->rows[$offset];
        }
    }
    /**
     * json_encode
     * @return [[Type]] [[Description]]
     */
    public function jsonSerialize() {
        return $this->rows;
    }
    
}
