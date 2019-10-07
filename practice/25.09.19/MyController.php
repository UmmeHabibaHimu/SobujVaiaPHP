<?php


class MyController
{
    public $dbHost="localhost";
    public $dbUser="root";
    public $dbPassword="";
    public $dbName="cbait";
    public $dbCon;

    public function __construct()
    {
        $this->dbConnection();
    }

    public function dbConnection(){
        $this->dbCon=new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
        $this->dbCon->set_charset("utf8");
    }
    public function dataInsert($insertSQL){
        $runInsert=$this->dbCon->query($insertSQL);
        if($runInsert){
            return true;
        }else{
            return false;
        }
    }

}