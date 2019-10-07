<?php
class dbController{
    public $dbHost="localhost";
    public $dbUser="root";
    public $dbPass="";
    public $dbName="cbait";
    public $conn;


    function __construct(){
        $this->dbConnection();
    }

    public function dbConnection(){
        $this->conn=new mysqli($this->dbHost,$this->dbUser,$this->dbPass,$this->dbName);
        $this->conn->set_charset("utf8");
    }

    public function dataInsert($insertSQL){
        $runInsert=$this->conn->query($insertSQL);
        if ($runInsert==true){
            return true;
        }
        else{
            return false;
        }

    }
}


?>