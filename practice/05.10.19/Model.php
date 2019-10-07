<?php


class Model
{
    public function userInfoInsert(){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $sql="INSERT INTO `mvc_table`(`first_name`, `last_name`, `email`, `password`) VALUES ('$fname', '$lname','$email','$pass')";
        $controllerObj=new Controller();
        $runSQL=$controllerObj->dataInsert($sql);
        if($runSQL){
            return true;
        }else{
            return false;
        }
    }

    public function userInfoSelect(){
        $selectUserSQL="SELECT * FROM `mvc_table`";
        $controllerObj=new Controller();
        $runSelect=$controllerObj->dataSelect($selectUserSQL);
        if($runSelect){
            return $runSelect;
        }else{
            return false;
        }

    }
}