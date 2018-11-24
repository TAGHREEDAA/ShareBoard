<?php
/**
 * Created by PhpStorm.
 * User: taghreed
 * Date: 11/21/18
 * Time: 2:03 AM
 */

abstract class Model{

    protected $dbh;
    protected $statement;

    public function __construct(){
        try {
            $this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function query($query){
        $this->statement = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type=null){

        if(is_null($type)){
            switch ($value){
                case is_int($value):
                    $type= PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type= PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type= PDO::PARAM_NULL;
                    break;
                default:
                    $type= PDO::PARAM_STR;
            }
        }

        $this->statement->bindValue($param, $value, $type);
    }


    public function execute(){
        $this->statement->execute();
    }


    public function resultSet(){
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function lastInsertId(){
        return $this->dbh->lastInsertId();
    }

    public function single(){
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }


}