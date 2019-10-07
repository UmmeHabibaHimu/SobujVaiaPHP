<?php


class Controller
{
    public $dbHost      = "localhost";
    public $dbUser      = "root";
    public $dbPassword  = "";
    public $dbName      = "cbait";
    public $connection;

    public function __construct()
    {
        $this->dbConnection();
    }

    public function dbConnection(){
        $this->connection=new mysqli($this->dbHost,$this->dbUser,$this->dbPassword,$this->dbName);
        $this->connection->set_charset("utf8");
    }
    public function selectData($selectSQL){
        $select=$this->connection->query($selectSQL);
        $row=mysqli_fetch_assoc($select);
        return $row;

    }
    public function insertData($insertSQL){
        $runInsert=$this->connection->query($insertSQL);
        if($runInsert){
            return true;
        }else{
            return false;
        }
    }
    public function updateData($updateSQL){
        $runUpdate=$this->connection->query($updateSQL);
        if($runUpdate){
            return true;
        }else{
            return false;
        }
    }
    public function deleteData($deleteSQL){
    $runDelete=$this->connection->query($deleteSQL);
    if($runDelete){
        return true;
    }else{
        return false;
        }
    }
}
