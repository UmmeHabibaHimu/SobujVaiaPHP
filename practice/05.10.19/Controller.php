<?php


class Controller
{
    public $dbHost="localhost";
    public $dbUser="root";
    public $dbPassword="";
    public $dbName="cbait";
    public $conn;

    public function __construct()
    {
        $this->dbConnection();
    }

    public function dbConnection(){
        $this->conn=new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
        $this->conn->set_charset("utf8");
    }
    public function dataInsert($insertSQL){
        $runInsert=$this->conn->query($insertSQL);
        if($runInsert){
            return true;
        }else{
            return false;
        }
    }
    public function dataSelect($selectSQL){
        $runSelect=$this->conn->query($selectSQL);
        $row=$runSelect->num_rows;
        if($row==true && $row>=1){
            return $runSelect;
        }else{
            return false;
        }

    }
}