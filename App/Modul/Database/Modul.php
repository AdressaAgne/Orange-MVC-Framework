<?php

namespace App\Modul\Database;

use \App\Config as Config;
use \App\Modul\Database\Table as Table;
use PDO;

class Modul {
    public static $db;
    public static $table;
    
    /**
     * Init Database connection
     * @private
     * @param string $class Class called that extends Modul in \App\Modul
     */
    public function __construct($class){
        self::$table = explode('\\', $class);
        self::$table = strtolower(self::$table[count(self::$table) - 1]);
        
        try {
            $dns = 'mysql:host='.Config::$db['host'];
            $dns .= ';dbname='.Config::$db['database'];
            self::$db = new PDO($dns, Config::$db['username'], Config::$db['password']);
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (PDOException $e) {
             die('Could not connect to Database'. $e);
        }
    }
    
    /**
     * Bind Values to PDO prepare
     * @param object   &$query
     * @param array  &$args 
     */
    public static function arrayBinder(&$query, &$args) {
        foreach ($args as $key => $value) {
            $query->bindValue(':'.$key, htmlspecialchars($value));
        }
	}
    
    /**
     * Execute a PDO mysql Query
     * @param  string   $sql                   
     * @param  array    [$args                 = null]
     * @return object
     */
    protected static function query($sql, $args = null){
        $query = self::$db->prepare($sql);

        if($args !== null){
            self::arrayBinder($query, $args);
        }
        $query->execute();
            
        return $query;
    }
    
    /**
     * Select * from class
     * @param  array  [$rows                  = ['*']]
     * @return object Table[Row object] Object
     */
    public static function all($rows = ['*']){
        $modul = new Modul(static::class);
        return new Table($modul::query('SELECT '.implode(', ', $rows).' FROM '.$modul::$table)->fetchAll());
    }
    
    /**
     * Select $rows from static::class WHERE $where = $value
     * $rows, $where need to be injected.
     * @param  string [$where = 'id'] [[Description]]
     * @param  string [$value = '1']  [[Description]]
     * @param  array [$rows = ['*']] [[Description]]
     * @return object Table[Row object] object
     */
    public static function where($where = 'id', $value = '1', $rows = ['*']){
        $modul = new Modul(static::class);
        return new Table($modul::query('SELECT '.implode(', ', $rows).' FROM '.$modul::$table.' WHERE '.$where.' = :value', ['value' => $value])->fetchAll());
    }
    
}

