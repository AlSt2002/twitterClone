<?php

namespace App\Lib;


use PDO;
use ReflectionClass;
use Throwable;


define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "twitter");

abstract class Database {

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;



    private function connectDB()
    {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
            $pdo = new PDO($dsn, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (Throwable $e) {
            echo "Lidhja me bazen e shenimeve deshtoi " . $e->getMessage();
        }
    }

    public function prepare($sql) {
        return $this->connectDB()->prepare($sql);
    }


    protected  function properties() {
        $properties = [];
        foreach(static::$db_fields as  $db_field) {
            if(property_exists($this, $db_field)) {
                $properties[$db_field] = $this->$db_field;
            }
        }

       
        return $properties;
    }

    protected function getClassName() {

        $class_name = new ReflectionClass($this);
        return $class_name = ucfirst($class_name->getShortName());
    }



    public function find_id($id) {
        
        $this->id = $id;
        $sql = "SELECT * FROM " . static::$db_table;
        $sql .= " WHERE id=:id";
        $stmt = $this->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\{$this->getClassName()}");
        return $stmt->fetch();

    }


    public function find_all() {
        $sql = "SELECT * FROM ". static::$db_table;
        $stmt = $this->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\{$this->getClassName()}");
        return $stmt->fetchAll();
    }
   

    public function create() {
       
        try {
            $properties = $this->properties();
            $array =   array_slice(static::$db_fields, 1);
            $sql = "INSERT INTO " . static::$db_table.  "("  . implode(',' , $array) . ")";
            $sql .= " VALUES (" . implode(',' , array_map(fn($e) => ':'.$e, $array)) . ")";

            $stmt = $this->prepare($sql);
            $p = array_slice($properties, 1);
            foreach($array as $value) {
                $stmt->bindParam(':'.$value, $p[$value]);
            }
            $stmt->execute();
            echo "{$this->getClassName()} added successfully";
        } catch (PDOException $e) {
            echo "Error in {$this->getClassName()} registration process " . $e->getMessage();
        }
    }


    public function delete() {
        try{
            $sql="DELETE FROM "  .static::$db_table. " WHERE id=:id";
            $stmt=$this->prepare($sql);
            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            echo "{$this->getClassName()} deleted successfully";
        }
        catch(PDOException $e){
            echo "Error in {$this->getClassName()} deletion process " . $e->getMessage();
        }
    }


}








?>