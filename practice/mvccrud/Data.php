<?php
require_once 'Controller.php';

class Data
{
    public function userInformationInsert(){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $department=$_POST['department'];
        $semester=$_POST['semester'];
        $roll=$_POST['roll'];
        $regi=$_POST['regi'];


        $insertSQL="INSERT INTO `we`(`fname`, `lname`, `department`, `semester`, `roll`, `regi`) VALUES ('$fname','$lname','$department','$semester','$roll','$regi')";
//        $updateSQL="UPDATE `we` SET `fname`=[value-2],`lname`=[value-3],`department`=[value-4],`semester`=[value-5],`roll`=[value-6],`regi`=[value-7],`photo`=[value-8] WHERE `id`";
//        $deleteSQL="DELETE FROM `we` WHERE `id`";

        $controllerObj=new Controller();
        $runInsertSQL=$controllerObj->insertData($insertSQL);
        if($runInsertSQL){
            return true;
        }else{
            return false;
        }
    }
    public function userInformationSelect(){
        $sql="SELECT * FROM `we`";
        $controllerObj=new Controller();
        $controllerObj->selectData($sql);
    }
}