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
        $this->dbCon();
    }

    public function dbCon(){
        $this->conn=new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
        $this->conn->set_charset("utf8");
    }
    public function userDataInsert($insertSQLS){
        $runInsert=$this->conn->query($insertSQLS);
        if($runInsert){
            return true;
        }else{
            return false;
        }
    }
    public function userDataSelect($selectSQLS){
        $runSelect=$this->conn->query($selectSQLS);
        $row=$runSelect->num_rows;
        if($row==true && $row>=1){
            return $runSelect;
        }else{
            return false;
        }
    }
    public function userDataUpdate($updateSQLS){
        $runUpdate=$this->conn->query($updateSQLS);
        if($runUpdate){
            return true;
        }
        else{
            return false;
        }
    }
    public function userDataDelete($deleteSQLS){
        $runDelete=$this->conn->query($deleteSQLS);
        if($runDelete){
            return true;
        }else{
            return false;
        }
    }
}
?>