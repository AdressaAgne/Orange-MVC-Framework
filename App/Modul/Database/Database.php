<?php

namespace App\Modul\Database;

use IteratorAggregate;
use ArrayIterator;
use ArrayAccess;
use Countable;

class Database implements IteratorAggregate, ArrayAccess, Countable{
   
    /**
     * Do a foreach loop on the object
     * @return value
     */
    public function getIterator(){
        return new ArrayIterator($this);
    }
    
    /**
     * $object[$key] = $value
     * @param integer  $offset
     * @param value    $value 
     */
    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * isset($object[$key])
     * @param  integer  $offset
     * @return boolean 
     */
    public function offsetExists($offset) {
        return isset($this->{$offset});
    }

    /**
     * Remove Object variable
     * @param integer $offset
     */
    public function offsetUnset($offset) {
        unset($this->{$offset});
    }

    /**
     * Get offest $object[$key]
     * @param  integer  $offset
     * @return value   
     */
    public function offsetGet($offset) {
        return isset($this->{$offset}) ? $this->{$offset} : null;
    }
    
    /**
     * Countable
     * @return integer
     */
    public function count(){
        return count($this->routes);
    }
    
}
