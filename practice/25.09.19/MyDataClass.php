<?php
require_once 'MyController.php';

class MyDataClass
{


    public function userInformation(){
         $fname=$_POST['fname'];
         $lname=$_POST['lname'];
         $email=$_POST['email'];
         $password=$_POST['pass'];
         $confirm_password=$_POST['c_pass'];
         $sql="INSERT INTO `my_table`(`fname`, `lname`, `email`, `pass`, `c_pass`) VALUES ('$fname','$lname','$email','$password','$confirm_password')";
         $controllerObject=new MyController();
         $runInsert=$controllerObject->dataInsert($sql);
         if($runInsert){
             return true;
         }else{
             return false;
         }
    }
}