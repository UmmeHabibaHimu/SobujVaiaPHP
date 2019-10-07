<?php
class dbConnection{
public $DBhost="localhost";
public $DBuser="root";
public $DBpass="";
public $DBname="cbait";
public $conn="";

function __construct(){
    $this->dataConn();
}

    function dataConn(){
    $this->conn=new mysqli($this->DBhost,$this->DBuser,$this->DBpass,$this->DBname);
    $this->conn->set_charset("utf8");
}
}

?>